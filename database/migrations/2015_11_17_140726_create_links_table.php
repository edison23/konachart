<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('animu_id')->unsigned();
            $table->integer('site_id')->unsigned();
            $table->string('url');
        });

        Schema::table('links', function (Blueprint $table) {
            $table->foreign('animu_id')
                ->references('id')
                ->on('animus');
        });

        Schema::table('links', function (Blueprint $table) {
            $table->foreign('site_id')
                ->references('id')
                ->on('linkedSites');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('links');
    }
}
