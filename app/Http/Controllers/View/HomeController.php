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
        return view('view.pages.about');
    }

}
