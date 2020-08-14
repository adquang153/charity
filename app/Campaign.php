<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    //
    protected $table = 'campaign';
    protected $fillable = ['name','status','content','images','date_start','date_end','bank_account','amount','user_id','difficult_situation_id','category_id'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function difficult_situation(){
        return $this->hasOne('App\DifficultSituation');
    }
}
