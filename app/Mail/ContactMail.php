<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name,$tel,$msj,$email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name="Es una prueba",$tel="Es una prueba",$msj="Mucho texto",$email="oscjweb@gmail.com")
    {
        $this->name=$name;
        $this->tel=$tel;
        $this->msj=$msj;
        $this->email=$email;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('example@example.com', 'Contacto www.oscj.com.ar')->view('mail');
    }
}
