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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id')->nullable()->constrained('countries')->cascadeOnUpdate();
            $table->foreignId('employee_department_id')->nullable()->constrained('employee_departments')->cascadeOnUpdate();
            $table->foreignId('supervisor_id')->nullable()->constrained('admins')->cascadeOnUpdate();
            $table->string('name', 255);
            $table->string('username', 30)->unique()->nullable();
            $table->string('email', 255)->unique();
            $table->string('photo', 255)->nullable(); //file
            $table->string('phone', 20)->nullable();
            $table->string('designation', 30)->nullable();
            $table->text('address')->nullable();
            $table->string('city', 100)->nullable();
            $table->string('postal', 20)->nullable();
            $table->timestamp('last_seen')->nullable();
            $table->json('role')->nullable();
            $table->json('department', 30)->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 255);
            $table->foreignId('employee_category_id')->nullable()->constrained('employee_categories')->cascadeOnUpdate();
            $table->string('employee_id')->unique()->nullable()->comment('107');
            $table->string('mobile', 20)->nullable();
            $table->string('total_years_of_job_experience')->nullable();
            $table->string('total_years_of_related_experience')->nullable();
            $table->string('total_years_of_related_education')->nullable();
            $table->string('lowest_job_duration_in_past', 50)->nullable();
            $table->string('highest_job_duration_in_past', 50)->nullable();
            $table->string('concern_with_social_work', 50)->nullable();
            $table->text('what_turns_you_on_off')->nullable();
            $table->text('preference_in_professional_life')->nullable();
            $table->text('action_in_negative_situation')->nullable();
            $table->string('recent_job_info_one_company_name')->nullable();
            $table->text('recent_job_info_one_address')->nullable();
            $table->string('recent_job_info_one_designation')->nullable();
            $table->string('recent_job_info_one_contact_no')->nullable();
            $table->string('recent_job_info_one_duration')->nullable();
            $table->string('recent_job_info_two_company_name')->nullable();
            $table->text('recent_job_info_two_address')->nullable();
            $table->string('recent_job_info_two_designation')->nullable();
            $table->string('recent_job_info_two_contact_no')->nullable();
            $table->string('recent_job_info_two_duration')->nullable();
            $table->string('professional_reference_name')->nullable();
            $table->text('professional_reference_address')->nullable();
            $table->string('professional_reference_contact_no_one')->nullable();
            $table->string('professional_reference_contact_no_two')->nullable();
            $table->string('professional_reference_contact_relation')->nullable();
            $table->string('relative_reference_name')->nullable();
            $table->text('relative_reference_address')->nullable();
            $table->string('relative_reference_contact_no_one')->nullable();
            $table->string('relative_reference_contact_no_two')->nullable();
            $table->string('relative_reference_contact_relation')->nullable();
            $table->string('highest_degree', 50)->nullable();
            $table->year('passing_year')->nullable();
            $table->string('university', 100)->nullable();
            $table->string('major_subjects', 100)->nullable();
            $table->text('other_training_information_technical_training')->nullable();
            $table->string('technical_training_duration_date')->nullable();
            $table->text('other_training_information_certificate_course')->nullable();
            $table->string('certificate_course_duration_date')->nullable();
            $table->text('academic_achievements')->nullable();
            $table->text('professional_achievements')->nullable();
            $table->text('social_achievements')->nullable();
            $table->text('personal_achievements')->nullable();
            $table->text('permanent_address')->nullable();
            $table->string('permanent_address_city')->nullable();
            $table->string('permanent_address_state')->nullable();
            $table->string('permanent_address_zip_code')->nullable();
            $table->text('current_address')->nullable();
            $table->string('current_address_city')->nullable();
            $table->string('current_address_state')->nullable();
            $table->string('current_address_zip_code')->nullable();
            $table->string('alternate_email', 100)->nullable()->unique();
            $table->string('home_phone', 20)->nullable();
            $table->string('emergency_number', 20)->nullable();
            $table->string('nid_bri_ppn', 50)->nullable()->unique();
            $table->date('birth_date')->nullable();
            $table->enum('marital_status', ['single', 'married', 'divorced', 'widowed'])->nullable();
            $table->string('spouse_name', 100)->nullable();
            $table->string('spouse_employer', 100)->nullable();
            $table->string('spouse_work_phone', 20)->nullable();
            $table->string('emergency_contact_information_name')->nullable();
            $table->text('emergency_contact_information_address')->nullable();
            $table->string('emergency_contact_information_city')->nullable();
            $table->string('emergency_contact_information_zip_code')->nullable();
            $table->string('emergency_contact_information_phone')->nullable();
            $table->string('emergency_contact_information_relationsip')->nullable();
            $table->string('father_name', 100)->nullable();
            $table->string('mother_name', 100)->nullable();
            $table->string('father_service', 100)->nullable();
            $table->string('mother_service', 100)->nullable();
            $table->string('brothers_total')->nullable();
            $table->string('sisters_total')->nullable();
            $table->text('siblings_contact_info_one')->nullable();
            $table->text('siblings_contact_info_two')->nullable();
            $table->text('sign')->comment('file')->nullable(); //files
            $table->text('ceo_sign')->comment('file')->nullable(); //files
            $table->text('operation_director_sign')->comment('file')->nullable(); //file
            $table->text('managing_director_sign')->comment('file')->nullable(); //file
            $table->date('sign_date')->nullable();
            $table->date('evaluation_date')->nullable();
            $table->integer('casual_leave_due_as_on')->default('0')->nullable();
            $table->integer('casual_leave_availed')->default('0')->nullable();
            $table->integer('casual_balance_due')->default('0')->nullable();
            $table->integer('earned_leave_due_as_on')->default('0')->nullable();
            $table->integer('earned_leave_availed')->default('0')->nullable();
            $table->integer('earned_balance_due')->default('0')->nullable();
            $table->integer('medical_leave_due_as_on')->default('0')->nullable();
            $table->integer('medical_leave_availed')->default('0')->nullable();
            $table->integer('medical_balance_due')->default('0')->nullable();
            $table->enum('police_verification', ['verified', 'unverified'])->default('unverified')->nullable();
            $table->enum('acknowledgement', ['acknowledged', 'unacknowledged'])->default('acknowledged')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('admins');
    }
};
