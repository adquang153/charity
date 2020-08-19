<?php 

namespace App\Services;

use Illuminate\Support\Facades\Password;
use App\User;
use App\Helpers\Handler;

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
        //Tìm user với điều kiện không phải là admin
        $user = $this->findUser($id, 'profile');

        // Nếu không tìm thấy user thì return false
        if(!$user)
            return false;

        if(isset($data['avatar'])){
            // Kiểm tra nếu user đã có avatar thì xóa avt cũ
            if($user->avatar){
                Handler::deleteFile($user->avatar);
            }
            $data['avatar'] = Handler::uploadFile($data['avatar'], 'user');
        }
        return $user->update($data);
    }

    public function deleteUsers($arr){
        return User::whereIn('id', $arr)->delete();
    }

}

?>