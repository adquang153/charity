<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Handler;
use App\Services\CampaignService;
use App\Services\CategoryService;
use App\Services\UserService;
use App\Http\Requests\CampaignRequest;

class HomeController extends Controller
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
    public function index(){
        return view('view.home');
    }

    public function about(){
        return view('view.about');
    }
    public function create(){
        $listCate = $this->category->getAllCategory();
        return view('view.create', compact('listCate'));
    }

    public function storeCampaign(CampaignRequest $request){
        $result = $this->campaign->createCampaign($request->all());
        if($result)
            return redirect()->route('view.detail', $result->id);
        return redirect()->back();
    }

    public function detail($id){
        $data = $this->campaign->findCampaign($id);
        if(!$data)
            abort(404);
        return view('view.detail', compact('data'));
    }
    public function explore(){
        return view('view.explore');
    }
    public function articles(){
        return view('view.articles');
    }
    public function detailArticles(){
        return view('view.detailArticles');
    }
    public function register(){
        return view('view.register');
    }
    public function login(){
        return view('view.login');
    }
    public function createCampaign(){
        return view('view.createCampaign');
    }
    public function profile($id){
        $user = $this->user->findUser($id, 'profile');
        if(!$user)
            abort(404);
        return view('view.profile', compact('user'));
    }
    public function editProfile(Request $request, $id){

    }
}
