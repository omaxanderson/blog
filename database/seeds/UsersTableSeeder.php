<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          'username'=>'omaxalpha',
          'name'=>'O Max Anderson',
          'email'=>'anderso2@miamioh.edu',
          'password'=>'password'
        ],
        [
          'username'=>'admin',
          'name'=>'admin',
          'email'=>'admin@admin.edu',
          'password'=>'password'
        ]);
    }
}
