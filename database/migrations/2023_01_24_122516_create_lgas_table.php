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
        Schema::create('lgas', function (Blueprint $table) {
            $table->integer('uniqueid');
            $table->integer('lga_id');
            $table->string('lga_name');
            $table->integer('state_id');
            $table->text('lga_description');
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
        Schema::dropIfExists('lgas');
    }
};
