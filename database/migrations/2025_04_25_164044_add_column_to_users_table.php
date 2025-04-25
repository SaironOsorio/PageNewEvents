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
        Schema::table('users', function (Blueprint $table) {
            $table->integer('ivao_id')->nullable();
            $table->string('Division_id')->nullable();
            $table->string('Contry_id')->nullable();
            $table->string('atc_rating_name')->nullable();
            $table->string('atc_rating_short')->nullable();
            $table->string('pilot_rating_name')->nullable();
            $table->string('pilot_rating_short')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('ivao_id');
            $table->dropColumn('atc_rating_name');
            $table->dropColumn('atc_rating_short');
            $table->dropColumn('pilot_rating_name');
            $table->dropColumn('pilot_rating_short');
            $table->dropColumn('Division_id');
            $table->dropColumn('Contry_id');
        });
    }
};
