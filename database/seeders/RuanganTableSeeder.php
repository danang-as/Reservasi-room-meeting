<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RuanganTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ruangan')->insert([
            [
                'nama_ruangan' => 'Ruang Harmoni',
                'kapasitas_ruangan' => '50',
            ],
            [
                'nama_ruangan' => 'Ruang Lestari',
                'kapasitas_ruangan' => '30',
            ],
            [
                'nama_ruangan' => 'Ruang Amanah',
                'kapasitas_ruangan' => '75',
            ],
            [
                'nama_ruangan' => 'Ruang Fatonah',
                'kapasitas_ruangan' => '50',
            ],
            [
                'nama_ruangan' => 'Ruang Tabligh',
                'kapasitas_ruangan' => '23',
            ],
        ]);
    }
}
