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

    /*特定のスレッドに対する書き込みの一覧を取得*/
    public function getByThreadId ($thread_id) {
      $writings = $this->where('thread_id' , $thread_id)->get();
      for ($i = 0; $i < count($writings); $i++) {
        $writings[$i]->number = $i + 1;
      }
      return $writings;
    }
}
