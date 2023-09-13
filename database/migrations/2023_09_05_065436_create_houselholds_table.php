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
    public function up()
    {
        Schema::create('households', function (Blueprint $table) {
            $table->id();
            $table->string('forest_distance');
            $table->integer('cooking_frequency');
            $table->integer('cooking_hours');
            $table->string('cooking_location');
            $table->string('cookstove_type');
            $table->string('fuel_types')->nullable(); // Store selected fuel types as JSON
            $table->string('firewood_source')->nullable();
            $table->text('problems')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('houselholds');
    }
};
