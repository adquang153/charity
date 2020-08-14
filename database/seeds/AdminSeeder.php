<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'user_name' => 'admin',
            'email' => 'supper@gmail.com',
            'password' => Hash::make('123123'),
            'is_admin' => 1,
            'social_id' => 0,
            'created_at' => Now(),
            'updated_at' => Now()
        ]);
    }
}
