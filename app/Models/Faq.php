<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    protected $table = 'faqs';
    protected $primaryKey ='faqID';
    protected $fillable =
     [
        'label',
        'color',
        'description' ,
    ];

        /**
     * Get all of the line for the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subfaq()
    {
        return $this->hasMany(Sub_Faq::class, 'faqID','faqID');
    }


}
