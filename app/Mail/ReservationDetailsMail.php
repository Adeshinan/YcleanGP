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
    public $extra;
    public $parametre;
    public $service;
    public $coupon;
    /**
     * Create a new message instance.
     */
    public function __construct($reservation,$extra,$parametre,$service,$coupon)
    {
        //

        $this->reservation = $reservation;
        $this->extra = $extra;
        $this->parametre = $parametre;
        $this->service = $service;
        $this->coupon = $coupon;
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