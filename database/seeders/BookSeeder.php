<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++){
            DB::table('books')->insert([
                'title' => $faker->text(50),
                'thumbnail'=>'https://images.app.goo.gl/6XdrtD7TbkodwQBQ9',
                'author' => $faker->text(30),
                'publisher'=>$faker->text(30),
                'publication'=>now(),
                'price'=>rand(1000, 100000),
                'quantity'=>rand(1, 100 ),
                'category_id'=>rand(1, 5), 
            ]);
        }
    }
}
