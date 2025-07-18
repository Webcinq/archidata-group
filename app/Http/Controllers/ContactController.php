<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function index()
    {
        // Générer un CAPTCHA mathématique simple
        $this->generateSimpleCaptcha();
        
        return view('contact');
    }

    public function sendMail(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2',
            'email' => 'required|email',
            'phone' => 'nullable|string',
            'project_type' => 'nullable|string',
            'message' => 'required|min:10',
            'captcha' => 'required|numeric'
        ], [
            'captcha.required' => 'Veuillez répondre au calcul.',
            'captcha.numeric' => 'La réponse doit être un nombre.',
            'name.required' => 'Le nom est requis.',
            'name.min' => 'Le nom doit contenir au moins 2 caractères.',
            'email.required' => 'L\'email est requis.',
            'email.email' => 'Veuillez entrer une adresse email valide.',
            'message.required' => 'Le message est requis.',
            'message.min' => 'Le message doit contenir au moins 10 caractères.'
        ]);

        // Vérifier le CAPTCHA mathématique
        $correctAnswer = Session::get('captcha_answer');
        if ($request->captcha != $correctAnswer) {
            // Régénérer un nouveau CAPTCHA en cas d'erreur
            $this->generateSimpleCaptcha();
            return back()->withErrors(['captcha' => 'La réponse au calcul est incorrecte. Veuillez réessayer.'])->withInput();
        }

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'project_type' => $request->project_type,
            'message' => $request->message
        ];

        try {
            Mail::to('connect@archidata-groupe.com')->send(new ContactMail($details));
            
            // Régénérer un nouveau CAPTCHA après envoi réussi
            $this->generateSimpleCaptcha();
            
            return back()->with('success', 'Merci pour votre message. Nous vous répondrons dans les plus brefs délais.');
        } catch (\Exception $e) {
            // Régénérer un nouveau CAPTCHA en cas d'erreur
            $this->generateSimpleCaptcha();
            return back()->withErrors(['error' => 'Une erreur est survenue lors de l\'envoi du message. Veuillez réessayer.'])->withInput();
        }
    }

    public function reloadCaptcha()
    {
        $this->generateSimpleCaptcha();
        $question = Session::get('captcha_question');
        
        return response()->json(['captcha' => $question]);
    }

    /**
     * Générer un CAPTCHA mathématique simple
     */
    private function generateSimpleCaptcha()
    {
        // Utiliser des nombres plus petits pour un calcul facile
        $num1 = rand(1, 9);
        $num2 = rand(1, 9);
        
        // Choisir aléatoirement entre addition et soustraction
        $operation = rand(0, 1) ? '+' : '-';
        
        if ($operation === '+') {
            $answer = $num1 + $num2;
            $question = $num1 . ' + ' . $num2 . ' = ?';
        } else {
            // S'assurer que le résultat est positif pour la soustraction
            if ($num1 < $num2) {
                $temp = $num1;
                $num1 = $num2;
                $num2 = $temp;
            }
            $answer = $num1 - $num2;
            $question = $num1 . ' - ' . $num2 . ' = ?';
        }
        
        Session::put('captcha_answer', $answer);
        Session::put('captcha_question', $question);
    }
}