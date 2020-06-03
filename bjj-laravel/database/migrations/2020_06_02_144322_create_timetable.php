<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimetable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timetable', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("day_of_the_week");
            $table->string("start_hours");
            $table->string("start_mintes");
            $table->string("end_hours");
            $table->string("end_minutes");
            $table->string("class_name");
            $table->string("text_color");
            $table->string("background_color");
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
        Schema::dropIfExists('timetable');
    }
}
