<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ApplicationInProcess extends Mailable
{
    use Queueable, SerializesModels;

    public $application;

    public function __construct($application)
    {
        $this->application = $application;
    }

    public function build()
    {
        return $this->view('emails.application_in_process')
                    ->with([
                        'name' => $this->application->name,
                        'position' => $this->application->position,
                        'message' => $this->application->message,
                    ]);
    }
}
