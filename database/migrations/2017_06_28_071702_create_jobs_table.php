<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('position',50);   //职位
            $table->integer('number')->unsigned();  //人数
            $table->string('department',50);   //所属部门
            $table->string('experience',50);  //工作经验
            $table->string('degree',50);     //要求学历
            $table->text('description');     //工作描述
            $table->integer('user_id')->index();   //需求提出者，关联用户id
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');  //定义外键
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
        Schema::drop('jobs');
    }
}
