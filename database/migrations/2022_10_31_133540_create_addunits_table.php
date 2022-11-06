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
        Schema::create('addunits', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('college_id');
            $table->foreign('college_id')->on('colleges')->references('id')->onUpdate('cascade');

            $table->unsignedBigInteger('major_id');
            $table->foreign('major_id')->on('majors')->references('id')->onUpdate('cascade');


            $table->unsignedBigInteger('teacher_id');
            $table->foreign('teacher_id')->on('teachers')->references('id')->onUpdate('cascade');

            $table->unsignedBigInteger('course_id');
            $table->foreign('course_id')->on('courses')->references('id')->onUpdate('cascade');

            $table->unsignedBigInteger('time1_id');
            $table->foreign('time1_id')->on('times')->references('id')->onUpdate('cascade');

            $table->unsignedBigInteger('time2_id')->nullable();
            $table->foreign('time2_id')->on('times')->references('id')->onUpdate('cascade');

            $table->enum('status',['odd','even'])->nullable();

            $table->integer('count_stu')->default(0);
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
        Schema::dropIfExists('addunits');
    }
};
