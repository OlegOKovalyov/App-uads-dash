<?php

namespace App;

//use Illuminate\Database\Eloquent\User as Authenticatable;
//use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model as Authenticatable;

class Uadsuser extends Authenticatable
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'login', 'name', 'email', 'password', 'role',
    ];
}