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
        Schema::create('contactsales', function (Blueprint $table) {
            $table->id();
            $table->string('Name')->nullable();
            $table->string('email')->nullable();
            $table->string('contact')->nullable();
            $table->string('images')->nullable();
            $table->string('address')->nullable();
            $table->string('area')->nullable();
            $table->string('price')->nullable();
            $table->string('beds')->nullable();
            $table->string('bathroom')->nullable();
            $table->string('message')->nullable();
            $table->tinyInteger('status')->default('1');
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
        Schema::dropIfExists('contactsales');
    }
};
