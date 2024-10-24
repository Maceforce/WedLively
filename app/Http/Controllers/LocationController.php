<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Search locations by city or location name
        $locations = Location::where('city_name', 'LIKE', "%{$query}%")
                             ->orWhere('location_name', 'LIKE', "%{$query}%")
                             ->get();

        // Return results as a JSON response
        return response()->json($locations);
    }
}

