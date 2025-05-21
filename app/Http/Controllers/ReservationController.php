<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\ReservationNotification;

class ReservationController extends Controller
{
    /**
     * Afficher le formulaire de réservation
     */
    public function index()
    {
        return view('reservations.index');
    }

    /**
     * Traiter la soumission du formulaire
     */
    public function store(Request $request)
    {
        // Validation des données
        $validator = Validator::make($request->all(), [
            'nom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'service' => 'required|in:BIM GEM et Modélisation,Conseil et Formation,BIM Management et Synthèse,Facility Management',
            'date_service' => 'required|date|after:today',
            'demande_speciale' => 'nullable|string|max:1000'
        ], [
            'nom.required' => 'Le nom est obligatoire',
            'email.required' => 'L\'email est obligatoire',
            'email.email' => 'L\'email doit être valide',
            'service.required' => 'Veuillez choisir un service',
            'service.in' => 'Le service sélectionné n\'est pas valide',
            'date_service.required' => 'La date de service est obligatoire',
            'date_service.after' => 'La date de service doit être ultérieure à aujourd\'hui',
            'demande_speciale.max' => 'La demande spéciale ne peut pas dépasser 1000 caractères'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            // Créer la réservation
            $reservation = Reservation::create([
                'nom' => $request->nom,
                'email' => $request->email,
                'service' => $request->service,
                'date_service' => $request->date_service,
                'demande_speciale' => $request->demande_speciale,
                'statut' => 'en_attente'
            ]);

            // Envoyer l'email de notification
            $this->sendNotificationEmail($reservation);

            return redirect()->back()->with('success', 'Votre réservation a été enregistrée avec succès. Vous recevrez une confirmation par email.');

        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Une erreur est survenue lors de l\'enregistrement de votre réservation. Veuillez réessayer.')
                ->withInput();
        }
    }

    /**
     * Envoyer l'email de notification
     */
    private function sendNotificationEmail(Reservation $reservation)
    {
        try {
            // Email à l'entreprise
            Mail::to('noreply@archidata-groupe.com')
                ->send(new ReservationNotification($reservation, 'entreprise'));

            // Email de confirmation au client
            Mail::to($reservation->email)
                ->send(new ReservationNotification($reservation, 'client'));

        } catch (\Exception $e) {
            // Log l'erreur mais ne pas échouer la réservation
            \Log::error('Erreur envoi email réservation: ' . $e->getMessage());
        }
    }

    /**
     * Afficher les réservations (pour l'admin)
     */
    public function list()
    {
        $reservations = Reservation::orderBy('created_at', 'desc')->paginate(20);
        return view('reservations.list', compact('reservations'));
    }

    /**
     * Mettre à jour le statut d'une réservation
     */
    public function updateStatus(Request $request, Reservation $reservation)
    {
        $request->validate([
            'statut' => 'required|in:en_attente,confirmee,annulee'
        ]);

        $reservation->update(['statut' => $request->statut]);

        return redirect()->back()->with('success', 'Statut mis à jour avec succès.');
    }
}