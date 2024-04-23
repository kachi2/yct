<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewFieldsToNoticeBoards extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('notice_boards', function (Blueprint $table) {
            $table->integer('school_id')->nullable();
            $table->integer('status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('notice_boards', function (Blueprint $table) {
            $table->dropColumn(['school_id']);
            $table->dropColumn(['status']);
            $table->integer('posted_by')->nullable();
        });
    }
}
