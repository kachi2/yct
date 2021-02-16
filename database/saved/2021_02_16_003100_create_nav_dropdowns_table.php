<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNavDropdownsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nav_dropdowns', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nav_lists_id')->references('id')->on('nav_lists')->onDelete('cascade');
            $table->string('name')->nullable();
            $table->string('links')->nullable();
            $table->integer('status')->nullable();
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
        Schema::dropIfExists('nav_dropdowns');
    }
}
