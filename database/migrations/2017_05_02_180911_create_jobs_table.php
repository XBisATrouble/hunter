<?php

use Illuminate\Support\Facades\Schema;
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
            $table->string('name');
            $table->string('salary');
            $table->string('province');
            $table->string('city');
            $table->string('class_id');
            $table->string('experience');
            $table->string('education');
            $table->string('advantage');
            $table->text('description');
            $table->string('address');
            $table->string('publisher_id');
            $table->integer('is_online')->default(1);
            $table->integer('resumes_count')->default(0);
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
        Schema::dropIfExists('jobs');
    }
}
