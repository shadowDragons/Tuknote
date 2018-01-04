<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookMark extends Model
{
    protected $table = 'book_mark';

    protected $fillable = ['id', 'book_id', 'mark'];
    public $timestamps = true;
}