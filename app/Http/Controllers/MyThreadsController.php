<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MyThread;
use App\Writing;
use App\Http\Requests;

class MyThreadsController extends Controller
{
    protected $thread;

    public function __construct (MyThread $thread) {
      $this->thread = $thread;
    }

    /* スレッド一覧ページを表示 */
    public function getThreadList () {
      $threads = $this->thread->all();
      return view('MyThreads.list')->with(compact('threads'));
    }

    /* スレッド内容を表示 */
    public function getThreadpage ($id) {
      $thread = $this->thread->find($id);
      $writings = Writing::where('thread_id' , $id)->get();
      return view('MyThreads.content' , compact('thread' , 'writings'));
    }

    /* スレッド新規作成ページを表示 */
    public function getCreateThreadPage () {
      return view('MyThreads.create');
    }

    /* スレッドを新規作成 */
    public function createThread (Request $request) {
    }

    /* スレッドに書き込みを投稿 */
    public function createWriting (Request $request , $id) {
      $data = $request->all();
      $data['thread_id'] = (int)$id;
      $writing = new Writing;
      $writing->fill($data);
      $writing->save();
      return redirect()->to('/thread/detail/' . $id);
    }

}
