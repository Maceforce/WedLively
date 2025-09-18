<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorSubscription extends Model
{
    protected $fillable = ['premium_vendor_id', 'billing_date', 'amount'];
    
    public function premiumVendor()
    {
        return $this->belongsTo(PremiumVendor::class);
    }
}
