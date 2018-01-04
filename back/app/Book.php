<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'book';

    protected $fillable = ['id', 'user_id', 'name', 'author'];
    public $timestamps = true;
}