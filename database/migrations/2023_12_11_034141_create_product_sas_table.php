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
        Schema::create('product_sas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->nullable()->constrained('products')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('ref_code')->unique();
            $table->date('create')->nullable();
            $table->string('item_name')->nullable();
            $table->double('cog_price')->nullable(); // ok
            $table->double('sales_price')->nullable();
            $table->float('bank_charge')->nullable(); // ok
            $table->float('customs')->nullable(); // ok
            $table->float('tax')->nullable(); // ok
            $table->float('utility_cost')->nullable(); // ok
            $table->float('shiping_cost')->nullable(); // ok
            $table->float('sales_comission')->nullable(); // ok
            $table->float('liability')->nullable(); // ok
            $table->float('regular_discounts')->nullable(); // ok
            $table->float('rebates')->nullable(); // ok
            $table->float('capital_share')->nullable(); // ok
            $table->float('management_cost')->nullable(); // ok
            $table->double('net_profit')->nullable();
            $table->double('gross_profit')->nullable();
            $table->double('net_profit_amount')->nullable();
            $table->double('gross_profit_amount')->nullable();
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
        Schema::dropIfExists('product_sas');
    }
};
