<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->date('dob');
            $table->string('sex');
            $table->string('religion');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->date('jod');
            $table->string('photo')->nullable();
            $table->string('username');
            $table->string('password');
            $table->string('usertypeID');
            $table->datetime('create_date');
            $table->datetime('modify_date');
            $table->string('create_userID');
            $table->string('create_username');
            $table->string('create_usertype');
            $table->string('active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
