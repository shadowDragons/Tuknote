<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';

    protected $fillable = ['id', 'name', 'email', 'password', 'salt', 'api_token'];
    public $timestamps = true;
}