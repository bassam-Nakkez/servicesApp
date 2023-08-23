<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HelpForm extends Model
{
    use HasFactory;

    protected $table = 'help_forms';
    protected $primaryKey ='id';
    protected $fillable =
     [
        'fkSoc',
        'subject',
        'message' ,
        'typeCode',
        'severityCode',
    ];

    /**
     * Get the user associated with the HelpForm
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne(User::class, 'userID', 'userID');
    }

}
