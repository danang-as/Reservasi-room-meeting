<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservasi;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservasi = Reservasi::orderBy('id', 'desc')->paginate(9);
        return view('admin.laporan.data_laporan')->with('reservasi', $reservasi);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function exportCSV()
    {
        $reservasi = Reservasi::all();
        $csvExporter = new \Laracsv\Export();
        $csvExporter->build($reservasi, ['kode_booking', 'nama_penanggung_jawab', 'tanggal', 'waktu_mulai', 'waktu_selesai', 'kegiatan', 'jumlah_peserta', 'jumlah_panitia', 'nama_ruangan', 'direktorat', 'divisi', 'bagian', 'pendukung', 'status']);
        $csvExporter->download('laporan_reservasi.csv');
    }

    public function exportPDF()
    {
        $reservasi = Reservasi::all();
        $pdf = PDF::loadView('admin.laporan.laporan_pdf', compact('reservasi'));
        return $pdf->download('laporan_reservasi.pdf');
    }
}
