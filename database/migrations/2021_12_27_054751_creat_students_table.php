<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
             $table->string('name');
             $table->string('guardian');
             $table->date('date_of_birth');
             $table->string('place_of_birth');
             $table->string('emergency_contact_no');
             $table->string('emergency_contact_relation');
             $table->string('gender');
             $table->string('bloodgroup');
             $table->string('religion');
             $table->string('email');
             $table->string('phone');
             $table->string('address');
             $table->string('country');
             $table->string('state');
             $table->string('class_id');
             $table->string('section_id');
             $table->string('campus_id');
             $table->string('studentGroupID');
             $table->string('optionalSubjectID');
             $table->string('registerNo');
             $table->string('roll');
             $table->string('file_path')->nullable();
            $table->string('extra_curricular_activities');
            $table->string('admission_result');
            $table->string('remarks');
            $table->string('monthly_tuttion_fee');
            $table->string('admission_fee');
            $table->string('registration_fee');
            $table->string('admission_status');
             $table->string('username');
             $table->string('password');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
