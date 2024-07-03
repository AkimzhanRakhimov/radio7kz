<?php

namespace App\Mail;

use App\Models\FormData;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FormDataMail extends Mailable
{
    use Queueable, SerializesModels;

    public $formData;

    public function __construct(FormData $formData)
    {
        $this->formData = $formData;
    }

    public function build()
    {
        return $this->view('emails.formdata');
    }
}
