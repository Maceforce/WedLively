<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function confirm($guestId)
    {
        $guest = Guest::find($guestId);
        if ($guest) {
            $guest->rsvp_status = 'Accepted';
            $guest->save();

            return redirect()->route('home')->with('message', 'Thank you for confirming your attendance!');
        }

        return redirect()->route('home')->with('error', 'Guest not found.');
    }
	
	public  function weddingPlanning()
    {
        dd("Hello");
    }
}

