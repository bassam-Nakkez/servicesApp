<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Line extends Model
{
    use HasFactory;


    protected $table = 'lines';
    protected $primaryKey ='lineID';
    protected $fillable =
     [
        'orderID',
        'qty',
        'dateStart',
        'dateEnd',
        'price',
        'subPrice',
        'multicurrency_subprice',
        'multicurrency_total_ttc',
        'multicurrency_total_ht',
        'multicurrency_total_tva',
        'multicurrency_tx',
        'multicurrency_code',
        'tva_tx',
        'total_ht',
        'total_tva',
        'total_ttc',
        'total_localtax1',
        'total_localtax2',
        'fk_product'

    ];



    /**
     * Get the report associated with the Line
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function report(): HasOne
    {
        return $this->hasOne(HelpForm::class, 'lineID');
    }


    /**
     * Get the order that owns the Line
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function order()
    {
        return $this->belongsTo(Order::class, 'orderID');
    }



    /**
     * Get the LineOptions associated with the Line
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function LineOptions()
    {
        return $this->hasOne(LineOptions::class , 'lineID');
    }

    /**
     * Get the product that owns the Line
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class, 'fk_product', 'productID');
    }




}
