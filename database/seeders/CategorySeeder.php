<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Vở ghi'],
            ['name' => 'Vở bài tập'],
            ['name' => 'Nhạc lý'],
            ['name' => 'Vở vẽ'],
        ]);
    }
}
