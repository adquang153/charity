<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Services\PostService;

class ArticleController extends Controller
{
    //
    protected $post;
    public function __construct(PostService $post){
        $this->post = $post;
    }
    public function articles(){
        return view('view.articles.index');
    }
    public function detailArticles($id){
        $post = $this->post->findPost($id);
        if($post)
            return view('view.articles.detail',compact('post'));
        abort(404);
    }
    
    public function create(){
        return view('view.articles.create');
    }

    public function store(PostRequest $request){
        $result = $this->post->create($request->all());
        if($result)
            return redirect()->route('view.articles.detail', $result->id)->with('success',"Post Created!");
        return redirect()->back()->with('error','Failed To Create Post. Try To Again!');
    }

}
