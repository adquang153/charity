<?php 

namespace App\Services;

use App\Category;

class CategoryService{

    public function getAllCategory(){
        return Category::where('parent_id', 1)->get();
    }

}

?>