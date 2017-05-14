<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumes', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('gender')->default(1);
            $table->string('birthday');
            $table->string('city');
            $table->string('edulevel');
            $table->string('photo')->nullable();
            $table->string('school');
            $table->string('major');
            $table->string('major_rank');
            $table->string('edu_start');
            $table->string('edu_end');
            $table->string('job_company')->nullable();
            $table->string('job_position')->nullable();
            $table->string('job_start')->nullable();
            $table->string('job_end')->nullable();
            $table->string('job_description')->nullable();
            $table->string('school_name')->nullable();
            $table->string('school_position')->nullable();
            $table->string('school_start')->nullable();
            $table->string('school_end')->nullable();
            $table->string('school_description')->nullable();
            $table->string('project_name')->nullable();
            $table->string('project_position')->nullable();
            $table->string('project_start')->nullable();
            $table->string('project_end')->nullable();
            $table->string('project_description')->nullable();
            $table->string('expected_work_place')->nullable();
            $table->string('expected_work_position')->nullable();
            $table->string('awards')->nullable();
            $table->string('skills')->nullable();
            $table->string('evaluations')->nullable();
            $table->string('papers')->nullable();
            $table->unsignedInteger('user_id');
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
        Schema::dropIfExists('resumes');
    }
}
