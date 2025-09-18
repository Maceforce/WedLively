<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PremiumFeatureController extends Controller
{
    //
     // Show the premium feature page
     public function index()
     {
         // You can pass additional data if needed
         return view('premium.feature');
     }
}
