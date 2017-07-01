<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InstagramUser extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'phone', 'line_id', 'instagram_username', 'from_instance', 'submitting_slot'
    ];
}
