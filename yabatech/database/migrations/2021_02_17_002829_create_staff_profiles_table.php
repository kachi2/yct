<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('cv')->nullable();
            $table->string('email')->nullable();
            $table->string('research_areas')->nullable();
            $table->foreignId('staff_publication_id')->constrained()->cascadeOnDelete();
            $table->foreignId('staff_qualification_id')->constrained()->cascadeOnDelete();
            $table->foreignId('staff_list_id')->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('staff_profiles');
    }
}
