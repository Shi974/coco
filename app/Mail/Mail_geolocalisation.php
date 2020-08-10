<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Mail_geolocalisation extends Mailable {
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data) {
        $this -> data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        return $this -> from ('contact@colliercoco.fr', 'CoCo - Collier Connecté')
        -> subject ('Géolocalisation de votre animal')
        -> markdown ('mails.geolocalisation') -> with(['data' => $this -> data]);
    }
}
