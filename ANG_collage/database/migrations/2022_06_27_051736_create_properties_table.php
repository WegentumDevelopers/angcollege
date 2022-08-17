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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('location')->nullable();
            $table->string('property_type')->nullable();
            $table->string('images')->nullable();
            $table->string('description')->nullable();
            $table->string('running_p')->nullable();
            $table->string('upcomming_p')->nullable();
            $table->string('special')->nullable();
            $table->tinyInteger('status')->default('1');
            $table->string('t_status')->default('sale');
            // $table->string('B_type')->default('no');
            $table->tinyInteger('delete_status')->default('0');
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
        Schema::dropIfExists('properties');
    }
};
