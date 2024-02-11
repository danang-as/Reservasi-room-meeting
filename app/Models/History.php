<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
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
        'kode_booking' => 'required',
        'nama_penanggung_jawab' => 'required',
        'tanggal' => 'required|date',
        'waktu_mulai' => 'required',
        'waktu_selesai' => 'required',
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
