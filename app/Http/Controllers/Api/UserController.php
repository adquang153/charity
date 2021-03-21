<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    
    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $user = User::where('email', $request->email)->first();
        if(!$user){
            return response()->json(['message'=>'Email incorrect'], 422);
        }
        $check = \Hash::check($request->password, $user->password);
        if(!$check){
            return response()->json(['message'=>'Password incorrect'], 422);
        }
        return response()->json(['token'=>$user->createToken('')->plainTextToken], 200);
    }

}
