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
        Schema::table('login_records', function (Blueprint $table) {
            $table->string('session_id')->nullable();
        });

        Schema::table('login_page_hits', function (Blueprint $table) {
            $table->string('session_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('login_page_hits', function (Blueprint $table) {
            $table->dropColumn('session_id');
        });
        Schema::table('login_records', function (Blueprint $table) {
            $table->dropColumn('session_id');
        });
    }
};
