<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Multiprice extends Model
{
    use HasFactory;
    protected $table = 'multiprices';
    protected $primaryKey ='id';
    protected $fillable =
     [
        "first",
        "second",

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
