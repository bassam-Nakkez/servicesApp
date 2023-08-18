<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;


    protected $table = 'categories';
    protected $primaryKey ='categoryID';
    protected $fillable =
     [
        'lable' ,
        'color',
        'description',
        'photo',
    ];

    /**
     * Get all of the photos for the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function photo()
    {
        return $this->hasMany(CategoryPhoto::class, 'categoryID');
    }



    /**
     * Get all of the product for the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function product(): HasMany
    {
        return $this->hasMany(Product::class, 'categoryID');
    }

}
