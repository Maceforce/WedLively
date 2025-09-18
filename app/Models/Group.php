<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

	protected $fillable = [
        'name', // Example existing attributes
        'description', // Example existing attributes
        'user_id', // Add this line
    ];

	public function guests()
    {
        return $this->hasMany(Guest::class);
    }

    public function events()
    {
        return $this->hasManyThrough(Event::class, EventRsvp::class, 'group_id', 'id', 'id', 'event_id');
    }
}
