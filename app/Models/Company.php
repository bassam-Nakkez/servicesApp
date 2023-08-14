<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table = 'companies';
    protected $primaryKey ='companyID';
    protected $fillable =
     [
        'userID',
        'firstName',
        'lastName',
        'email',
        'password' ,
        'phone',
        'login',
        'default_rib',
        'frstrecur',
        'label',
        'code_banque',
        'code_guichet',
        'account_number',
        'cle_rib',
        'bank' ,
        'bic',
        'iban',

    ];




}
