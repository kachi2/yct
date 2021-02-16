<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumniNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumni_news', function (Blueprint $table) {
            $table->id();
            $table->string('topic')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('links')->nullable();
            $table->integer('status')->nullable();
            $table->integer('views')->nullable();
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
        Schema::dropIfExists('alumni_news');
    }
}
