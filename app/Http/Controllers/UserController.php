<?php

namespace App\Http\Controllers;
use App\Models\Reservasi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Ruangan;
use App\Models\Direktorat;

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
        $reservasi = Reservasi::orderBy('id', 'desc')->paginate(9);
        return view('user.history', compact('reservasi'));
    }


public function logout_user()
{
    Auth::guard('user')->logout(); // Melakukan proses logout untuk guard 'user'

    return redirect()->to('login_user'); // Mengarahkan kembali ke halaman login_user
}
}
