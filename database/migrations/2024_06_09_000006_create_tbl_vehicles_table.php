<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tbl_vehicles', function (Blueprint $table) {
            $table->increments('v_id');
            $table->string('v_make', 50);
            $table->string('v_model', 50);
            $table->string('v_year', 10);
            $table->string('v_plate', 20);
            $table->integer('v_rate');
            $table->string('v_status', 20);
            $table->binary('v_image');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tbl_vehicles');
    }
}; 