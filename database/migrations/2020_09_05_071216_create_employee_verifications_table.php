<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeVerificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //'member_id_is_verified','first_name_is_verified','last_name_is_verified','relative_name_is_verified'
        //'dob_is_verified','id_type_is_verified','id_number_is_verified','id_image_link_is_verified','member_photo_link_is_verified'
        Schema::create('employee_verifications', function (Blueprint $table) {
            $table->id();
            $table->boolean('member_id_is_verified')->default(0);
            $table->boolean('first_name_is_verified')->default(0);
            $table->boolean('last_name_is_verified')->default(0);
            $table->boolean('relative_name_is_verified')->default(0);
            $table->boolean('dob_is_verified')->default(0);
            $table->boolean('id_type_is_verified')->default(0);
            $table->boolean('id_number_is_verified')->default(0);
            $table->boolean('id_image_link_is_verified')->default(0);
            $table->boolean('member_photo_link_is_verified')->default(0);
             
          
            $table->bigInteger('employee_record_id')->unsigned()->index();
            $table->foreign('employee_record_id')->references('id')->on('employee')->onDelete('cascade');

            $table->bigInteger('verified_by_user_id')->unsigned()->index();
            $table->foreign('verified_by_user_id')->references('id')->on('users')->onDelete('cascade');
 
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('employee_verifications');
        Schema::enableForeignKeyConstraints();
        
    }
}
