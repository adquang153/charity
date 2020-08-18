<?php 

namespace App\Services;

use App\Campaign;

class CampaignService{

    public function createCampaign($data){
        // active campaign
        $data['status'] = 1; 
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