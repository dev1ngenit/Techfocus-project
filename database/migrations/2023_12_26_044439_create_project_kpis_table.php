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
        Schema::create('project_kpis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->nullable()->constrained('employee_projects')->cascadeOnDelete();
            $table->foreignId('employee_id')->nullable()->constrained('admins')->cascadeOnDelete();
            $table->string('name')->nullable();
            $table->double('given_hour')->nullable();
            $table->double('actual_hour')->nullable();
            $table->enum('status', ['done', 'not_done','partial_done'])->default('done')->nullable();
            $table->double('team_leader_rating')->nullable();
            $table->double('supervisor_rating')->nullable();
            $table->double('kpi_ratio')->nullable();
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
        Schema::dropIfExists('project_kpis');
    }
};
