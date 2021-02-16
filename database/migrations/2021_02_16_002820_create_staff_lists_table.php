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
            $table->string('name')->nullable();
            $table->integer('department_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->string('designation')->nullable();
            $table->foreignId('staff_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
            $table->softDeletes('deleted_at');
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
