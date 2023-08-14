<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryPhoto extends Model
{
    use HasFactory;

    protected $table = 'category_photos';
    protected $primaryKey ='categoryID';
    protected $fillable =
     [
        'photo',
    ];




}
