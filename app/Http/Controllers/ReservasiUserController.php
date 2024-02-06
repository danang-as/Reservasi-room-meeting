<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use App\Models\Ruangan;
use App\Models\Direktorat;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Validator;

class ReservasiUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_ruangan = Ruangan::all();
        $data_direktorat = Direktorat::all();
        $reservasi = Reservasi::all();
        return view('user.reservasi.reservasi', compact('reservasi', 'data_ruangan', 'data_direktorat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.reservasi.reservasi');
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

        return redirect()->route('user.reservasi.reservasi')->with('success', 'Reservasi berhasil ditambahkan');

        // try {
        //     Log::error("tidak muncul errornya");
        //     Reservasi::create($reservasi);
            
        //     // return redirect()->route('user.reservasi.reservasi')->with('success', 'Reservasi berhasil ditambahkan');
        // } catch (\Exception $e) {
        //     Log::error($e->getMessage()); // Ini akan mencetak pesan exception ke dalam log
        //     // return redirect()->back()->with('error', 'Gagal menambahkan reservasi: ' . $e->getMessage())->withInput();
        // }

    }

    public function getAvailableTime(Request $request)
{
    $tanggal = $request->input('tanggal');
    $waktu_mulai = $request->input('waktu_mulai');
    $waktu_selesai = $request->input('waktu_selesai');

    $reservasi = Reservasi::where('tanggal', $tanggal)->where(function ($query) use ($waktu_mulai, $waktu_selesai) {
        $query->whereBetween('waktu_mulai', [$waktu_mulai, $waktu_selesai])
            ->orWhereBetween('waktu_selesai', [$waktu_mulai, $waktu_selesai]);
    })->get();

    $pendukung = $request->input('pendukung');

    return response()->json([
        'reservasi' => $reservasi,
        'pendukung' => $pendukung,
    ]);
}
}
