<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $primaryKey ='orderID';
    protected $fillable =
     [
        'socid',
        'type',
        'contactID',
        'date',
        'note_public',
        'subscriptionType',
        'dateCommande',
        'status',
        'isRecurrent',
        'multicurrency_subprice',
        'multicurrency_tx',
        'multicurrency_code',
        'multicurrency_total_ttc',
        'multicurrency_total_tva',
        'tva_tx',
        'total_ht',
        'total_tva',
        'total_localtax1',
        'total_localtax2',
        'total_ttc',
        'multicurrency_total_ht',
        'subprice',
    ];


    /**
     * Get the contact that owns the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contact()
    {
        return $this->belongsTo(Contact::class, 'contactID');
    }


    /**
     * Get the ExtraInfoForPayment associated with the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ExtraInfoForPayment(): HasOne
    {
        return $this->hasOne(ExtraInfoForPayment::class);
    }

    /**
     * Get the ratingOrder associated with the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ratingOrder(): HasOne
    {
        return $this->hasOne(RatingOrder::class);
    }

}
