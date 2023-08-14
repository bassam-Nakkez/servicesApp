<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPhoto extends Model
{
    use HasFactory;
    protected $table = 'product_photos';
    protected $primaryKey ='productID';
    protected $fillable =
     [
        'productID',
        'photo',

    ];

    /**
     * Get the product that owns the ProductPhoto
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class, 'productID');
    }


}
