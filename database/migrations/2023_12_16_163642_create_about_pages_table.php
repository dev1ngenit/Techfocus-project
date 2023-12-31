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
            $table->string('section_two_badge', 230);
            $table->string('section_two_title_1', 230);
            $table->string('section_two_title_span', 230);
            $table->string('section_two_subtitle', 230);
            $table->text('section_two_description');
            $table->string('section_two_main_image', 230)->nullable()->comment('image');
            $table->string('section_two_secondary_image', 230)->nullable()->comment('image');
            $table->string('section_two_secondary_image_count', 230)->nullable(); // req
            $table->string('section_two_secondary_image_title', 230)->nullable(); // req
            $table->string('section_two_button_name', 230)->nullable();
            $table->text('section_two_button_link')->nullable();
            $table->string('section_three_tab_one_title', 230);
            $table->text('section_three_tab_one_short_description');
            $table->longText('section_three_tab_one_detailed_description');
            $table->string('section_three_tab_one_list_title', 230)->nullable();
            $table->string('section_three_tab_one_list_1', 230)->nullable();
            $table->string('section_three_tab_one_list_2', 230)->nullable();
            $table->string('section_three_tab_one_list_3', 230)->nullable();
            $table->string('section_three_tab_one_list_4', 230)->nullable();
            $table->string('section_three_tab_one_quote', 230)->nullable()->comment('maxlength:250');
            $table->string('section_three_tab_one_quote_author', 230)->nullable();
            $table->string('section_three_tab_one_button_name', 230)->nullable();
            $table->text('section_three_tab_one_button_link')->nullable();
            $table->string('section_three_tab_two_title', 230);
            $table->text('section_three_tab_two_short_description');
            $table->longText('section_three_tab_two_detailed_description');
            $table->string('section_three_tab_two_list_title', 230)->nullable();
            $table->string('section_three_tab_two_list_1', 230)->nullable();
            $table->string('section_three_tab_two_list_2', 230)->nullable();
            $table->string('section_three_tab_two_list_3', 230)->nullable();
            $table->string('section_three_tab_two_list_4', 230)->nullable();
            $table->string('section_three_tab_two_quote', 230)->nullable()->comment('maxlength:250');
            $table->string('section_three_tab_two_quote_author', 230)->nullable();
            $table->string('section_three_tab_two_button_name', 230)->nullable();
            $table->text('section_three_tab_two_button_link')->nullable();
            $table->string('section_three_tab_three_title', 230);
            $table->text('section_three_tab_three_short_description');
            $table->longText('section_three_tab_three_detailed_description');
            $table->string('section_three_tab_three_list_title', 230)->nullable();
            $table->string('section_three_tab_three_list_1', 230)->nullable();
            $table->string('section_three_tab_three_list_2', 230)->nullable();
            $table->string('section_three_tab_three_list_3', 230)->nullable();
            $table->string('section_three_tab_three_list_4', 230)->nullable();
            $table->string('section_three_tab_three_quote', 230)->nullable()->comment('maxlength:250');
            $table->string('section_three_tab_three_quote_author', 230)->nullable();
            $table->string('section_three_tab_three_button_name', 230)->nullable();
            $table->text('section_three_tab_three_button_link')->nullable();
            $table->string('section_three_tab_four_title', 230);
            $table->text('section_three_tab_four_short_description');
            $table->longText('section_three_tab_four_detailed_description');
            $table->string('section_three_tab_four_list_title', 230)->nullable();
            $table->string('section_three_tab_four_list_1', 230)->nullable();
            $table->string('section_three_tab_four_list_2', 230)->nullable();
            $table->string('section_three_tab_four_list_3', 230)->nullable();
            $table->string('section_three_tab_four_list_4', 230)->nullable();
            $table->text('section_three_tab_four_quote')->nullable()->comment('maxlength:250');
            $table->string('section_three_tab_four_quote_author', 230)->nullable();
            $table->string('section_three_tab_four_button_name', 230)->nullable();
            $table->text('section_three_tab_four_button_link')->nullable();
            $table->string('section_four_banner_middle_image', 230)->comment('image');
            $table->text('section_five_col_one_description');
            $table->string('section_five_col_one_title', 230);
            $table->string('section_five_ceo_sign', 230)->nullable()->comment('image');
            $table->string('section_five_ceo_name', 230)->nullable();
            $table->string('section_five_ceo_designation', 230)->nullable();
            $table->text('section_five_ceo_facebook_account_link')->nullable();
            $table->text('section_five_ceo_twitter_account_link')->nullable();
            $table->text('section_five_ceo_whatsapp_account_link')->nullable();
            $table->text('section_five_col_two_content')->nullable();
            $table->string('section_five_col_two_title', 230)->nullable();
            $table->string('section_five_col_two_list_1', 230)->nullable();
            $table->string('section_five_col_two_list_2', 230)->nullable();
            $table->string('section_five_col_two_list_3', 230)->nullable();
            $table->string('section_five_col_two_list_4', 230)->nullable();
            $table->string('section_six_card_one_title', 230);
            $table->string('section_six_card_one_count', 230);
            $table->string('section_six_card_one_icon', 230)->nullable();
            $table->text('section_six_card_one_short_description');
            $table->string('section_six_card_two_title', 230);
            $table->string('section_six_card_two_count', 230);
            $table->string('section_six_card_two_icon', 230)->nullable();
            $table->text('section_six_card_two_short_description');
            $table->string('section_six_card_three_title', 230);
            $table->string('section_six_card_three_count', 230);
            $table->text('section_six_card_three_short_description');
            $table->string('section_six_card_three_icon', 230)->nullable();
            $table->string('section_six_card_four_title', 230);
            $table->string('section_six_card_four_count', 230);
            $table->text('section_six_card_four_short_description');
            $table->string('section_six_card_four_icon', 230)->nullable();
            $table->json('brand_id');
            $table->enum('status', ['active', 'inactive'])->default('active')->nullable();
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
