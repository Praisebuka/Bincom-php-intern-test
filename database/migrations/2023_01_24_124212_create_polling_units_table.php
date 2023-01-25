<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('polling_units', function (Blueprint $table) {
            $table->integer('uniqueid');
            $table->integer('polling_unit_id');
            $table->integer('ward_id'); 
            $table->integer('lga_id'); 
            $table->integer('uniquewardid');  
            $table->string('polling_unit_number'); 
            $table->string('polling_unit_name'); 
            $table->text('polling_unit_description');
            $table->string('lat'); 
            $table->string('long'); 
            $table->string('entered_by_user');
            $table->dateTime('date_entered'); 
            $table->string('user_ip_address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('polling_units');
    }
};
