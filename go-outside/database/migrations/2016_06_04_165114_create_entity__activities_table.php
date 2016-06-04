<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntityActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entity__activities', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('description')->nullable();
            $table->string('fee')->nullable();
            $table->integer('activity_id')->nullable();
            $table->integer('entity_id')->nullable();
            $table->string('entity_type')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('entity__activities');
    }
}
