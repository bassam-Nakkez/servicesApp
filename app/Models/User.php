<?php

namespace App\Models;

use App\Models\Contact;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users';
    protected $primaryKey ='userID';
    protected $fillable =
     [
        'userID',
        'firstName',
        'lastName',
        'token',
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
        'groupId',
        'state_id',
        'office_phone' ,
        'phone',
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
        "entity",
        "reset",
        "API-KEY"
    ];


    protected $hidden = [
        'password',
        "API-KEY"
    ];

    /**
     * Get all of the contact for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contact()
    {
        return $this->hasMany(Contact::class, 'userID');
    }


    /**
     * Get all of the order for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function order(): HasMany
    {
        return $this->hasMany(Comment::class, 'userID');
    }


}
