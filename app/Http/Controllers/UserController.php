<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Ruangan;

class UserController extends Controller
{
    public function home()
    {
        return view('user.home');
    }

    public function tampilan_utama()
    {
        return view('user.tampilan_utama');
    }

    public function loading()
    {
        return  view('user.loading');
    }

    public function login_user(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            if(Auth::guard('user')->attempt(['email'=>$data['email'],'password'=>$data['password']])){
                return redirect("home");
            }else {
                return redirect()->back()->with("error_message","invalid Email or Password");
            }
        }
        return view('user.login_user');
    }


    public function history()
    {
        return  view('user.history');
    }

    public function logout(){
        Auth::guard('user')->logout();
        return redirect('login_user');
    }
}
