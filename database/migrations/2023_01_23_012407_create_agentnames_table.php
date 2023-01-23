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
        Schema::create('agentnames', function (Blueprint $table) {
            $table->increments('name_id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->int('phone')->char(13);
            $table->increments('pollingunit_uniqueid') ->int(11);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agentnames');
    }
};
