<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Api\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

/**
 * Description of User
 *
 * @author ABAZA
 */
class User extends Authenticatable  implements JWTSubject
{
    use Notifiable;
    
    protected $table = 'users';
    
    protected $connection = '';
    
    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'email',
        'gender',
        'verified',
        'password',
        'p_language',
        'dob',
        'country_id',
    ];
    
    
    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

}
