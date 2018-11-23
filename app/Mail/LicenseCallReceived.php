<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Assistance;
use App\Patient;

class LicenseCallReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $assistanceCall;

    public function __construct(Assistance $assistanceCall)
    {
        $this->assistanceCall = $assistanceCall;
    }

    public function build()
    {
        //$patient = Assistance::find($assistanceCall->patient_id);
        $patient = Patient::pluck('email');
        Mail::to($patient)->send(new LicenseCallReceived($call));
        return $this->view('mails.license_call');
    }
}