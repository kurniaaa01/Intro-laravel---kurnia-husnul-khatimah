<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string("judul", 45); 
            $table->text("ringkasan");

        });

    }
    public function down(): void
    {
        Schema::dropIfExists('films');
    } 
};
