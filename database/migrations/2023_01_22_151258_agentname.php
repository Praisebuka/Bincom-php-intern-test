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
        Schema::create('agentname', function (Blueprint $table) {
            $table->id('name_id')->int(11);
            $table->string('firstname')->varchar(255);
            $table->string('lastname')->varchar(255);
            $table->string('email')->varchar(255);
            $table->int('phone')->char(13);
            $table->int('pollingunit_uniqueid') ->int(11);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agentname');
    }
};
