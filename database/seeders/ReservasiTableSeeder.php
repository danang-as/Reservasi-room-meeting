<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservasiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reservasi')->insert([
            'kode_booking' => 'BOOK123',
            'nama_penanggung_jawab' => 'John Doe',
            'tanggal' => '2022-01-01',
            'waktu_mulai' => '09:00:00',
            'waktu_selesai' => '12:00:00',
            'kegiatan' => 'meeting',
            'jumlah_peserta' => '10',
            'jumlah_panitia' => '2',
            'nama_ruangan' => 'Ruang Meeting 1',
            'direktorat' => 'Direktorat A',
            'divisi' => 'Divisi B',
            'bagian' => 'Bagian C',
            'pendukung' => 'Pendukung D',
            'status' => 'tersedia',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
