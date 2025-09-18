<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', 'last_name', 'phone', 'email', 'group_name', 
        'needs_hotel', 'invited_to_wedding', 'invited_to_rehearsal', 'invited_to_shower'
    ];

    public function relatedGuests()
    {
        return $this->hasMany(RelatedGuest::class);
    }
}

