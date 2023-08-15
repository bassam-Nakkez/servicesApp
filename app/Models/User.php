<?php

namespace App\Models;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $primaryKey ='userID';
    protected $fillable =
     [
        'userID',
        'firstName',
        'lastName',
        'email',
        'gender',
        'birth',
        'password' ,
        'status',
        'civility_code',
        'personal_email',
        'notificationDisable',
        'address',
        'zip',
        'state_id',
        'office_phone' ,
        'office_fax',
        'user_mobile',
        'personal_mobile',
        'login',
        'datec',
        'datem',
        'town',
        'socid',
        'user' ,
        'country_id',
        'country_code',
        'type',
        'fk_user',
    ];


    /**
     * Get all of the contact for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contact(): HasMany
    {
        return $this->hasMany(Contact::class, 'userID');
    }


}
