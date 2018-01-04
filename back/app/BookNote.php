<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookNote extends Model
{
    protected $table = 'book_note';

    protected $fillable = ['id', 'book_id', 'book_mark_id', 'note'];
    public $timestamps = true;
}