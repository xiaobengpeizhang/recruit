<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interviews', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('when');  //面试时间
            $table->string('where');   //面试地址
            $table->integer('job_id')->unsigned();  //面试职位
            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');
            $table->integer('interviewee')->unsigned();  //面试者id
            $table->foreign('interviewee')->references('id')->on('people')->onDelete('cascade');
            $table->string('type',50);  //面试类型：初试or复试or终面
            $table->string('interviewer');  //面试官
            $table->string('result',20)->nullable();  //面试结果：合适or不合适
            $table->text('reason')->nullable();       //原因，评价
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
        Schema::drop('interviews');
    }
}
