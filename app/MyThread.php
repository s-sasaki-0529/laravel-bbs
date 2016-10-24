<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyThread extends Model
{
    protected $table = 'threads';
    protected $fillable = ['title'];
}
