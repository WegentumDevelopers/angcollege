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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('fname')->nullable();
            $table->string('fimage')->nullable();
            $table->text('fmsg')->nullable();
            $table->string('dname')->nullable();
            $table->string('dimage')->nullable();
            $table->text('dmsg')->nullable();
            $table->string('mdname')->nullable();
            $table->string('mdimage')->nullable();
            $table->text('mdmsg')->nullable();
            $table->string('about_img')->nullable();
            $table->text('about')->nullable();
            $table->string('trust_img')->nullable();
            $table->text('trust')->nullable();
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
        Schema::dropIfExists('abouts');
    }
};
