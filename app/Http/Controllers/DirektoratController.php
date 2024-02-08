<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Direktorat;

class DirektoratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_direktorat = Direktorat::orderBy('id', 'desc')->paginate(9);
        return view('admin.direktorat.data_direktorat')->with('data_direktorat', $data_direktorat);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.direktorat.tambah_data_direktorat');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data_direktorat =[
            'nama_direktorat'  => $request->nama_direktorat,
        ];
        Direktorat::create($data_direktorat);
        return redirect()->to('data_direktorat');
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
        $data_direktorat = Direktorat::where('id', $id)->first();
        return view('admin.direktorat.edit_data_direktorat')->with('data_direktorat', $data_direktorat);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data_direktorat =[
            'nama_direktorat'  => $request->nama_direktorat,
        ];
        Direktorat::where('id', $id)->update($data_direktorat);
        return redirect()->to('data_direktorat');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Direktorat::where('id', $id)->delete();
        return redirect()->to('data_direktorat');
    }
}
