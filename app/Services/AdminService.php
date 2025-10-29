<?php
namespace App\Services;

//Models
use App\Models\MemberModel as Member;

class AdminService {
    /**
     * Update member information 
     * @param member formdata of member.
     */
    public function updateMember($member){
       $data = [
        "email" => $member->email,
        "cpNumber" => $member->cpNumber,
        "tinNumber" => isset($member->tinNumber) ? $member->tinNumber : null,
       ];

       if(isset($member->birthdate)){
        $data["birthdate"] = date("Y-m-d", strtotime($member->birthdate));
       }

       return Member::find($member->id)->update($data);
    }
}