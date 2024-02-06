<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DatauserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_user = User::orderBy('id', 'desc')->paginate(9);
        return view('admin.user.data_user')->with('data_user', $data_user);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.tambah_data_user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data_user =[
            'name'  => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role,
        ];
        User::create($data_user);
        return redirect()->to('data_user');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data_user = User::where('id', $id)->first();
        return view('admin.user.edit_data_user')->with('data_user', $data_user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data_user =[
            'name'  => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role,
        ];
        User::where('id', $id)->update($data_user);
        return redirect()->to('data_user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::where('id', $id)->delete();
        return redirect()->to('data_user');
    }
}
