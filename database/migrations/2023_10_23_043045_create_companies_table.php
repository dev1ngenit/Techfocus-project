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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('headquarter_country_id')->nullable()->constrained('countries')->cascadeOnDelete();
            $table->string('name')->nullable();
            $table->string('slug')->unique();
            $table->json('industry')->nullable();
            $table->json('country')->nullable();
            $table->json('location')->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('email')->nullable();
            $table->string('website_url')->nullable();
            $table->string('logo')->nullable();
            $table->string('postal_code', 10)->nullable();
            $table->string('contact_name')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_phone')->nullable();
            $table->text('headquarter')->nullable(); // Headquarter location
            $table->string('founder')->nullable(); // Founder's name
            $table->year('year_founded')->nullable(); // Year the industry was founded
            $table->string('ceo')->nullable(); // CEO's name
            $table->mediumText('mission')->nullable(); // Mission statement
            $table->mediumText('vision')->nullable(); // Vision statement
            $table->mediumText('history')->nullable(); // Historical information
            $table->mediumText('about')->nullable(); // About. information

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
        Schema::dropIfExists('companies');
    }
};
