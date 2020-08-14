<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function donate(){
        return view('admin.pages.donate');
    }

    public function comment(){
        return view('admin.pages.comment');
    }

    public function category(){
        return view('admin.pages.category');
    }
}
