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
        Schema::create('printer_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('organization_survey_id')->constrained()->onDelete('cascade');
            $table->string('type')->nullable();
            $table->integer('qty')->nullable();
            $table->string('status')->nullable();
            $table->string('location')->nullable();
            $table->text('remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('printer_records');
    }
};
