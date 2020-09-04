<?php 

namespace App\Services;

use App\Campaign;
use App\Helpers\Handler;
use Storage;

class CampaignService{

    public function createCampaign($data){
        // active campaign
        if(isset($data['images'])){
            $data['images'] = Handler::uploadFile($data['images'], 'campaign');
        }
        //create campaign
        $result = Campaign::create($data);
        return $result ?? false;
    }

    public function findCampaign($id, $type=""){
        if($type=="admin"){
            return Campaign::with(['user', 'difficult_situation', 'category'])->find($id);
        }
        // find campaign with status = 1
            $data = Campaign::with('user')->where('status', Campaign::ACTIVE)->find($id);
        return $data;
    }

    public function getAllCampaigns(){
        $data = Campaign::paginate(15);
        return $data;
    }

    public function deletes($ids){
        if(gettype($ids) === 'array'){
            return Campaign::select('id')->whereIn('id', $ids)->delete();
        }
        return Campaign::select('id')->find($ids)->delete();
    }

    public function changeStatus($id){
        $data = Campaign::find($id);
        if($data){
            $data->status = !$data->status;
            $data->save();
            return $data;
        }
        return false;
    }
    
    public function getListByUser($id){
        $list = Campaign::where('user_id', $id)->orderBy('created_at','asc')->paginate(15);
        return $list;
    }

    public function updateCampaign($id, $data){
        $campaign = Campaign::find($id);
        if(isset($data['images'])){
            Handler::deleteFile($campaign->images);
            $data['images'] = Handler::uploadFile($data['images'], 'campaign');
        }
        $campaign->name = $data['name'];
        $campaign->content = $data['content'];
        $campaign->description = $data['description'];
        $campaign->images = $data['images'];
        $campaign->date_end = $data['date_end'];
        $campaign->amount = $data['amount']??$campaign->amount;
        $campaign->category_id = $data['category_id'];
        $campaign->video = $data['video'];
        $campaign->save();
        return $campaign;
    }

}

?>