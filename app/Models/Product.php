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
        'description'


    ];


    /**
     * Get the category that owns the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'categoryID'  ,'categoryID');
    }


    /**
     * Get the multiprices associated with the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function multiprices()
    {
        return $this->hasOne(Multiprice::class,'productID','productID');
    }

    public function multipricesIncludesTax()
    {
        return $this->hasOne(MultipricesIncludesTax::class,'productID','productID');
    }


    public function multipricesTaxRate()
    {
        return $this->hasOne(MultipricesTaxRate::class,'productID','productID');
    }



}
