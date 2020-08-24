<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\CampaignService;
use App\Services\CategoryService;
use App\Services\UserService;
use App\Http\Requests\CampaignRequest;

class UserController extends Controller
{
    //
    private $campaign;
    private $category;
    private $user;

    public function __construct(CampaignService $campaign, CategoryService $category,UserService $user){
        $this->campaign = $campaign;
        $this->category = $category;
        $this->user = $user;
    }

    public function profile($id){
        $user = $this->user->findUser($id, 'profile');
        if(!$user)
            abort(404);
        return view('view.profile.index', compact('user'));
    }
    public function editProfile(Request $request, $id){
        $user = $this->user->updateProfileUser($id, $request->all());
        if($user)
            return redirect()->route('view.profile', $id)->with('success', 'Updated Profile Success!');
        return redirect()->back()->with('error', 'Cannot Be Updated!');
    }

}
