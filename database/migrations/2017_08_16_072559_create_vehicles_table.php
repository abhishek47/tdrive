<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('plate_no');
            $table->integer('vehicle_class');
            $table->integer('fuel_type');
            $table->integer('owner_id');
            $table->integer('company_id');
            $table->integer('branch_id');
            $table->string('chasis_no')->nullable();
            $table->integer('engine_no')->nullable();
            $table->text('date_of_registration')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
