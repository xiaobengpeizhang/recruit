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
            $table->timestamp('when');  //面试时间
            $table->string('where');   //面试地址
            $table->integer('interviewee')->unsigned();  //面试者id
            $table->foreign('interviewee')->references('id')->on('people')->onDelete('cascade');
            $table->string('type',50);  //面试类型：初试or复试or终面
            $table->integer('interviewer')->unsigned();  //面试官
            $table->foreign('interviewer')->references('id')->on('users')->onDelete('cascade');
            $table->string('result',20);  //面试结果：合适or不合适
            $table->text('reason');       //原因，评价
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
