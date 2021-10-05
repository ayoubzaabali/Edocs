<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClearController extends Controller
{
    function index(){
      Artisan::call('config:cache');
    }
}
