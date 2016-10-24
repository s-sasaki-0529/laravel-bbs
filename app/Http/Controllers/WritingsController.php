<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WritingsController extends Controller
{
    protected $writing;

    public function __construct (Writing $writing) {
      $this->writing = $writing;
    }
}
