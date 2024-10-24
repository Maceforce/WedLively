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
        'email',
        'getting_married',
        'wedding_date',
        'number_of_guests',
        'estimated_budget',
        'city_town',
        'vendors',
    ];

    protected $casts = [
        'vendors' => 'array', // Cast vendors as an array
    ];

    // Define any relationships, for example, with User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
