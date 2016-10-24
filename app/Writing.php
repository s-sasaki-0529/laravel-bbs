<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Writing extends Model
{
    protected $table = 'writings';
    protected $fillable = ['thread_id' , 'name' , 'body'];
}
