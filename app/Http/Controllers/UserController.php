<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\User;
use Session;
class UserController extends Controller
{
   
   public function register(Request $request){
        if($request->isMethod('post')){
        	$data=$request->all();
          $user=new User();
          $user->username=$data['username'];
          $user->password=bcrypt($data['password']);
          $user->email=$data['email'];
          $user->mobile=$data['mobile'];
          $user->save();
          return redirect()->back()->with('flash_message_success','Registered successfully ! please login');
        }
   }
public function login(Request $request){
          if($request->isMethod('post')){
	        $data=$request->all();
          $session=array('email'=>$data['email'],'password'=>$data['password'],'admin'=>1,'status'=>1);
	       if(Auth::attempt(['email' =>$data['email'], 'password' => $data['password'],'status'=>1])){ 
          session::put('adminSession',$session);
	        return redirect('/admin/dashboard');
	        }else{
	 	      return redirect('/login')->with('flash_message_error','Username & password is incorrect please try again!');
	         }
           }
           return view('admin.login');
         }
 public function dashboard(){
          if(session::has('adminSession')){
          return view('admin.dashboard');
          }else{
          return redirect('/login')->with('flash_message_error','please login to access');
          }  
          }
public function viewUser(){
    if(session::has('adminSession')){
         $user = User::all()->except(Auth::id());
         return view ('users')->with(compact('user'));
       }else{
        return redirect('/login')->with('flash_message_error','Please login to access');
       }
}

public function userChangeStatus($id){
       $user=User::find($id);
       $user->status=!$user->status;
       if($user->save()){
       return redirect('admin/user');
        }else{
        return redirect('/changestatus');
       }
       }
    public function logout(){
      Session::flush();
      return redirect('/login');
   }

}
