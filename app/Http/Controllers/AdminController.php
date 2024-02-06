<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function login(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            if(Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password']])){
                return redirect("dashboard");
            }else {
                return redirect()->back()->with("error_message","invalid Email or Password");
            }
        }
        return view('admin.login');
    }
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('login');
    }
    public function data_reservasi()
    {
        return view('admin.data_reservasi');
    }
    public function data_laporan()
    {
        return view('admin.laporan.data_laporan');
    }
    public function delete($id){
        $user = User::where('id',$id);
        $user->forceDelete();
        if($user){
            Session::flash('status','success');
            Session::flash('message','Ruangan berhasil dihapus');
        }
        return redirect('admin.data_user');
    }
}
