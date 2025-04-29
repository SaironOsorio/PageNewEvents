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
        Schema::create('fligths', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')->constrained()->onDelete('cascade');
            $table->string('nameCompany');
            $table->string('IcaoAirline');
            $table->time('departure_time');
            $table->time('Time_Zulu');
            $table->string('departure_airport');
            $table->string('IcaoDeparture');
            $table->string('arrival_airport');
            $table->string('IcaoArrival');
            $table->string('flight_number');
            $table->time('Hours');
            $table->string('GateDeparture');
            $table->string('GateArrival');
            $table->string('FlightType');
            $table->string('status');
            $table->boolean('is_cancelled')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fligths');
    }
};
