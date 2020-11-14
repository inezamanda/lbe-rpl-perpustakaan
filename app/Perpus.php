<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perpus extends Model
{
    protected $fillable = [
        'title',
        'author',
        'location',
        'publisher',
        'print_year',
        'user_id'
    ];
}
