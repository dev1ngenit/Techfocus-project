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
        Schema::create('rfqs', function (Blueprint $table) {
            $table->id();
            $table->string('rfq_code')->unique();
            $table->foreignId('sales_man_id_L1')->nullable()->constrained('admins')->cascadeOnDelete();
            $table->foreignId('sales_man_id_T1')->nullable()->constrained('admins')->cascadeOnDelete();
            $table->foreignId('sales_man_id_T2')->nullable()->constrained('admins')->cascadeOnDelete();
            $table->foreignId('client_id')->nullable()->constrained('users')->cascadeOnDelete();
            $table->enum('client_type', ['client', 'partner'])->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('company_name')->nullable();
            $table->string('designation')->nullable();
            $table->text('address')->nullable();
            $table->date('create_date')->nullable();
            $table->date('close_date')->nullable();
            $table->date('sale_date')->nullable();
            $table->string('pq_code')->nullable();
            $table->string('pqr_code_one')->nullable();
            $table->string('pqr_code_two')->nullable();
            $table->integer('qty')->nullable();
            $table->string('image')->nullable();
            $table->text('message')->nullable();
            $table->enum('rfq_type', ['rfq', 'deal', 'sales', 'order', 'delivery'])->default('rfq')->nullable();
            $table->enum('call', ['0', '1'])->default('0')->nullable();
            $table->enum('regular', ['0', '1'])->default('0')->nullable();
            $table->enum('special', ['0', '1'])->default('0')->nullable();
            $table->enum('tax_status', ['0', '1'])->default('0')->nullable();
            $table->enum('deal_type', ['new', 'renew'])->default('new')->nullable();
            $table->string('status')->nullable();
            $table->double('tax')->nullable();
            $table->double('vat')->nullable();
            $table->double('total_price')->nullable();
            $table->double('quoted_price')->nullable();
            $table->text('price_text')->nullable();
            $table->string('rfq_department')->nullable();
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
        Schema::dropIfExists('rfqs');
    }
};
