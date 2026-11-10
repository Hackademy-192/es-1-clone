<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TravelBookingMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $travel;

    public function __construct($data, $travel)
    {
        $this->data = $data;
        $this->travel = $travel;
    }

    public function build()
    {
        return $this->subject('Nuova Prenotazione Viaggio Ricevuta!')
                    ->view('emails.booking');
    }
}