<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Writing extends Model
{
    protected $table = 'writings';
    protected $fillable = ['thread_id' , 'name' , 'body'];

    /* レコードを追加 */
    public function insert ($thread_id , $name , $body) {
      $this->fill(compact('thread_id' , 'name' , 'body'));
      $this->save();
    }

    /* 特定のレコードを削除 */
    public function deleteById ($id) {
      $target = $this->find($id);
      $target->delete;
    }
}
