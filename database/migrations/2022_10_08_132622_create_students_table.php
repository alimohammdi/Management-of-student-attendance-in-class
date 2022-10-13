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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('full_name',200);
            $table->bigInteger('stu_number');
            $table->bigInteger('code_meli');
            $table->unsignedBigInteger('major_id')->nullable();
            $table->foreign('major_id')->on('majors')->references('id')->onUpdate('cascade')->nullOnDelete();
            $table->unsignedBigInteger('college_id')->nullable();
            $table->foreign('college_id')->on('colleges')->references('id')->onUpdate('cascade')->nullOnDelete();
            $table->integer('stu_year');
            $table->integer('age');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->on('users')->references('id')->onDelete('cascade')->onUpdate('cascade');
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
};
