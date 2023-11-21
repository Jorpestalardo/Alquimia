<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RecuperarContraMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $recoveryCode;

    /**
     * Create a new message instance.
     *
     * @param string $recoveryCode El código de recuperación
     */
    public function __construct($recoveryCode = null)
    {
        $this->recoveryCode = $recoveryCode;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.recovery-code')
            ->subject('Código de recuperación de contraseña');
    }
}