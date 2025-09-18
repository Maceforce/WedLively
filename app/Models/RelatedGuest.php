<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelatedGuest extends Model
{
    use HasFactory;

    protected $fillable = [
        'wedding_guest_id', 'first_name', 'last_name', 'relationship'
    ];

    public function weddingGuest()
    {
        return $this->belongsTo(Guest::class);
    }
}
