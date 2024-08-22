<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('genres', function (Blueprint $table) {
            $table->id();
            $table->string("nama", 45);
            $table->text("ringkasan");
            $table->integer("tahun");
            $table->string("poster", 45);  
            $table->foreignId("genre_id")->constrained();  
        });

    }
    public function down(): void
    {
        Schema::dropIfExists('genres');
    } 
};
