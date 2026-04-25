<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    public $data; // Contiendra nom, email et message

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject('Nouveau message de votre Portfolio')
            ->html("
                        <h2>Nouveau message de contact</h2>
                        <p><strong>Nom :</strong> {$this->data['name']}</p>
                        <p><strong>Email :</strong> {$this->data['email']}</p>
                        <p><strong>Message :</strong><br>{$this->data['message']}</p>
                    ");
    }
}
