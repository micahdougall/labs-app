<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('person_nationality', static function (Blueprint $table) {
            $table->primary(['person_id', 'nationality_id']);
            $table->foreignId('person_id')->constrained()->cascadeOnDelete();
            $table->foreignId('nationality_id')->constrained()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('person_nationality');
    }
};
