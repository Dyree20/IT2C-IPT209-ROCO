<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tbl_user_logs', function (Blueprint $table) {
            $table->increments('log_id');
            $table->string('log_action');
            $table->text('log_details');
            $table->string('log_user');
            $table->timestamp('log_timestamp')->useCurrent();
            $table->string('log_ip');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tbl_user_logs');
    }
}; 