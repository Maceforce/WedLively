<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'date',
        'location',
        'description',
    ];

	public function groups()
    {
        return $this->belongsToMany(Group::class, 'event_rsvps', 'event_id', 'group_id');
    }
}

