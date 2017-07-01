<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShortFilmUser extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'team_name', 'submitting_slot', 'paid_amount'
    ];
}
