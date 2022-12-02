<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor', function (Blueprint $table) {
            $table->id();
            $table->biginteger('doc_id');
            $table->string('name');
            $table->mediumText('speciality');
            $table->mediuminteger('phone');
            $table->time('schedule');
            $table->tinyInteger('hour');
            $table->mediuminteger('Room');
            $table->mediumText('degree');
            $table->mediumText('institution');
            $table->tinyInteger('status');
            $table->tinyInteger('trending');
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
        Schema::dropIfExists('doctor');
    }
};
