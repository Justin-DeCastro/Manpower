<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('manpower_reqs', function (Blueprint $table) {
            $table->id();
            $table->string('work_type');
            $table->string('vacant_position');
            $table->string('job_category');
            $table->integer('no_of_vacancy');
            $table->string('years_experience');
            $table->string('working_location');
            $table->string('working_schedule_hours')->nullable();
            $table->string('working_schedule_days')->nullable();
            $table->string('payout_hours')->nullable();
            $table->string('payout_days')->nullable();
            $table->string('preferred_gender')->nullable();
            $table->text('job_requirements')->nullable();
            $table->string('cpa')->nullable();
            $table->string('nationalcertificate')->nullable();
            $table->string('license')->nullable();
            $table->string('other_qualification')->nullable();
            $table->text('other_requirements')->nullable();
            $table->string('salary_from')->nullable();
            $table->string('salary_to')->nullable();
            $table->date('target_date')->nullable();
            $table->string('screening_method');
            $table->text('job_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manpower_reqs');
    }
};
