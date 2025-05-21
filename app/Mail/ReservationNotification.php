<?php

namespace App\Mail;

use App\Models\Reservation;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ReservationNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $reservation;
    public $type;

    /**
     * Create a new message instance.
     */
    public function __construct(Reservation $reservation, $type = 'entreprise')
    {
        $this->reservation = $reservation;
        $this->type = $type;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        if ($this->type === 'entreprise') {
            return new Envelope(
                subject: 'Nouvelle réservation de service - ' . $this->reservation->service,
            );
        } else {
            return new Envelope(
                subject: 'Confirmation de votre réservation - Archidata Groupe',
            );
        }
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        if ($this->type === 'entreprise') {
            return new Content(
                view: 'emails.reservation-entreprise',
                with: ['reservation' => $this->reservation]
            );
        } else {
            return new Content(
                view: 'emails.reservation-client',
                with: ['reservation' => $this->reservation]
            );
        }
    }

    /**
     * Get the attachments for the message.
     */
    public function attachments(): array
    {
        return [];
    }
}