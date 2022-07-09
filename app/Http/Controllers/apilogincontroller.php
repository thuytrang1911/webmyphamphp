<?php

namespace App\Http\Controllers;

use Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\users;
use \Datetime;

class apilogincontroller extends Controller
{
    
    public function getsignup(){
        return view('dki');
    }
    public function postsignup(Request $req)
    {
      $this->validate($req,
          [
              'email'=>'required|email|unique:users,email',
              'password'=>'required|min:6|max:20',
              'usersname'=>'required',
              're_password'=>'required|same:password'

          ],
          [    
          'email.required'=>'Vui lòng nhập eamil',
          'email.email'=>'Không đúng định dạng email',
          'email.unique'=>'Email đã có người sử dụng',
          'password.required'=>'Vui lòng nhập mật khẩu',
          're_password.same'=>'Mật khẩu không trùng khớp',
          'password.min'=>'Mật khẩu ít nhất 6 kí tự',
          'password.max'=>'Mật khẩu không quá 20 kí tự'
          ]
        );
        $users =new users();
        $users->usersname=$req->usersname;
        $users->email=$req->email;
        $users->fullname=$req->fullname;
        $users->password=Hash::make($req->password);
        // $users->re_password=$req->re_password;
        // $users->dia_chi=$req->dia_chi;
        $users->save();
        /* $input=$req->all();
        $input['password']=bcrypt($input['password']);
        $users=users::getsignup($input); */
        return redirect()->back()->with('thanhcong','Tạo tài khoản thành công');

        
    }
    public function getlogin(){
        return view('login');
    }
    public function postlogin(Request $req)
    {
      $this->validate($req,
          [
              'email'=>'required|email',
              'password'=>'required|min:6|max:20' 

          ],
          [    
          'email.required'=>'Vui lòng nhập eamil',
          'email.email'=>'Không đúng định dạng email',
          'email.unique'=>'Email đã có người sử dụng',
          'password.required'=>'Vui lòng nhập mật khẩu',
          'password.max'=>'Mật khẩu không quá 20 kí tự',
          'password.min'=>'Mật khẩu ít nhất 6 kí tự'

          ]
        );
       $credentials=array('email'=>$req->email,'password'=>$req->password);
       if(Auth::attempt($credentials)){
           return redirect()->back()->with(['flag'=>'success','message'=>'Đăng nhập thành công']);
       }
       else{
        return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập không thành công']);
       }
       
  
    }
    public function getlogout(){
        Auth::logout();
        return redirect('/Homepage');
    }
}
