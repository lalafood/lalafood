<?php namespace App\Http\Controllers\Admins;
use App\Http\Controllers\AdminsController;
use Auth;
use Illuminate\Routing\Controller;
use App\Http\Requests\Admins\LoginRequest;
use App\Models\Users;

class BlankController extends AdminsController {
	public function getIndex(){
		$id = Auth::user()->id;
		$user = Users::where('id',$id)->first();
		if(!$user) return redirect('admin/blank',['user'=>$user]);
		//$data = array('id' => $id,'user' => $user);
		return view('admin.blank',['user'=>$user]);
	}

	public function getLogout(){
		 Auth::logout();
		 return redirect('/');
	}
}
