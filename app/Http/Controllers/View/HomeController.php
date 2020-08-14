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

    public function about(){
        return view('view.about');
    }
    public function create(){
        return view('view.create');
    }
    public function detail(){
        return view('view.detail');
    }
    public function explore(){
        return view('view.explore');
    }
    public function articles(){
        return view('view.articles');
    }
    public function detailArticles(){
        return view('view.detailArticles');
    }
    public function register(){
        return view('view.register');
    }
    public function login(){
        return view('view.login');
    }

}
