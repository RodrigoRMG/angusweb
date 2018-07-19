<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NuevoContato extends Mailable
{
    use Queueable, SerializesModels;
    public $mensaje;
    public $emailfrom;
    public $nombre;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nombre,$mensaje,$emailfrom)
    {
        $this->mensaje = $mensaje;
        $this->emailfrom = $emailfrom;
        $this->nombre = $nombre;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->emailfrom)->view('nuevoContacto')->subject('Nuevo mensaje de contacto Angus Santa Fe web');
    }
}
