<?php 

namespace App\Services;

use App\Category;

class CategoryService{

    public function getAllCategory(){
        return Category::where('parent_id', 1)->get();
    }

    public function getCategories(){
        return Category::with('group')->whereNotNull('parent_id')->orderBy('parent_id')->paginate(15);
    }

}

?>