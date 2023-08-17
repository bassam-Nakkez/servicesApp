<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryPhoto extends Model
{
    use HasFactory;

    protected $table = 'category_photos';
    protected $primaryKey ='id';
    protected $fillable =
     [
        'name',
        'level1name',
        'relativename',
        'date',
        'size',
        'type',
        'fullname',
        'path'
    ];

    /**
     * Get the category that owns the CategoryPhoto
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'categoryID', 'categoryID');
    }


}
