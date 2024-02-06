<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password = Hash::make(123456);
        $userRecords = [
            ['name'=>'M Syatiri','email'=>'msyatiri05@gmail.com'
            ,'password'=>$password,'role'=>'user'],
        ];
        User::insert($userRecords);
    }
}
