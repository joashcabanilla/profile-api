<?php

namespace App\Actions;

class UpdateMemberAction extends BaseAction
{
    /**
     * @return object
     */
    public function handle($member) : object
    {
        $result["success"] = false;
        $result["message"] = "Error: Failed to update member information.";
        $data = $this->adminService->updateMember($member);
        if($data){
            $result["success"] = true;
            $result["message"] = "Member information has been successfully updated.";
        }
        return (object) $result;
    }
}