<?php

namespace App\Mail;

use App\Models\Guest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class GuestInvitation extends Mailable
{
    use Queueable, SerializesModels;

    public $guest;

    public function __construct(Guest $guest)
    {
        $this->guest = $guest;
    }

    public function build()
    {
        return $this->subject('You are Invited!')
            ->view('emails.guest-invitation')
            ->with([
                'guest' => $this->guest,
                'confirmationLink' => route('guest.confirm', ['guest' => $this->guest->id]),
            ]);
    }
}
