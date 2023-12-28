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
        Schema::create('about_pages', function (Blueprint $table) {
            $table->id();

            $table->string('badge');
            $table->string('title');
            $table->date('date');
            $table->string('subtitle');
            $table->text('description');
            $table->string('additional_info')->nullable();
            $table->string('contact_link')->nullable();
            $table->string('main_image_url')->nullable();
            $table->string('secondary_image_url')->nullable();
            $table->string('contact_us_btn_name')->nullable();
            $table->string('contact_us_btn_link')->nullable();

            // First Card
            $table->string('title_one');
            $table->text('short_description_one');
            $table->longText('detailed_description_one');
            $table->foreignId('admins_id_one')->nullable()->constrained('admins')->onDelete('set null');
            $table->string('quote_one')->nullable();
            $table->string('quote_author_one')->nullable();
            $table->string('link_url_one')->nullable();

            // Second Card
            $table->string('title_two');
            $table->text('short_description_two');
            $table->longText('detailed_description_two');
            $table->foreignId('admins_id_two')->nullable()->constrained('admins')->onDelete('set null');
            $table->string('quote_two')->nullable();
            $table->string('quote_author_two')->nullable();
            $table->string('link_url_two')->nullable();

            // Third Card
            $table->string('title_three');
            $table->text('short_description_three');
            $table->longText('detailed_description_three');
            $table->foreignId('admins_id_three')->nullable()->constrained('admins')->onDelete('set null');
            $table->string('quote_three')->nullable();
            $table->string('quote_author_three')->nullable();
            $table->string('link_url_three')->nullable();

            // Fourth Card
            $table->string('title_four');
            $table->text('short_description_four');
            $table->longText('detailed_description_four');
            $table->foreignId('admins_id_four')->nullable()->constrained('admins')->onDelete('set null');
            $table->string('quote_four')->nullable();
            $table->string('quote_author_four')->nullable();
            $table->string('link_url_four')->nullable();

            $table->string('banner_middle_image');

            $table->string('values_title');
            $table->text('values_description');
            $table->string('values_sign')->nullable();
            $table->string('ceo_name')->nullable();
            $table->string('ceo_title')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('whatsapp_link')->nullable();
            $table->string('different_section_title')->nullable();
            $table->text('different_section_content')->nullable();
            $table->string('flexible_solution_one')->nullable();
            $table->string('flexible_solution_two')->nullable();
            $table->string('flexible_solution_three')->nullable();
            $table->string('flexible_solution_four')->nullable();

            $table->string('title_one');
            $table->text('short_description_one');
            $table->string('icon_one')->nullable();

            $table->string('title_one');
            $table->text('short_description_one');
            $table->string('icon_one')->nullable();

            $table->string('title_one');
            $table->text('short_description_one');
            $table->string('icon_one')->nullable();

            $table->string('title_one');
            $table->text('short_description_one');
            $table->string('icon_one')->nullable();

            $table->string('logo_url');

            $table->timestamps();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about_pages');
    }
};
