<?php

namespace App\Http\Controllers;

use App\Models\Member;

class MemberController extends Controller
{
    /**
     * Retrieve all the members with subscription.
     *
     * @return Response
     */
    public function retriveMembers()
    {   
        $members = Member::with('subscription')->get()->toArray();
        return response()->json(['error' => false, 'data' => $members]);
    }
}
