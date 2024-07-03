<?php

namespace App\Mail;

use App\Models\MainFormData;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MainFormDataMail extends Mailable
{
    use Queueable, SerializesModels;

    public $mainFormData;

    public function __construct(MainFormData $mainFormData)
    {
        $this->mainFormData = $mainFormData;
    }

    public function build()
    {
        return $this->view('emails.mainformdata');
    }
}
