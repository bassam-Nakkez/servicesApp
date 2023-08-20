<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultipricesTaxRate extends Model
{
    use HasFactory;
    protected $table = 'multiprices_tax_rates';
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

    public function product()
    {
        return $this->belongsTo(Product::class, 'productID');
    }
}
