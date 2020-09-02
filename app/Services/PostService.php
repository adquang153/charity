<?php

namespace App\Services;
use App\Post;
use App\Helpers\Handler;

class PostService{

    public function create($data){
        if(isset($data['image'])){
            $path = Handler::uploadFile($data['image'], 'post');
            $data['image'] = $path;
        }
        return Post::create($data);
    }
    public function findPost($id){
        return Post::find($id);
    }
    public function getListByUser($id){
        return Post::where('user_id', $id)->orderBy('created_at','asc')->paginate(15);
    }

    public function deletes($ids){
        if(gettype($ids) === 'array'){
            return Post::select('id')->whereIn('id', $ids)->delete();
        }
        return Post::select('id')->find($ids)->delete();
    }
}

?>