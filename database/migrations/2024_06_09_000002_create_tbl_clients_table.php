<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tbl_clients', function (Blueprint $table) {
            $table->increments('c_id');
            $table->string('c_name', 100);
            $table->string('c_email', 100);
            $table->string('c_phone', 20);
            $table->string('c_address', 200);
            $table->string('c_license_number', 50);
            $table->date('c_license_expiry');
            $table->timestamp('c_registration_date')->useCurrent();
            $table->string('c_status', 20)->default('active');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tbl_clients');
    }
}; 