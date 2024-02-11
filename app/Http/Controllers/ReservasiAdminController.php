<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ruangan;
use App\Models\Reservasi;
use App\Models\Direktorat;

class ReservasiAdminController extends Controller
{
    public function index()
    {
        $reservasi = Reservasi::orderBy('id', 'desc')->paginate(9);
        return view('admin.laporan.data_laporan')->with('reservasi', $reservasi);
    }

    public function create()
    {
        $random_string = $this->generateRandomString(10);
        $data_ruangan = Ruangan::get();
        $data_direktorat = Direktorat::get();
        return view('admin.reservasi.reservasi',compact('data_ruangan','data_direktorat','random_string'));
    }

    public function store(Request $request)
    {
        $data_reservasi = [
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
            'pendukung' => $request->pendukung,
        ];

        Reservasi::create($data_reservasi);

        return redirect()->route('konfrim_reservasi')->with('success', 'Reservasi berhasil ditambahkan');
    }

    public function show($id)
    {
        $reservasi = Reservasi::findOrFail($id);
        return view('reservasis.show', compact('reservasi'));
    }

    public function edit($id)
    {
        $reservasi = Reservasi::findOrFail($id);
        return view('reservasis.edit', compact('reservasi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_booking' => 'required',
            'nama_penanggung_jawab' => 'required',
            'tanggal' => 'required|date',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required',
            'kegiatan' => 'required',
            'jumlah_peserta' => 'required',
            'jumlah_panitia' => 'required',
            'nama_ruangan' => 'required',
            'direktorat' => 'required',
            'divisi' => 'required',
            'bagian' => 'required',
            'pendukung' => 'required',
        ]);

        $reservasi = Reservasi::findOrFail($id);
        $reservasi->update($request->all());

        return redirect()->route('reservasis.index')->with('success', 'Reservasi berhasil diperbarui');
    }

    public function destroy($id)
    {
        $reservasi = Reservasi::findOrFail($id);
        $reservasi->delete();

        return redirect()->route('reservasis.index')->with('success', 'Reservasi berhasil dihapus');
    }

    private function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        return $randomString;
    }
}
