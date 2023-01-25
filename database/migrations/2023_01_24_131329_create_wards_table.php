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
        Schema::create('wards', function (Blueprint $table) {
            $table->integerIncrements('uniqueid');
            $table->integer('ward_id');
            $table->string('ward_name');
            $table->integer('lga_id');
            $table->text('ward_description');
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
        Schema::dropIfExists('wards');
    }
};
