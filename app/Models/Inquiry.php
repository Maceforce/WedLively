<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'vendor_id',
        'planner_id',
        'date',
        'location',
        'query',
        'status',
		'planner_name',
		'planner_email',
		'vendor_name',
		'vendor_email',
		'service_name',
		'service_url',
    ];
}
