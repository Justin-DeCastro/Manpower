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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('website');
            $table->string('phone', 11); // Adjusted to match 11 digits requirement
            $table->string('position');
            $table->string('email');
            $table->string('person');
            $table->string('sec_certificate'); // Assuming you store path or filename
            $table->string('business_permit'); // Assuming you store path or filename
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
