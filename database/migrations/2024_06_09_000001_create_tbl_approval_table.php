<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tbl_approval', function (Blueprint $table) {
            $table->increments('u_id');
            $table->string('u_name', 50);
            $table->string('u_username', 50);
            $table->string('u_email', 50);
            $table->string('u_password', 250);
            $table->string('u_phone', 50);
            $table->string('u_role', 50);
            $table->string('u_status', 50);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tbl_approval');
    }
}; 