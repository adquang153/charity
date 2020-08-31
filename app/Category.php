<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'category';
    protected $fillable = ['name'];
    
    public function group(){
        return $this->belongsTo('App\Category', 'parent_id');
    }
}
