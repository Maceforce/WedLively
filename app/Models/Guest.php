<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;

    // Allow mass assignment for the specified fields
    protected $fillable = [
        'user_id',
        'name',
        'first_name',
        'last_name',
        'age',
        'email',
        'phone',
        'address',
        'city',
        'state',
        'zip_code',
        'group_id',
        'needhotel',
        'events',
        'rsvp_status',
        'meal_choice',       
        'needs_hotel',
        'invited_to',
        'invited_to_wedding',
        'invited_to_rehearsal',
        'invited_to_shower',
    ];

    // Define any relationships if needed, e.g., Group relation
    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
