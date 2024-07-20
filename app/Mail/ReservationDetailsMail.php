<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ReservationDetailsMail extends Mailable
{
    use Queueable, SerializesModels;


    public $reservation;
    /**
     * Create a new message instance.
     */
    public function __construct($reservation)
    {
        //

        $this->reservation = $reservation;
    }

    /**
     * Get the message envelope.
     */
    public function build()
    {
        
        return $this->subject('Nouvelle réservation')
                    ->view('emails.reservation');
                    
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.reservation',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}