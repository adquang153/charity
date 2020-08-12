<?php

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
        DB::table('category')->insert([
            ['name' => 'Từ thiện', 'created_at' => Now(), 'updated_at' => Now()],
            ['name' => 'Trẻ em', 'created_at' => Now(), 'updated_at' => Now()],
            ['name' => 'Khó khăn', 'created_at' => Now(), 'updated_at' => Now()],
            ['name' => 'Khuyết tật', 'created_at' => Now(), 'updated_at' => Now()],
            ['name' => 'Giáo dục', 'created_at' => Now(), 'updated_at' => Now()],
            ['name' => 'Khác', 'created_at' => Now(), 'updated_at' => Now()],
        ]);
    }
}
