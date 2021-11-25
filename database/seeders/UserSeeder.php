<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $default_user = [
            'name' => "Arshak Petrosyan",
            'email' => "arshak.petrosyan2019@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make(12345678),
            'remember_token' => random_int(1, 10)."remember_token",
        ];
        DB::table('users')->insert($default_user);
    }
}
