<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MyThread;
use App\Http\Requests;

class MyThreadsController extends Controller
{
    protected $thread;

    public function __construct (MyThread $thread) {
      $this->thread = $thread;
    }

    public function getThreadList () {
      $threads = $this->thread->all();
      return view('MyThreads.list')->with(compact('threads'));
    }

    public function getCreateThreadPage () {
      return view('MyThreads.create');
    }

    public function createThread () {
    }
}
