<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DirektoratTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('direktorat')->insert([
            [
                'nama_direktorat' => 'Dir. Bis. Jasa Keuangan',
            ],
            [
                'nama_direktorat' => 'Dir. Bis. Jasa Kurir & Logistik',
            ],
            [
                'nama_direktorat' => 'Dir. Operasi & Digital Service',
            ],
            [
                'nama_direktorat' => 'Dir. Bis Development & Porfolio Management',
            ],
            [
                'nama_direktorat' => 'Dir. Keuangan & Manajemen Risiko',
            ],
            [
                'nama_direktorat' => 'Dir. Human Capital Management',
            ],
            [
                'nama_direktorat' => 'Anak Perusahaan dan Afiliasi',
            ],
            [
                'nama_direktorat' => 'Non Direktorat',
            ],
            [
                'nama_direktorat' => 'Regional 1',
            ],
            [
                'nama_direktorat' => 'Regional 2',
            ],
            [
                'nama_direktorat' => 'Regional 3',
            ],
            [
                'nama_direktorat' => 'Regional 4',
            ],
            [
                'nama_direktorat' => 'Regional 5',
            ],
            [
                'nama_direktorat' => 'Regional 6',
            ],
            [
                'nama_direktorat' => 'SPP',
            ],
        ]);
    }
}
