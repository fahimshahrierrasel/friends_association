<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nid', 30);
            $table->string('name', 200);
            $table->string('fatherName', 200);
            $table->string('motherName', 200);
            $table->string('husWifeName', 200);
            $table->text('presentAddress');
            $table->text('permanentAddress');
            $table->string('dob', 20);
            $table->string('education', 200);
            $table->string('nationality', 30);
            $table->string('gender', 10);
            $table->string('bloodGroup', 5);
            $table->string('mobileNo', 15);
            $table->string('email', 100);
            $table->string('image', 255);
            $table->boolean("status")->default(0);
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('members');
    }
}
