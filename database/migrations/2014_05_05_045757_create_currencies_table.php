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
        Schema::create('currencies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id')->constrained('countries')->cascadeOnDelete()->nullable();
            $table->string('system_default_currency')->default(false)->index()->nullable();
            $table->string('name')->nullable();
            $table->string('currency', 100);
            $table->string('code', 25)->unique();
            $table->string('symbol')->nullable();
            $table->enum('thousand_separator', ['.', ','])->default('.');
            $table->enum('decimal_separator', ['.', ','])->default('.');
            $table->unsignedTinyInteger('no_of_decimals')->default(2);
            $table->decimal('exchange_rate', 16, 6)->default(1.000000)->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
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
        Schema::dropIfExists('currencies');
    }
};
