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
        Schema::create('profile', function (Blueprint $table) {
            $table->id();
            $table->string('respondentName');
            $table->integer('age');
            $table->char('sex', 1); // 'M' for Male, 'F' for Female
            $table->string('location'); // You may consider using a spatial data type for latitude and longitude.
            $table->string('phone')->nullable();
            $table->string('occupation');
            $table->integer('income');
            $table->string('economicClass', 3); // 'APL' or 'BPL'
            $table->integer('adultMembers');
            $table->integer('children');
            $table->json('documents')->nullable(); // Store as JSON array
            $table->string('documentNumber')->nullable();
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
        Schema::dropIfExists('profile');
    }
};
