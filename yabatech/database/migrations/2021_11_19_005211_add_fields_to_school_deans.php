<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToSchoolDeans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('school_deans', function (Blueprint $table) {
            //
            $table->integer('staff_id')->nullable();
            $table->integer('status')->nullable();
            $table->dateTime('expired_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('school_deans', function (Blueprint $table) {
            //
        });
    }
}
