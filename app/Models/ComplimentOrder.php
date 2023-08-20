<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComplimentOrder extends Model
{
    use HasFactory;

    protected $table = 'compliment_orders';
    protected $primaryKey ='complimentOrderId';
    protected $fillable =
     [
        'fkSoc',
        'subject',
        'message' ,
        'typeCode',
        'severityCode',
        'orderId',
        'userId'

    ];
}
