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
            $table->string("uuid", 40);
            $table->string('nid', 20)->unique();
            $table->string('name', 200);
            $table->string('father_name', 200);
            $table->string('mother_name', 200);
            $table->string('hus_wife_name', 200)->nullable();
            $table->text('present_address');
            $table->text('permanent_address');
            $table->string('dob', 20);
            $table->string('education', 200);
            $table->string('nationality', 30);
            $table->string('gender', 10);
            $table->string('profession', 100);
            $table->string('blood_group', 5)->nullable();
            $table->string('mobile_no', 15);
            $table->string('email', 100)->nullable();
            $table->string('member_image', 255);
            $table->string('member_nid', 255);
            $table->integer("status")->default(0);
            $table->unsignedInteger('user_id')->nullable();
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
