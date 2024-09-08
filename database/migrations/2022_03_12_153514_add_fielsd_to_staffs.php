<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFielsdToStaffs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('staff', function (Blueprint $table) {
            //
            $table->string('dob')->nullable();
            $table->string('staff_no')->nullable();
            $table->string('dappt')->nullable();
            $table->string('dprom')->nullable();
            $table->integer('gradelevel')->nullable();
            $table->string('origin')->nullable();
            $table->string('lga')->nullable();
            $table->string('signature')->nullable();
            $table->string('phone')->nullable();
            $table->string('mobile')->nullable();
            $table->string('sex')->nullable();
            $table->string('unit')->nullable();
            $table->string('title')->nullable();
            $table->string('birthday')->nullable();
            $table->string('personal_email')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('staffs', function (Blueprint $table) {
            //
        });
    }
}
