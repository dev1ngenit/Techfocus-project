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
            $table->double('cog_price')->nullable();
            $table->double('sales_price')->nullable();
            $table->float('bank_charge')->nullable();
            $table->float('customs')->nullable();
            $table->float('tax')->nullable();
            $table->float('utility_cost')->nullable();
            $table->float('shiping_cost')->nullable();
            $table->float('sales_comission')->nullable();
            $table->float('liability')->nullable();
            $table->float('regular_discounts')->nullable();
            $table->float('rebates')->nullable();
            $table->float('capital_share')->nullable();
            $table->float('management_cost')->nullable();
            $table->double('net_profit')->nullable();
            $table->double('gross_profit')->nullable();
            $table->double('net_profit_amount')->nullable();
            $table->double('gross_profit_amount')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
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
