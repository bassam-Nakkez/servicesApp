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
}
