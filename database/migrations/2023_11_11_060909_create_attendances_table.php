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
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('country_id')->nullable()->constrained('countries')->cascadeOnDelete();
            // $table->foreignId('employee_id')->nullable()->constrained('admins')->cascadeOnDelete();
            // $table->foreignId('company_id')->nullable()->constrained('companies')->cascadeOnDelete();
            // $table->year('year')->nullable();
            // $table->string('month')->nullable();
            // $table->date('date')->nullable();
            // $table->time('check_in')->nullable();
            // $table->time('check_out')->nullable();
            // $table->enum('status', ['leave', 'absent', 'present'])->nullable();
            // $table->timestamps();

            // $table->Increments('id');
            $table->integer('uid')->unsigned()->default(0);
            $table->unsignedBigInteger('emp_id');
            $table->boolean('state')->default(0); //no need
            $table->time('attendance_time')->default(date("H:i:s"));  //no need
            $table->date('attendance_date')->default(date("Y-m-d"));
            $table->boolean('status')->default(1);
            $table->foreign('emp_id')->references('id')->on('admins')->onDelete('cascade');
            $table->boolean('type')->unsigned()->default(0);
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
        Schema::dropIfExists('attendances');
    }
};
