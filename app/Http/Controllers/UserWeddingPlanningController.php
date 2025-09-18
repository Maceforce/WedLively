<?php

namespace App\Http\Controllers;


use App\Models\UserWeddingPlanning;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserWeddingPlanningController extends Controller
{
      // Store a newly created wedding planning entry in storage
      public function store(Request $request)
      {
          $request->validate([
              'name' => 'required|string|max:255',
              'email' => 'required|email|max:255',
              'getting_married' => 'required|string|max:255',
              'wedding_date' => 'required|date',
              'number_of_guests' => 'required|integer',
              'estimated_budget' => 'required|numeric',
              'city_town' => 'required|string|max:255',
              'vendors' => 'nullable|array',
          ]);
  
          $userWeddingPlanning = UserWeddingPlanning::create([
              'user_id' => Auth::id(), // Assuming you want to associate it with the logged-in user
              'name' => $request->name,
              'email' => $request->email,
              'getting_married' => $request->getting_married,
              'wedding_date' => $request->wedding_date,
              'number_of_guests' => $request->number_of_guests,
              'estimated_budget' => $request->estimated_budget,
              'city_town' => $request->city_town,
              'vendors' => $request->vendors ? json_encode($request->vendors) : null,
          ]);
  
          return redirect()->back()->with('success', 'Wedding planning entry created successfully.');
      }
}
