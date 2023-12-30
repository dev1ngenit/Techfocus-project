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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->nullable()->constrained('admins')->cascadeOnDelete();
            $table->foreignId('employee_task_id')->nullable()->constrained('employee_tasks')->cascadeOnDelete();
            $table->foreignId('supervisor_id')->nullable()->constrained('admins');
            $table->string('task_name');
            $table->string('slug')->unique();
            $table->text('task_description')->nullable();
            $table->string('task_target')->nullable();
            $table->string('task_rating')->nullable();
            $table->integer('task_weight')->nullable();
            $table->json('assignees')->nullable();
            $table->json('supervisors')->nullable();
            $table->json('notify_id')->nullable();
            $table->integer('supervisor_rating')->nullable();
            $table->integer('hr_rating')->nullable();
            $table->integer('ceo_rating')->nullable();
            $table->text('supervisor_review')->nullable();
            $table->text('hr_review')->nullable();
            $table->text('ceo_review')->nullable();
            $table->string('priority')->nullable();
            $table->enum('task_type', ['project_task', 'agenda', 'task'])->default('task')->nullable();
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
        Schema::dropIfExists('tasks');
    }
};
