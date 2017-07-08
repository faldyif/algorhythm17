<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id', 'from_instance', 'phone', 'paid_amount'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function user() {
        if($this->role_id == 1)
        {
            return $this->hasOne('App\ShortFilmUser', 'user_id');
        }
    }

    public function getKategori() {
        if($this->role_id == 1)
        {
            return "Short Movie Competition";
        }
        else
        {
            return "Concert Competition";
        }
    }
}
