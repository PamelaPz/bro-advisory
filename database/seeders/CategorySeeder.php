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
        DB::table('categories')->insert([
            'category' => '1',
        ]);
        DB::table('categories')->insert([
            'category' => '2',
        ]);
        DB::table('categories')->insert([
            'category' => '3',
        ]);
        DB::table('categories')->insert([
            'category' => '4',
        ]);
    }
}
