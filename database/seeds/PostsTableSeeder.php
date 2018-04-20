<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('posts')->insert([
          'id'=>1,
          'title'=>'My First Post',
          'abstract'=>'Here\'s an abstract.',
          'content'=>'Here\'s all kinds of content, here we go nice look at all these words quite a post',
          'created_at'=>'2018-04-01',
          'user_id'=>1
        ]);
    }
}
