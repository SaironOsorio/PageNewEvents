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
            $table->string('GateDeparture')->nullable()->change();
            $table->string('GateArrival')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('fligths', function (Blueprint $table) {
            $table->string('GateDeparture')->nullable(false)->change();
            $table->string('GateArrival')->nullable(false)->change();
        });
    }
};
