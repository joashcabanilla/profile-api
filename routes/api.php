<?php

use Illuminate\Support\Facades\Route;

//CONTROLLERS
use App\Http\Controllers\MemberController;

/**
 * API ROUTES
 */

//import data route
Route::post("import", [MemberController::class, "import"]);

Route::prefix("member")->group(
    function () {
        //update member info
        Route::post("updateMember",[MemberController::class, "updateMember"]);
        //get member list
        Route::get("getMemberList",[MemberController::class, "getMemberList"]);
    }
);