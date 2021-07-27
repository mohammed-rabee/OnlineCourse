<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();

            $table->integer('yearId')->references('id')->on('years')->onDelete('cascade');
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();

            $table->string('username');
            $table->string('email');
            $table->string('password');

            $table->integer('age');
            $table->string('mobile');
            
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
        Schema::dropIfExists('students');
    }
}
