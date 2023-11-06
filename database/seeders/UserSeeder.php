<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Jumantara',
            'email' => 'jumantara@gmail.com',
            'password' => Hash::make('jumantara1452_'),
        ]);
    }
}