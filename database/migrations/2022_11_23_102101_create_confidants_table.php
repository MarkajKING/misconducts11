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
        Schema::create('confidants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('name');
            $table->string('gender');
            $table->integer('age');
            $table->string('speciality');
            $table->string('background');
            $table->string('email');
            $table->string('phone');
            $table->string('photo')->nullable();
            $table->string('language');
            $table->text('excerpt');
            $table->text('about');
            $table->text('experiences');
            $table->text('motto');
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
        Schema::dropIfExists('confidants');
    }
};
