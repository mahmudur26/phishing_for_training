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
        Schema::create('login_page_hits', function (Blueprint $table) {
            $table->id();
            
            $table->string('url')->nullable();
            $table->string('ip_address')->nullable();
            $table->string('device_type')->nullable();
            $table->text('user_agent')->nullable();
            $table->text('os_name')->nullable();
            $table->text('os_version')->nullable();
            $table->text('browser_name')->nullable();
            $table->text('browser_version')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('login_page_hits');
    }
};
