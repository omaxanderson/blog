<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('comments')->insert([
          'author'=>'Brandon Sanderson',
          'content'=>'Good work, max.',
          'date'=>'2018-04-02',
          'post_id'=>1
        ],[
          'author'=>'JK Rowling',
          'content'=>'Hello World',
          'date'=>'2018-04-07',
          'post_id'=>1
        ]

      );
    }
}
