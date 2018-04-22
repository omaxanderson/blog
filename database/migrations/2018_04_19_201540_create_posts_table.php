<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//      if (!Schema::hasTable('posts')) {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('abstract');
            $table->longtext('content');
            $table->date('created_at');
            $table->date('updated_at')->nullable();
            $table->integer('views');
            $table->integer('read_time')->nullable();

            // Foreign keys
            $table->integer('user_id');
        });
 //     }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
