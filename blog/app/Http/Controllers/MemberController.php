<?php

namespace App\Http\Controllers;
use App\Member;

class MemberController extends Controller
{
    public function info($id)
    {
    	return Member::getMember($id);

    	//return 'member-info-id-'.$id;
    	//return route('memberInfo');
    	//return view('member-info');
    	// return view('member/info',[
    	// 	'name' => 'jacobhsu'
    	// ]);
    }
}