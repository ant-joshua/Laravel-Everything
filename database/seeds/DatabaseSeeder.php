<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'sid',
            'email' => 'imsidzluv@gmail.com',
            'verified' => '1',
            'admin' => '1',
            'password' => bcrypt('gebdandi'),
        ]);
    }
}
