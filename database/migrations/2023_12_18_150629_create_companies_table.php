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
        Schema::create('companies', function (Blueprint $table) {
            $table->ulid("id")->primary();
            $table->foreignUlid("type_id")->references("id")->on("types")->cascadeOnDelete();
            $table->string("name");
            $table->string("email")->nullable();
            $table->string("country");
            $table->string("city");
            $table->string("phone");
            $table->string("website")->nullable();
            $table->double("longitude");
            $table->double("lattitude");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
