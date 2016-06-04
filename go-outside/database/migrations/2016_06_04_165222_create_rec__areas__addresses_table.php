<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecAreasAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rec__areas__addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('country_code', 5)->nullable();
            $table->string('state_code', 2)->nullable();
            $table->string('city')->nullable();
            $table->date('last_updated')->nullable();
            $table->string('postal_code')->nullable();
            $table->integer('rec_area_address_id')->nullable();
            $table->string('rec_area_address_type')->nullable();
            $table->integer('rec_area_id')->nullable();
            $table->string('street_address_1')->nullable();
            $table->string('street_address_2')->nullable();
            $table->string('street_address_3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('rec__areas__addresses');
    }
}
