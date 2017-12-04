<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubLessonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('sub_lesson', function(Blueprint $table){
          $table->increments('id');
          $table->integer('lesson_id')->unsigned();
          $table->string('title');
          $table->text('thumbnail');
          $table->text('src');
          $table->integer('filesize');
          $table->integer('length');
          $table->foreign('lesson_id')->references('id')->on('lesson');
          $table->timestamps();
          $table->timestamp('deleted_at')->nullable();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_lesson');
    }
}
