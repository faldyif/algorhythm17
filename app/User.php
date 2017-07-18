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

    public function shortFilm() {
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
        else if($this->role_id == 3)
        {
            return "Concert";
        }
    }

    public function isPaymentDone() {
        if($this->role_id == 1)
        {
            return $this->paid_amount >= $this->shortFilm->submitting_slot * 60000; // biaya movie 60k
        }
        else if($this->role_id == 3)
        {
            return $this->paid_amount >= 10000; // biaya concert 10k
        }
    }

    public function submissions() {
        if($this->role_id == 1)
        {
            return $this->hasMany('App\MovieSubmission', 'user_id');
        }
    }

    public function latestPayment() {
        if($this->role_id == 1)
        {
            return $this->hasMany('App\PaymentConfirmation', 'user_id')->latest();
        }
    }
}
