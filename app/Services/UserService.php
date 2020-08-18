<?php 

namespace App\Services;

use Illuminate\Support\Facades\Password;
use App\User;

class UserService{

    public function listUser(){
       $list = User::paginate(10);
       return $list;
    }
    public function findUser($id, $type=""){
        if($type == "profile")
            $user = User::where('is_admin', User::USER)->find($id);
        else
            $user = User::find($id);
        return $user;
    }

    public function updateProfileUser($id, $data){

    }

    public function deleteUsers($arr){
        return User::whereIn('id', $arr)->delete();
    }

}

?>