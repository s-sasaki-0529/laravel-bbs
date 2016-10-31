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

    /* 特定のレコードを削除 */
    public function deleteById($id) {
      $target = $this->find($id);
      $target->delete();
      Writing::where('thread_id' , $id)->delete();
    }

    /* 全スレッド一覧と、そのスレッドに対する総書き込み数を取得 */
    public function allWithWritingsCount () {
      $threads = $this->all();
      $writings = Writing::all();
      $writingsCount = [];
      foreach ($writings as $writing) {
        $thread_id = $writing->thread_id;
        if (isset($writingsCount[$thread_id])) {
          $writingsCount[$thread_id] += 1;
        } else {
          $writingsCount[$thread_id] = 1;
        }
      }
      foreach ($threads as $thread) {
        $thread->attributes['writingsCount'] = $writingsCount[$thread->id];
      }
      return $threads;
    }
}
