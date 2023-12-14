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
        Schema::create('bankings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id')->nullable()->constrained('countries')->cascadeOnDelete();
            $table->foreignId('company_id')->nullable()->constrained('companies')->cascadeOnDelete();
            $table->string('month')->nullable();
            $table->date('date')->nullable();
            $table->year('fiscal_year')->nullable();
            $table->string('bank_name')->nullable();
            $table->double('deposit')->nullable();
            $table->double('withdraw')->nullable();
            $table->string('purpose')->nullable();
            $table->text('notes')->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('invoice_number')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('bankings');
    }
};
