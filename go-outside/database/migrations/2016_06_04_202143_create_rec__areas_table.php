<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rec__areas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('keywords')->nullable();
            $table->date('last_updated_at')->nullable();
            $table->integer('org_rec_area_id')->nullable();
            $table->string('description')->nullable();
            $table->string('directions')->nullable();
            $table->string('email')->nullable();
            $table->string('area_fee_description')->nullable();
            $table->float('latitude')->nullable();
            $table->float('longitude')->nullable();
            $table->string('map_url')->nullable();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('reservation_url')->nullable();
            $table->string('stay_limit')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('rec__areas');
    }
}
