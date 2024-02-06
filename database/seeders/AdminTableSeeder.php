<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password = Hash::make(123456);
        $adminRecords = [
            ['name'=>'Danang Ari','email'=>'danangari10@gmail.com'
            ,'password'=>$password,'role'=>'admin'],
        ];
        Admin::insert($adminRecords);
    }
}
