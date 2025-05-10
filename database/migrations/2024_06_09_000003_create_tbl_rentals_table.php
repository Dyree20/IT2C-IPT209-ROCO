<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tbl_rentals', function (Blueprint $table) {
            $table->increments('r_id');
            $table->integer('r_vehicle_id');
            $table->integer('r_client_id');
            $table->date('r_start_date');
            $table->date('r_end_date');
            $table->decimal('r_total_amount', 10, 2);
            $table->string('r_status', 20)->default('active');
            $table->timestamp('r_date_created')->useCurrent();
            $table->string('r_created_by', 50)->nullable();
            $table->date('r_return_date')->nullable();
            $table->string('r_return_processed_by', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tbl_rentals');
    }
}; 