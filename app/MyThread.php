<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyThread extends Model
{
    protected $table = 'threads';
    protected $fillable = ['title'];

    /* レコードを追加 */
    public function insert($title) {
      $this->fill(compact('title'));
      $this->save();
    }
}
