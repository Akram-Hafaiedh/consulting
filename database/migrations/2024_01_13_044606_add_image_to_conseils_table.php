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
        Schema::table('conseils', function (Blueprint $table) {
            $table->string('image')->nullable(); // Assume image name will be stored
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('conseils', function (Blueprint $table) {
            $table->dropColumn('image');
        });
    }
};
