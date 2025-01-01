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
        Schema::create('report_file', function (Blueprint $table) {
            $table->foreignId('report_id')->constraint();
            $table->foreignId('file_id')->constraint();
            $table->timestamps();
            $table->primary(['report_id', 'file_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('report_file');
    }
};
