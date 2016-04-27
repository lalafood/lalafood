<?php
namespace App\Http\Controllers\Users;
use App\Http\Controllers\AdminsController;
use Auth;
use Illuminate\Routing\Controller;
use App\Http\Requests\Admins\LoginRequest;
use App\Models\Users;

class GeneralController extends AdminsController {
	public function getIndex(){
		$id = Auth::user()->id;
		$user = Users::where('id',$id)->first();
		if(!$user) return redirect('member/index',['user'=>$user]);
		//$data = array('id' => $id,'user' => $user);
		return view('member.index',['user'=>$user]);
	}

	public function getLogout(){
		 Auth::logout();
		 return redirect('/');
	}
}
