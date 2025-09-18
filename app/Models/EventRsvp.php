<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventRsvp extends Model
{
    use HasFactory;

    protected $fillable = ['group_id', 'guest_id', 'event_id', 'rsvp_status'];
}
