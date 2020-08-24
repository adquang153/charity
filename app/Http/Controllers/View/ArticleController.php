<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function articles(){
        return view('view.articles.index');
    }
    public function detailArticles(){
        return view('view.articles.detail');
    }

}
