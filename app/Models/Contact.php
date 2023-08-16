<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contacts';
    protected $primaryKey ='contactID';
    protected $fillable =
     [
      //  'firstName',
        'lastName',
        'email',
        'zip' ,
        'town',
        'userID',
    ];


    /**
     * Get the user that owns the Contact
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'userID','userID');
    }

    /**
     * Get the arrayOption associated with the Contact
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function arrayOption()
    {
        return $this->hasOne(ArrayOptions::class,'contactID');
    }

    /**
     * Get the order associated with the Contact
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function order()
    {
        return $this->hasOne(Order::class,'contactID');
    }

}
