<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $row = [];
        for($j = 1; $j<=10; $j++){
            for($i = 1; $i<=100; $i+=$j){
                $row[] = [
                    'post_id' => $i,
                    'category_id' => $j
                ];
            }
        }

        DB::table('category_post')->insert($row);
    }
}
