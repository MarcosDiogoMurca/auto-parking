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
        Schema::create('cars', function (Blueprint $table) {
            $table->id("id");
            $table->string("type", 20);
            $table->string("plate", 8);
            $table->string("model", 20);
            $table->string("colour", 10)->nullable();
            $table->timestamp("check_in");
            $table->timestamp("check_out")->nullable();
            $table->boolean("is_monthly");
            $table->unsignedBigInteger("prices_id");
            $table->unsignedBigInteger("services_id");
            $table->unsignedBigInteger("partners_id");
            $table->timestamps();

            $table->foreign('prices_id', 'cars_prices_id_foreign')->references('id')->on('prices');
            $table->foreign('services_id', 'cars_services_id_foreign')->references('id')->on('services');
            $table->foreign('partners_id', 'cars_partners_id_foreign')->references('id')->on('partners');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->dropForeign('cars_prices_id_foreign');
            $table->dropForeign('cars_services_id_foreign');
            $table->dropForeign('cars_partners_id_foreign');
        });

        Schema::dropIfExists('cars');
    }
};