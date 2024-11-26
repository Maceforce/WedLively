<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Guest;
use Illuminate\Support\Facades\DB;

class GuestSeeder extends Seeder
{
    public function run()
    {
        // Sample guests data
        $guests = [
            [
                'user_id' => 29,
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'phone' => '1234567890',
                'rsvp_status' => 'Pending',
                'meal_choice' => 'Vegetarian',
                'group_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 29,
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'phone' => '0987654321',
                'rsvp_status' => 'Accepted',
                'meal_choice' => 'Non-Vegetarian',
                'group_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more guest records as needed
        ];

        // Insert the data
        DB::table('guests')->insert($guests);
    }
}
