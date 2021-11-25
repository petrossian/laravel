<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = [];
        for($i=1; $i<=11; $i++){
            $images[] = [
                'user_id' => $i,
                'file' => $i.".jpg",
            ];
        }
        DB::table('profile_images')->insert($images);
    }
}
