<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactanosMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "Informacion de Contacto";
    public $contacto ;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contacto)  // $contacto es de tipo Request->all()  Un arreglo
    {   
        $this->contacto = $contacto; 
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->view('emails.contactanos');
    }
}
