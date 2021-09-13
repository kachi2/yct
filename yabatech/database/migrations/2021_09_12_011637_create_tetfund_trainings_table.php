<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTetfundTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tetfund_trainings', function (Blueprint $table) {
            $table->id();
            $table->string('funding_date')->nullable();
            $table->string('name')->nullable();
            $table->string('sex')->nullable();
            $table->string('programme')->nullable();
            $table->string('university')->nullable();
            $table->string('country')->nullable();
            $table->string('start_year')->nullable();
            $table->string('end_year')->nullable();
            $table->string('remark')->nullable();
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
        Schema::dropIfExists('tetfund_trainings');
    }
}
