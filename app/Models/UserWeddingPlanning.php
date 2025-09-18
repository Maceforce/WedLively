<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserWeddingPlanning extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'partner_name',
        'email',
        'getting_married',
        'wedding_date',
        'number_of_guests',
        'estimated_budget',
        'location_id',
        'subcategories',
        'events',
        'groups',
    ];

    protected $casts = [
        'subcategories' => 'array', 
        'events' => 'array',
        'groups' => 'array',
    ];

    // Define any relationships, for example, with User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
