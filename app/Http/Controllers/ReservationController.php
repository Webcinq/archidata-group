<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\ReservationNotification;
use Illuminate\Validation\Rule;
use Log;

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
    Log::info('Début de la soumission du formulaire', $request->all());

    // Validation des données
    $validator = Validator::make($request->all(), [
        'nom' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'service' => 'required',    Rule::in([
        'BIM & DATA Management',
        'Le DOE BIM',
        'SCAN & Modélisation BIM',
        'Jumeaux Numériques',
        'Synthèse BIM',
        'CIM Management',
        'DATA Management',
        'Conseil & Accompagnement',
    ]),
        'date_service' => 'required|date|after:today',
        'demande_speciale' => 'nullable|string|max:1000'
    ], [
        // ... vos messages d'erreur
    ]);

    if ($validator->fails()) {
        Log::error('Échec de la validation', $validator->errors()->toArray());
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

    Log::info('Validation réussie');

    try {
        Log::info('Tentative de création de la réservation');
        $reservation = Reservation::create([
            'nom' => $request->nom,
            'email' => $request->email,
            'service' => $request->service,
            'date_service' => $request->date_service,
            'demande_speciale' => $request->demande_speciale,
            'statut' => 'en_attente'
        ]);
        Log::info('Réservation créée', $reservation->toArray());

        Log::info('Envoi de l\'email de notification');
        $this->sendNotificationEmail($reservation);
        Log::info('Email envoyé avec succès');

        return redirect()->back()->with('success', 'Réservation créée avec succès!');

    } catch (\Exception $e) {
        Log::error('Erreur lors de la création de la réservation', [
            'message' => $e->getMessage(),
            'trace' => $e->getTraceAsString()
        ]);
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
            Log::error('Erreur envoi email réservation: ' . $e->getMessage());
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