<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $phones = [];
        for($i=1; $i<=10; $i++){
            $phones[] = [
                'user_id' => $i,
                'phone' => '098' . random_int(100000, 999999),
            ];
        }
        DB::table('phones')->insert($phones);
    }
}
