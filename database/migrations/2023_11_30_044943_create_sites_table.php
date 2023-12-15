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
        Schema::create('sites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id')->nullable()->constrained('countries')->cascadeOnDelete();
            $table->foreignId('company_id')->nullable()->constrained('companies')->cascadeOnDelete();

            $table->string('system_name')->nullable();
            $table->string('frontend_website_name')->nullable();
            $table->string('site_motto')->nullable();
            $table->string('site_icon')->nullable();
            $table->string('system_logo_white')->nullable();
            $table->string('system_logo_black')->nullable();
            $table->string('system_timezone')->nullable(); // assuming timezone is a html text like 'UTC', 'EST', etc valueeee, select option

            $table->string('base_color')->nullable();
            $table->string('base_hover_color')->nullable();
            $table->string('secondary_base_color')->nullable();
            $table->string('secondary_base_hover_color')->nullable();

            $table->string('phone_one', 20)->nullable();
            $table->string('phone_two', 20)->nullable();
            $table->string('whatsapp_number', 20)->nullable();
            $table->string('default_language', 50)->nullable();
            $table->string('contact_email', 100)->nullable();
            $table->string('support_email', 100)->nullable();
            $table->string('info_email', 100)->nullable();
            $table->string('sales_email', 100)->nullable();
            $table->string('facebook_url', 255)->nullable();
            $table->string('twitter_url', 255)->nullable();
            $table->string('instagram_url', 255)->nullable();
            $table->string('linkedin_url', 255)->nullable();
            $table->string('youtube_url', 255)->nullable();
            $table->string('github_url', 255)->nullable();
            $table->string('portfolio_url', 255)->nullable();
            $table->string('fiver_url', 255)->nullable();
            $table->string('upwork_url', 255)->nullable();
            $table->string('service_days', 100)->nullable();
            $table->string('service_time', 100)->nullable();
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
        Schema::dropIfExists('sites');
    }
};
