<?php 

namespace App\Services;

use App\Campaign;
use App\Helpers\Handler;

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

    public function findCampaign($id){
        // find campaign with status = 1
        $data = Campaign::with('user')->where('status', Campaign::ACTIVE)->find($id);
        return $data;
    }

}

?>