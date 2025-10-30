<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Form Request for validation
use App\Http\Requests\UpdateMemberRequest;

//Actions
use App\Actions\UpdateMemberAction;
use App\Actions\GetMemberListAction;

class MemberController extends Controller
{
    public function updateMember(UpdateMemberRequest $request, UpdateMemberAction $updateMemberAction){
        $data = $request->validated();
        $response = $updateMemberAction->handle((object) $data);
        return response()->json([
            "success" => $response->success,
            "message" => $response->message,
        ]);
    }

    public function getMemberList(GetMemberListAction $getMemberListAction){
        $response = $getMemberListAction->handle();
        return response()->json([
            "success" => $response->success,
            "message" => $response->message,
            "data" => $response->data
        ]);
    }
}
