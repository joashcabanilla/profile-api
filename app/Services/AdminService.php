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
       return Member::find($member->id)->update([
        "email" => $member->email,
        "cpNumber" => $member->cpNumber,
        "tinNumber" => isset($member->tinNumber) ? $member->tinNumber : null
       ]);
    }
}