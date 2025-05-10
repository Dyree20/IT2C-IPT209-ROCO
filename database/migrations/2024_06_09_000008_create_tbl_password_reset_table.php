<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tbl_password_reset', function (Blueprint $table) {
            $table->increments('pr_id');
            $table->string('pr_username');
            $table->string('pr_status');
            $table->dateTime('pr_date');
            $table->string('pr_new_password')->nullable();
            $table->string('pr_approved_by')->nullable();
            $table->dateTime('pr_approved_date')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tbl_password_reset');
    }
}; 