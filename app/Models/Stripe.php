<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stripe extends Model
{
    use HasFactory;

    protected $table = 'stripes';
    protected $primaryKey ='id';
    protected $fillable =
     [
        'amount',
        'currency',
        'payment_method' ,
        'use_stripe_sdk',
        'orderID',
    ];


  
}
