<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResumeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('resume',function(Blueprint $table){

            $table->increments('id');
            $table->string('name',20)->comment('姓名');
            $table->timestamp('birth')->comment('生日');
            $table->string('avatar',100)->comment('头像');
            $table->string('mobile',11)->comment('手机号');
            $table->string('email',50)->comment('邮箱');
            $table->string('education',20)->comment('学历');
            $table->string('specialty',50)->comment('专业');
            $table->string('hobby',255)->comment('爱好');
            $table->text('skill')->comment('技能');
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
        Schema::drop('resume');
    }
}
