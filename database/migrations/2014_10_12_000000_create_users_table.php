<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('avatar');
            $table->string('confirmation_token');
            $table->smallInteger('is_active')->default(0);
            $table->smallInteger('gender')->default(1);
            $table->smallInteger('age')->nullable();
            $table->integer('city_id')->nullable();
            $table->string('city_name')->nullable();
            $table->string('education')->nullable();
            $table->string('phone')->nullable();
            $table->string('shcool_id')->nullable();
            $table->string('shcool_name')->nullable();
            $table->string('major')->nullable();
            $table->string('major_rank')->nullable();
            $table->string('resume_id')->nullable();
            $table->timestamp('graduation_time')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
