<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAniumusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animus', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('season_id');
            $table->string('title', 300);
            $table->string('studio', 200);
            $table->text('description');
            $table->timestamp('release_date');
            $table->string('image', 200);
            $table->string('slug', 300)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('animus');
    }
}
