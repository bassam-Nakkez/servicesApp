<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    use HasFactory;

    protected $fillable =
    [
       'radioOfSalary' ,
       'livingAllowance',
       'Conveyance',
       'HRA',
       'MedicalAllowance',
       'userID'

   ];

      /**
    * Get the faq that owns the Sub_Faq
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function easer()
    {
        return $this->belongsTo(User::class, 'userID','userID');
    }

}
