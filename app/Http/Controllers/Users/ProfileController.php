<?php namespace App\Http\Controllers\Users;
use App\Http\Controllers\AdminsController;
use App\Models\Users;
use Illuminate\Http\Request;
use App\Http\Requests\Admins\userRequest;
use Auth;
use Illuminate\Database\Eloquent\Builder;
class  ProfileController extends AdminsController {


    public function getChangepassworde(){
        $id = Auth::user()->id;
		$user = Users::where('id',$id)->first();
		if(!$user) return redirect('member/index',['user'=>$user]);
		//$data = array('id' => $id,'user' => $user);
		return view('member/changepassworde',['user'=>$user]);
	}


    //change password
    public function postAction(Request $request){
        $id=Auth::user()->id;
        $user=Users::where('id',$id)->first();
        $email=$user->email;
        if(($request->get('email')) == $email){

            if(($request->get('newpassword'))== ($request->get('password_confirmation'))){

                Users::where('id',$id) ->update(['password' => bcrypt($request->get('newpassword'))]);

                return redirect('member/index')->with('success', 'Changepassworde success');

            }
            else{


                 return redirect()->back()->with('error', 'Password not math');



            }
        }
        else{



             return redirect()->back()->with('error', 'E-Mail not valide');

        }



	}



}
?>
