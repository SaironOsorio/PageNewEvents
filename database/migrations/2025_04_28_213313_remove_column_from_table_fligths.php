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
        Schema::table('fligths', function (Blueprint $table) {
            $table->dropColumn('Hours');
            $table->dropColumn('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('table_fligths', function (Blueprint $table) {
            $table->integer('Hours')->nullable(); // Re-add the Hours column
            $table->string('status')->nullable(); // Re-add the status column
        });
    }
};
