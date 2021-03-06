<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    public function fichas()
    {
        return $this->hasMany('App\Worksheet');
    }

    public function asistencias()
    {
        return $this->hasMany('App\Assistance');
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'firstname', 'phone', 'email', 'email_verified_at', 
        'password', 'type', 'enterprise_id', 'cycle_id', 'delete',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
