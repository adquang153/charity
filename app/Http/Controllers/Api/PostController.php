<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests\TestRequest;

class PostController extends Controller
{
    
    public function index(){
        return response()->json(['data'=>Post::all()]);
    }

    public function create(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'content' => 'required|string',
        ]);
        $user = $request->user();
        $data = [
            'name' =>  $request->name,
            'content' => $request->content,
            'user_id' => $user->id  
        ];
        $result = Post::create($data);
        return response()->json(['data'=>$result]);
    }

    public function update($id, TestRequest $request){
        
        $post = Post::find($id);
        if(!$post) abort(404, "Post not empty");
        $user = $request->user();
        if($post->user_id != $user->id){
            return response()->json(['message' => 'You cannot update this post'], 422);
        }
        $post->update($request->validated());
        return response()->json(['data'=>$post]);
    }
    public function delete($id, Request $request){
        $post = Post::find($id);
        if(!$post) abort(404, "Post not empty");
        $user = $request->user();
        if($post->user_id != $user->id){
            return response()->json(['message' => 'You cannot update this post'], 422);
        }
        $result = $post->delete();
        if($result) return response()->json(['message'=>'Delete success'], 200);
        return response()->json(['message'=>'Delete failed'], 403);
    }
}
