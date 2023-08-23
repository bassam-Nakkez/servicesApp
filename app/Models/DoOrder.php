<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoOrder extends Model
{
    use HasFactory;


    protected $table = 'do_orders';
    protected $primaryKey ='doOrderId';
    protected $fillable =
     [
        'messageAfter',
        'message' ,
        'typeCode',
        'severityCode',
        'orderId',
        'userId'

    ];

    /**
     * Get the order that owns the DoOrder
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function order()
    {
        return $this->belongsTo(Order::class, 'orderID', 'orderID');
    }
}
