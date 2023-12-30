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
        Schema::create('employee_tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id')->nullable()->constrained('countries')->cascadeOnDelete();
            $table->foreignId('company_id')->nullable()->constrained('companies')->cascadeOnDelete();
            $table->foreignId('employee_id')->nullable()->constrained('admins')->cascadeOnDelete();
            $table->string('title')->nullable();
            $table->string('slug')->unique();
            $table->string('month')->nullable();
            $table->date('create_date')->nullable();
            $table->json('supervisors')->nullable();
            $table->json('notify_id')->nullable();
            $table->integer('supervisor_rating')->nullable();
            $table->integer('hr_rating')->nullable();
            $table->integer('ceo_rating')->nullable();
            $table->text('supervisor_review')->nullable();
            $table->text('hr_review')->nullable();
            $table->text('ceo_review')->nullable();
            $table->string('kpi_percentage')->nullable();
            $table->enum('status', ['done', 'not_done', 'partial_done'])->default('done')->nullable();
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
        Schema::dropIfExists('employee_tasks');
    }
};
