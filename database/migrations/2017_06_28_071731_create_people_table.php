<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);  //姓名
            $table->string('sex',2);    //性别
            $table->string('position',50)->index();  //应聘职位
            $table->foreign('position')->references('position')->on('jobs')->onDelete('cascade');
            $table->string('telephone',11);  //手机
            $table->string('email',50);      //邮箱
            $table->string('experience',50);  //工作经验
            $table->string('degree',50);     //最高学历
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
        Schema::drop('people');
    }
}
