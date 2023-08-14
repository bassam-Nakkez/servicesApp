<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RatingOrder extends Model
{
    use HasFactory;



    protected $table = 'rating_orders';
    protected $primaryKey ='id';
    protected $fillable =
     [
        'orderID',
        'options_efficacite',
        'options_ponctualite' ,
        'options_presentation',
        'options_avisgeneral',
        'options_iseval',
    ];

        /**
     * Get the order that owns the RatingOrder
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function order()
    {
        return $this->belongsTo( Order::class , 'orderID');
    }


 }
