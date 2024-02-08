<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservasi;
use App\Models\Ruangan;
use App\Models\Direktorat;

class RescheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_ruangan = Ruangan::all();
        $data_direktorat = Direktorat::all();
        $reservasi = Reservasi::all();
        return view('user.reschedule.reschedule', compact('reservasi','data_ruangan', 'data_direktorat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.reschedule.reschedule');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kode_booking' => 'required|unique:reservasi',
            'nama_penanggung_jawab' => 'required',
            'tanggal' => 'required|date',
            'waktu_mulai' => 'required|date_format:H:i',
            'waktu_selesai' => 'required|date_format:H:i|after:waktu_mulai',
            'kegiatan' => 'required',
            'jumlah_peserta' => 'required|numeric',
            'jumlah_panitia' => 'required|numeric',
            'nama_ruangan' => 'required',
            'direktorat' => 'required',
            'divisi' => 'required',
            'bagian' => 'required',
            'status' => '',
            'pendukung' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $kode_booking = Str::random(5);
        $reservasi = Reservasi::create([
            'kode_booking' => $request->kode_booking,
            'nama_penanggung_jawab' => $request->nama_penanggung_jawab,
            'tanggal' => $request->tanggal,
            'waktu_mulai' => $request->waktu_mulai,
            'waktu_selesai' => $request->waktu_selesai,
            'kegiatan' => $request->kegiatan,
            'jumlah_peserta' => $request->jumlah_peserta,
            'jumlah_panitia' => $request->jumlah_panitia,
            'nama_ruangan' => $request->nama_ruangan,
            'direktorat' => $request->direktorat,
            'divisi' => $request->divisi,
            'bagian' => $request->bagian,
            'status' => $request->status,
            'pendukung' => implode(', ', $request->pendukung),
        ]);

        return redirect()->route('user.reschedule.reschedule')->with('success', 'reschedule berhasil ditambahkan');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
