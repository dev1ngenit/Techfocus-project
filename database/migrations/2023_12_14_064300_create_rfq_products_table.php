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
        Schema::create('rfq_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rfq_id')->nullable()->constrained('rfqs')->cascadeOnDelete();
            $table->foreignId('product_id')->nullable()->constrained('products')->cascadeOnDelete();
            $table->foreignId('solution_id')->nullable()->constrained('solution_details')->cascadeOnDelete();
            $table->foreignId('category_id')->nullable()->constrained('categories')->cascadeOnDelete();
            $table->foreignId('brand_id')->nullable()->constrained('brands')->cascadeOnDelete();
            $table->string('name')->nullable();
            $table->bigInteger('qty')->nullable();
            $table->double('unit_price')->nullable();
            $table->double('discount')->nullable();
            $table->double('discount_price')->nullable();
            $table->double('total_price')->nullable();
            $table->double('sub_total')->nullable();
            $table->double('tax')->nullable();
            $table->double('tax_price')->nullable();
            $table->double('vat')->nullable();
            $table->double('vat_price')->nullable();
            $table->double('grand_total')->nullable();
            $table->text('product_des')->nullable();
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
        Schema::dropIfExists('rfq_products');
    }
};
