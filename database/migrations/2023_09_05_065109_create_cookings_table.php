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
        Schema::create('cookings', function (Blueprint $table) {
            $table->id();
            $table->boolean('charcoalUsage');
            $table->decimal('charcoalQuantity', 10, 2)->nullable();
            $table->string('charcoalUnit')->nullable();
            $table->decimal('charcoalMoney', 10, 2)->nullable();
            $table->boolean('firewoodUsage');
            $table->decimal('firewoodQuantity', 10, 2)->nullable();
            $table->string('firewoodUnit')->nullable();
            $table->decimal('firewoodMoney', 10, 2)->nullable();
            $table->boolean('lpgUsage');
            $table->decimal('lpgQuantity', 10, 2)->nullable();
            $table->decimal('lpgMoney', 10, 2)->nullable();
            $table->boolean('keroseneUsage');
            $table->decimal('keroseneQuantity', 10, 2)->nullable();
            $table->decimal('keroseneMoney', 10, 2)->nullable();
            $table->boolean('coalUsage');
            $table->decimal('coalQuantity', 10, 2)->nullable();
            $table->string('coalUnit')->nullable();
            $table->decimal('coalMoney', 10, 2)->nullable();
            $table->boolean('electricityUsage');
            $table->decimal('electricityQuantity', 10, 2)->nullable();
            $table->decimal('electricityMoney', 10, 2)->nullable();
            $table->string('otherFuelUsage')->nullable();
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
        Schema::dropIfExists('cookings');
    }
};
