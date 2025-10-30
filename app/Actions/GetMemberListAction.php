<?php

namespace App\Actions;

class GetMemberListAction extends BaseAction
{
    /**
     * @return object
     */
    public function handle() : object
    {
        $result["success"] = false;
        $result["message"] = "Error: Oops! Something went wrong.";
        $data = $this->adminService->getMemberList();
        if($data){
            $result["success"] = true;
            $result["message"] = "Successfully fetched the member list.";
            $result["data"] = $data;
        }
        return (object) $result;
    }
}