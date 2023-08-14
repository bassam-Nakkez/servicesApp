<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_Faq extends Model
{
    use HasFactory;
    protected $table = 'sub__faqs';
    protected $primaryKey ='id';

    protected $fillable =
    [
       'lable' ,
       'color',
       'description',
       'faqID',
   ];


   /**
    * Get the faq that owns the Sub_Faq
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
   public function faq()
   {
       return $this->belongsTo(Faq::class, 'faqID');
   }


}
