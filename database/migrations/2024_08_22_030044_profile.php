<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->integer("umur");
            $table->text("bio");
            $table->text("alamat");
            $table->foreignId("user_id")->constrained();
           
        });

    }
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
