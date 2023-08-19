<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArrayOptions extends Model
{
    use HasFactory;

    protected $table = 'array_options';
    protected $primaryKey ='addressID';
    protected $fillable =
     [
        'optionsLatitude',
        'optionsLongitude',
        'optionsSurfacem',
        'contactID'
    ];


    /**
     * Get the contact that owns the ArrayOptions
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contact()
    {
        return $this->belongsTo( Contact::class , 'addressID');
    }



}
