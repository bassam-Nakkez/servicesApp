<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Multiprice extends Model
{
    use HasFactory;
    protected $table = 'multiprices';
    protected $primaryKey ='productID';
    protected $fillable =
     [
        'first',
        'second',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'productID');
    }

}
