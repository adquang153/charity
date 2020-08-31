<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\CategoryService;

class PageController extends Controller
{
    //
    protected $category;
    public function __construct(CategoryService $category){
        $this->category = $category;
    }

    public function donate(){
        return view('admin.pages.donate');
    }

    public function comment(){
        return view('admin.pages.comment');
    }

    public function category(){
        $categories = $this->category->getCategories();
        return view('admin.pages.category', compact('categories'));
    }
}
