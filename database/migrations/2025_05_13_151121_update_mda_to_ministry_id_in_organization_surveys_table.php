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
        Schema::table('organization_surveys', function (Blueprint $table) {
            // First, drop the old 'mda' string column if it exists
            $table->dropColumn('mda');

            // Add the new ministry_id column and define it as a foreign key
            $table->unsignedBigInteger('ministry_id')->after('id'); // adjust position as needed
            $table->foreign('ministry_id')->references('id')->on('ministries')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('organization_surveys', function (Blueprint $table) {
            // Rollback: drop the foreign key and the column
            $table->dropForeign(['ministry_id']);
            $table->dropColumn('ministry_id');

            // Restore the old mda column
            $table->string('mda')->nullable();
        });
    }
};
