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
        Schema::create('dynamic_sites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id')->nullable()->constrained('countries')->cascadeOnDelete();
            $table->foreignId('company_id')->nullable()->constrained('companies')->cascadeOnDelete();
            $table->foreignId('industry_id')->nullable()->constrained('industries')->cascadeOnDelete();
            $table->string('name')->nullable();
            $table->string('slug')->unique();
            $table->string('page_name')->nullable();
            $table->string('custom_url')->nullable();
            $table->string('favicon_icon')->nullable();
            $table->string('logo')->nullable();
            $table->json('category_id')->nullable();
            $table->json('brands')->nullable();

            $table->string('primary_color',100)->nullable();
            $table->string('secondary_color',100)->nullable();
            $table->string('secondary_bg_color',100)->nullable();
            $table->string('secondary_deep_color',100)->nullable();
            $table->string('btn_color',100)->nullable();
            $table->string('main_bg_color',100)->nullable();
            $table->string('paragraph_color',100)->nullable();
            $table->string('secondary_paragraph_color',100)->nullable();
            $table->string('heading_color',100)->nullable();
            $table->string('white',100)->nullable();
            $table->string('black',100)->nullable();
            $table->string('secoandaryborder_color',100)->nullable();
            $table->string('border_color',100)->nullable();
            $table->string('divider_color',100)->nullable();
            $table->string('toggle_color',100)->nullable();
            $table->string('text_color',100)->nullable();
            $table->string('para_color',100)->nullable();
            $table->string('custom_shadow',100)->nullable();
            $table->string('primary_font',100)->nullable();
            $table->string('number_font',100)->nullable();
            $table->string('section_title_font_size',100)->nullable();
            $table->string('header_font_size',100)->nullable();
            $table->string('content_title_font_size',100)->nullable();
            $table->string('paragraph_font_size',100)->nullable();
            $table->string('badge_font_size',100)->nullable();
            $table->text('primary_font_url')->nullable();
            $table->text('number_font_url')->nullable();
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
        Schema::dropIfExists('dynamic_sites');
    }
};
