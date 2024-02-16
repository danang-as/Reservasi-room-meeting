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
        $data_reschedule = Reservasi::orderBy('id', 'desc')->paginate(9);
        return view('admin.reschedule.data_reschedule')->with('data_reschedule', $data_reschedule);
    }

    public function create()
    {
        return view('admin.reschedule.tambah_reschedule');
    }

    public function store(Request $request)
    {
        // $data_reservasi = [
        //     'kode_booking' => $request->kode_booking,
        //     'nama_penanggung_jawab' => $request->nama_penanggung_jawab,
        //     'tanggal' => $request->tanggal,
        //     'waktu_mulai' => $request->waktu_mulai,
        //     'waktu_selesai' => $request->waktu_selesai,
        //     'kegiatan' => $request->kegiatan,
        //     'jumlah_peserta' => $request->jumlah_peserta,
        //     'jumlah_panitia' => $request->jumlah_panitia,
        //     'nama_ruangan' => $request->nama_ruangan,
        //     'direktorat' => $request->direktorat,
        //     'divisi' => $request->divisi,
        //     'bagian' => $request->bagian,
        //     'pendukung' => $request->pendukung,
        // ];

        // Reservasi::create($data_reservasi);

        // return redirect()->route('konfrim_reservasi')->with('success', 'Reservasi berhasil ditambahkan');
    }

    public function show($id)
    {
        
    }

    public function edit(string $id)
    {
        $data_reschedule = Reservasi::where('id', $id)->first();
        return view('admin.reschedule.edit_data_reschedule')->with('data_reschedule', $data_reschedule);
    }

    public function update(Request $request, $id)
    {
        $data_reschedule =[
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
            'status' => $request->status,
        ];
        Reservasi::where('id', $id)->update($data_reschedule);
        return redirect()->to('data_reschedule');
        // $request->validate([
        //     'kode_booking' => 'required',
        //     'nama_penanggung_jawab' => 'required',
        //     'tanggal' => 'required|date',
        //     'waktu_mulai' => 'required',
        //     'waktu_selesai' => 'required',
        //     'kegiatan' => 'required',
        //     'jumlah_peserta' => 'required',
        //     'jumlah_panitia' => 'required',
        //     'nama_ruangan' => 'required',
        //     'direktorat' => 'required',
        //     'divisi' => 'required',
        //     'bagian' => 'required',
        //     'pendukung' => 'required',
        // ]);

        // $reservasi = Reservasi::findOrFail($id);
        // $reservasi->update($request->all());

        // return redirect()->route('reservasis.index')->with('success', 'Reservasi berhasil diperbarui');
    }

    // public function destroy($id)
    // {
    //     $reservasi = Reservasi::findOrFail($id);
    //     $reservasi->delete();

    //     return redirect()->route('reservasis.index')->with('success', 'Reservasi berhasil dihapus');
    // }
    public function destroy(string $id)
    {
        Reservasi::where('id', $id)->delete();
        return redirect()->to('data_reschedule');
    }
}