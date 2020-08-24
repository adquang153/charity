<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\CampaignService;
use App\Services\CategoryService;
use App\Services\UserService;
use App\Http\Requests\CampaignRequest;

class CampaignController extends Controller
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

    public function createCampaign(){
        $listCate = $this->category->getAllCategory();
        return view('view.campaign.create', compact('listCate'));
    }

    public function storeCampaign(CampaignRequest $request){
        $result = $this->campaign->createCampaign($request->all());
        if($result)
            return redirect()->route('view.campaign.detail', $result->id)->with('success', 'Created Campaign!');
        return redirect()->back()->with('error','Cannot Create Campaign!');
    }

    public function detail($id){
        $data = $this->campaign->findCampaign($id);
        if(!$data)
            abort(404);
        return view('view.campaign.detail', compact('data'));
    }
    public function explore(){
        return view('view.campaign.index');
    }

}
