<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ruangan;


class RuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_ruangan = Ruangan::orderBy('id', 'desc')->paginate(9);
        return view('admin.ruangan.data_ruangan')->with('data_ruangan', $data_ruangan);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.ruangan.tambah_ruangan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data_ruangan =[
            'nama_ruangan'  => $request->nama_ruangan,
            'kapasitas_ruangan' => $request->kapasitas_ruangan,
        ];
        Ruangan::create($data_ruangan);
        return redirect()->to('data_ruangan');
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
        $data_ruangan = Ruangan::where('id', $id)->first();
        return view('admin.ruangan.edit_data_ruangan')->with('data_ruangan', $data_ruangan);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data_ruangan =[
            'nama_ruangan'  => $request->nama_ruangan,
            'kapasitas_ruangan' => $request->kapasitas_ruangan,
        ];
        Ruangan::where('id', $id)->update($data_ruangan);
        return redirect()->to('data_ruangan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Ruangan::where('id', $id)->delete();
        return redirect()->to('data_ruangan');
    }
}
