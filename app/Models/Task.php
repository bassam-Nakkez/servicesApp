<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $table = 'tasks';
    protected $primaryKey ='taskID';
    protected $fillable =
     [
        'label',
        'description',
        'color' ,
        'fk_parent',

    ];


    /**
     * Get the product that owns the Task
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class, 'fk_parent');
    }


}
