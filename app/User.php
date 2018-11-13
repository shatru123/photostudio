<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    const ADMIN_TYPE = '1';
    const DEFAULT_TYPE = '0';
    public function isAdmin()    {
        return $this->type === self::ADMIN_TYPE;
    }


    protected $fillable = [
        'name', 'email', 'password','type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function photos(){

       // return $this->belongsTo('App\Photo','client_id');

        return $this->hasMany(Photo::class);

    }


}
