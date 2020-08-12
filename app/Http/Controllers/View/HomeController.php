<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Handler;

class HomeController extends Controller
{
    //
    public function index(){
        return view('view.home');
    }
}
