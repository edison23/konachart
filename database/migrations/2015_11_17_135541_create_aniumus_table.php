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
            $table->integer('season_id')->unsigned();
            $table->string('title', 300);
            $table->string('studio', 200);
            $table->text('description');
            $table->timestamp('release_date');
            $table->string('image', 200);
            $table->string('slug', 300);
        });

        Schema::table('animus', function (Blueprint $table) {
            $table->foreign('season_id')
                ->references('id')
                ->on('seasons')
                ->onUpdate('cascade');
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
