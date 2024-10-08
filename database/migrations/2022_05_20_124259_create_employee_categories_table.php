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
        Schema::create('employee_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id')->nullable()->constrained('countries')->cascadeOnDelete();
            $table->foreignId('company_id')->nullable()->constrained('companies')->cascadeOnDelete();
            $table->string('name');
            $table->string('slug')->unique();
            $table->unsignedInteger('evaluation_period');
            $table->unsignedSmallInteger('monthly_earned_leave')->default(0);
            $table->unsignedSmallInteger('monthly_casual_leave')->default(0);
            $table->unsignedSmallInteger('monthly_medical_leave')->default(0);
            $table->unsignedSmallInteger('yearly_earned_leave')->default(0);
            $table->unsignedSmallInteger('yearly_casual_leave')->default(0);
            $table->unsignedSmallInteger('yearly_medical_leave')->default(0);
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
        Schema::dropIfExists('employee_categories');
    }
};
