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
        Schema::create('employees', function (Blueprint $table) {
            $table->id("id");
            $table->string("name", 50);
            $table->string("cpf", 11)->unique();
            $table->string("pis_nis", 11)->unique();
            $table->string("gender", 20);
            $table->string("role", 20);
            $table->decimal("salary", 8,2);
            $table->timestamp("admission_date");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
