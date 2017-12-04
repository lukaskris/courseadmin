<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('lesson', function(Blueprint $table){
          $table->increments('id');
          $table->integer('category_id')->unsigned();
          $table->string('title');
          $table->text('description');
          $table->text('thumbnail');
          $table->integer('filesize');
          $table->integer('length');
          $table->integer('view');
          $table->integer('total_sublesson');
          $table->foreign('category_id')->references('id')->on('category');
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
        Schema::dropIfExists('lesson');
    }
}
