<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('accidents', function (Blueprint $table) {
            $table->id();
            $table->string('accidentRef');
            $table->unsignedBigInteger('accidentTypeID');
            $table->date('accidentDate');
            $table->unsignedBigInteger('companyID');
            $table->unsignedBigInteger('depotID');
            $table->unsignedBigInteger('personTypeID');
            $table->string('forename')->nullable();
            $table->string('surname')->nullable();
            $table->boolean('hasAnalysisCompleted')->default(false);
            $table->text('investigationDetails')->nullable();
            $table->unsignedBigInteger('accidentSignOffID')->nullable();
            $table->unsignedBigInteger('SHAManagerSignOffID')->nullable();
            $table->unsignedBigInteger('regionalMDSignOffID')->nullable();
            $table->unsignedBigInteger('esgHeadSignOffID')->nullable();
            $table->boolean('isDeleted')->default(false);
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accidents');
    }
};
