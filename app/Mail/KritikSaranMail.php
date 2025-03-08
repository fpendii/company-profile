<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class KritikSaranMail extends Mailable
{
    use Queueable, SerializesModels;

    public $kritikSaran;

    public function __construct($kritikSaran)
    {
        $this->kritikSaran = $kritikSaran;
    }

    public function build()
    {
        return $this->subject('Kritik & Saran Baru')
                    ->view('emails.kritik_saran')
                    ->with('kritikSaran', $this->kritikSaran);
    }
}
