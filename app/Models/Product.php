<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Parser\Multiple;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey ='productID';
    protected $fillable =
     [
        'lable',
        'price',
        'priceMin',
        'priceIncludesTax',
        'condtion',
        'categoryID',

    ];


    /**
     * Get the category that owns the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'categoryID');
    }

    /**
     * Get the multiprices associated with the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function multiprices()
    {
        return $this->hasOne(Multiple::class);
    }

    public function MultipricesIncludesTaxes()
    {
        return $this->hasOne(Multiple::class);
    }


    public function MultipricesTaxRate()
    {
        return $this->hasOne(Multiple::class);
    }



}
