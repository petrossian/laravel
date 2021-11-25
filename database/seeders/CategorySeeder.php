<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [];
        for($i=1; $i<=10; $i++){
            $categories[] = [
                'category' => 'category_' . $i,
            ];
        }
        DB::table('categories')->insert($categories);
    }
}
