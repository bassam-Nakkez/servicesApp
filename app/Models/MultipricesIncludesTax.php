<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultipricesIncludesTax extends Model
{
    use HasFactory;
    protected $table = 'multiprices_includes_taxes';
    protected $primaryKey ='id';
    protected $fillable =
     [
        "first",
        "second"
    ];

    protected $hidden = [
        "first",
        "second",
        "productID",
        "created_at",
         "updated_at"
    ];


    /**
     * Get the product that owns the MultipricesIncludesTax
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class, 'productID');
    }
}
