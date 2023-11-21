<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RecoveryCodeEmail extends Mailable
{
    use SerializesModels;

    public $recoveryCode;

    public function __construct($recoveryCode)
    {
        $this->recoveryCode = $recoveryCode;
    }

    public function build()
    {
        return $this->markdown('emails.recovery-code')
            ->subject('Código de recuperación de contraseña');
    }
}
