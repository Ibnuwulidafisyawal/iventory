<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categories')->insert([
            ['name' => 'Elektronik'],
            ['name' => 'Alat Tulis'],
            ['name' => 'Bahan Bangunan'],
        ]);
        
    }
}
