<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_lists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('staff_id')->references('id')->on('staff')->onDelete('cascade');
            $table->string('name')->nullable();
            $table->integer('department_id')->nullable();
            $table->integer('categories_id')->nullable();
            $table->string('designation')->nullable();
            $table->timestamps();
            $table->softDeletes('deleted_at', 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff_lists');
    }
}
