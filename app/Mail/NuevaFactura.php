<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NuevaFactura extends Mailable
{
    use Queueable, SerializesModels;

    public $id;
    public $nombre;
    public $rfc;
    public $emailfrom;
    public $direccion;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($id,$nombre,$rfc,$emailfrom,$direccion)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->rfc = $rfc;
        $this->emailfrom = $emailfrom;
        $this->direccion = $direccion;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->emailfrom)->view('nuevaFactura')->subject('Nueva solicitud de factura - Angus Santa Fe web');
    }
}
