<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperienceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experience',function(Blueprint $table){

            $table->increments('id');
            $table->string('company',60)->comment('公司名');
            $table->timestamp('start_time')->comment('开始时间');
            $table->timestamp('end_time')->comment('结束时间');
            $table->string('job',20)->comment('职位');
            $table->text('job_content')->comment('工作内容');
            $table->integer('resume_id')->comment('关联resume表 ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
