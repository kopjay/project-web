<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            'name' => 'kursi',
            'price' => 1000000,
            'type' => 'Window',
            'color' => 'black',
            'image' => 'Kursi45.jpg',

        ]);
    }
}
