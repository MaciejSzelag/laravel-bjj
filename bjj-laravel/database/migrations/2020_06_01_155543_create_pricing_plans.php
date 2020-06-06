<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePricingPlans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pricing_plans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("type_id");
            $table->string("plan_name");
            $table->string("description");
            $table->string("price");
            $table->string("frenquency");
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
        Schema::dropIfExists('pricing_plans');
    }
}
