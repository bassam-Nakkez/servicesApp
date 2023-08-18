<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExtraInfoForPayment extends Model
{
    use HasFactory;

    protected $table = 'extra_info_for_payments';
    protected $primaryKey ='extraInfoForPayment_id';
    protected $fillable =
     [
        'orderID',
        'datepaye',
        'closepaidinvoices' ,
        'accountid',
        'num_payment',
        'comment',
    ];


    /**
     * Get the order that owns the ExtraInfoForPayment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function order()
    {
        return $this->belongsTo( Order::class , 'orderID');
    }
}
