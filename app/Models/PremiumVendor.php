<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PremiumVendor extends Model
{
    protected $fillable = ['user_id', 'stripe_subscription_id', 'next_billing_date'];
    
    public function subscriptions()
    {
        return $this->hasMany(VendorSubscription::class);
    }
}
