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
        Schema::table('printer_records', function (Blueprint $table) {
            // Rename columns
            $table->renameColumn('type', 'name');
            $table->renameColumn('qty', 'quantity');
            $table->renameColumn('location', 'office_location');
            
            // Add new column
            $table->string('model_number')->nullable()->after('name');
            
            // Update column types if needed
            $table->string('name')->change();
            $table->integer('quantity')->unsigned()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('printer_records', function (Blueprint $table) {
            // Reverse the changes
            $table->renameColumn('name', 'type');
            $table->renameColumn('quantity', 'qty');
            $table->renameColumn('office_location', 'location');
            
            // Remove the added column
            $table->dropColumn('model_number');
            
            // Revert column types if changed
            $table->string('type')->change();
            $table->integer('qty')->change();
        });
    }
};
