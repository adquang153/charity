<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\CampaignService;
use App\Services\CategoryService;
use App\Services\UserService;
use App\Http\Requests\CampaignRequest;
use App\Services\DifficultService;

class CampaignController extends Controller
{
    //
    protected $campaign;
    protected $category;
    protected $user;
    protected $difficult;

    public function __construct(CampaignService $campaign, CategoryService $category,UserService $user, DifficultService $difficult){
        $this->campaign = $campaign;
        $this->category = $category;
        $this->user = $user;
        $this->difficult = $difficult;
    }

    public function createCampaign(){
        $listCate = $this->category->getAllCategory();
        $listDiff = $this->difficult->getAll();
        return view('view.campaign.create', compact('listCate','listDiff'));
    }

    public function storeCampaign(CampaignRequest $request){
        $result = $this->campaign->createCampaign($request->all());
        if($result)
            return redirect()->route('view.explore')->with('success', 'Đã tạo chiến dịch, đang chờ admin phê duyệt!');
        return redirect()->back()->with('error','Cannot Create Campaign!');
    }

    public function detail($id){
        $data = $this->campaign->findCampaign($id);
        
        if(!$data)
            return redirect()->back()->with('error','Chiến dịch không tồn tại hoặc đang chờ admin phê duyệt!');
        return view('view.campaign.detail', compact('data'));
    }
    public function explore(Request $request){
        $params = [
            'where' => [
                            ['status', 1],
                            ['date_end', '>=', Date('Y-m-d')]
                        ],
            'paginate' => 12,
            'search' => $request->search
        ];
        $data = $this->campaign->getAllCampaigns($params);
        return view('view.campaign.index', compact('data'));
    }

    public function edit($id){
        $campaign = $this->campaign->findCampaign($id, "admin");
        $listCate = $this->category->getAllCategory();
        $data = [
            'campaign' => $campaign,
            'listCate' => $listCate
        ];
        return view('view.campaign.edit', $data);
    }

    public function update($id, CampaignRequest $request){
        $result = $this->campaign->updateCampaign($id, $request->all());
        if($result){
            if($result->status === 0)
                return redirect()->route('view.profile-campaign', Auth()->user()->id)->with('success', 'Đã sửa chiến dịch, đang chờ admin phê duyệt!');
            return redirect()->route('view.campaign.detail', $result->id)->with('success', 'Sửa chiến dịch thành công!');
        }
        return redirect()->back()->with('error', 'Sửa chiến dịch không thành công!');
    }

    public function comment(Request $request, $id){
        $result = $this->campaign->addComment($id, $request->comment);
        return redirect()->route('view.campaign.detail', $id);
    }

}
