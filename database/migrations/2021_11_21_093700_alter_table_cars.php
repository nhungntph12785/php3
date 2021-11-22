<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableCars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cars', function (Blueprint $table) {
            // $table->string('plate_number',255)->unique();
            // $table->string('owner',255);
            // $table->integer('travel_fee');
            // $table->string('plate_image',255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cars', function (Blueprint $table) {
            // $table->string('plate_number',255)->unique();
            // $table->string('owner',255);
            // $table->integer('travel_fee');
            // $table->string('plate_image',255);
        });
    }
}
