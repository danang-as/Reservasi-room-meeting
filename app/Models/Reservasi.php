<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;
    protected $table = 'reservasi';
    protected $fillable = [
        'id',
        'kode_booking',
        'nama_penanggung_jawab',
        'tanggal',
        'waktu_mulai',
        'waktu_selesai',
        'kegiatan',
        'jumlah_peserta',
        'jumlah_panitia',
        'nama_ruangan',
        'direktorat',
        'divisi',
        'bagian',
        'pendukung',
        'status'
    ];

    public function rules()
{
    return [
        'kode_booking' => 'required|unique:reservasi',
        'nama_penanggung_jawab' => 'required',
        'tanggal' => 'required|date',
        'waktu_mulai' => 'required|date_format:H:i',
        'waktu_selesai' => 'required|date_format:H:i|after:waktu_mulai',
        'kegiatan' => 'required',
        'jumlah_peserta' => 'required|integer',
        'jumlah_panitia' => 'required|integer',
        'nama_ruangan' => 'required',
        'direktorat' => 'required',
        'divisi' => 'required',
        'bagian' => 'required',
        'pendukung' => 'nullable',
        'status' => 'required|in:tersedia,tidak tersedia',
    ];
}
}
