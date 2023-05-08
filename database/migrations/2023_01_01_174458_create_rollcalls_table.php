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
        Schema::create('rollcalls', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->on('students')->references('id')->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('addunit_id');
            $table->foreign('addunit_id')->on('addunits')->references('id')->onUpdate('cascade')->onDelete('cascade');

            $table->enum('status',['0','1','2'])->default('0'); //odd or even weekday

            $table->enum('rollcall',['0','1'])->default('0'); // حاضر یا غایب بودن

            $table->date('date');

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
        Schema::dropIfExists('rollcalls');
    }
};
