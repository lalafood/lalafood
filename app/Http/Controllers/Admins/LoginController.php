<?php namespace App\Http\Controllers\Admins;
     use Auth;
     use Illuminate\Routing\Controller;
     use App\Http\Requests\Admins\LoginRequest;

class LoginController extends Controller {

   public function getIndex(){
      if(Auth::check()){
        return redirect('/admin/index');
      }else{
        return view('admin.login');
      }
   }
 //check username and password
 public function postProcess(LoginRequest $request){
      $username = $request->input('username');
      $password = $request->input('password');
      if(Auth::attempt(['username' => $username,'password'=>$password,'type'=>'admin'],$request->has('remember'))){
           return redirect()->intended('/admin/index');
      }
      elseif(Auth::attempt(['username' => $username,'password'=>$password,'type'=>'member'],$request->has('remember'))){
          return redirect()->intended('/member/index');
      }
      else{
           return redirect()->back()->with('message',"Error!! Username or Password Incorrect. \nPlease try again.");;
      }
 }
//logout
 public function getLogout(){
      Auth::logout();
      return redirect('/admin/login');
 }
}
