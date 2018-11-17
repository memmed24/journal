<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Memmed',
            'surname' => 'Memmedli',
            'password' => bcrypt("123456"),
            'email' => 'memmed_memmedli@hotmail.com',
            'username' => 'memo',
            'role' => 1
        ]);
    }
}
