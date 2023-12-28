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
            $table->string('section_two_badge');
            $table->string('section_two_title_1');
            $table->string('section_two_title_span');
            $table->string('section_two_subtitle');
            $table->text('section_two_description');
            $table->string('section_two_main_image')->nullable()->comment('image');
            $table->string('section_two_secondary_image')->nullable()->comment('image');
            $table->string('section_two_secondary_image_count')->nullable();// req
            $table->string('section_two_secondary_image_title')->nullable();// req
            $table->string('section_two_button_name')->nullable();
            $table->string('section_two_button_link')->nullable();
            $table->string('section_three_tab_one_title');
            $table->text('section_three_tab_one_short_description');
            $table->longText('section_three_tab_one_detailed_description');
            $table->string('section_three_tab_one_list_title')->nullable();
            $table->string('section_three_tab_one_list_1')->nullable();
            $table->string('section_three_tab_one_list_2')->nullable();
            $table->string('section_three_tab_one_list_3')->nullable();
            $table->string('section_three_tab_one_list_4')->nullable();
            $table->string('section_three_tab_one_quote')->nullable()->comment('maxlength:250');
            $table->string('section_three_tab_one_quote_author')->nullable();
            $table->string('section_three_tab_one_button_name')->nullable();
            $table->string('section_three_tab_one_button_link')->nullable();
            $table->string('section_three_tab_two_title');
            $table->text('section_three_tab_two_short_description');
            $table->longText('section_three_tab_two_detailed_description');
            $table->string('section_three_tab_two_list_title')->nullable();
            $table->string('section_three_tab_two_list_1')->nullable();
            $table->string('section_three_tab_two_list_2')->nullable();
            $table->string('section_three_tab_two_list_3')->nullable();
            $table->string('section_three_tab_two_list_4')->nullable();
            $table->string('section_three_tab_two_quote')->nullable()->comment('maxlength:250');
            $table->string('section_three_tab_two_quote_author')->nullable();
            $table->string('section_three_tab_two_button_name')->nullable();
            $table->string('section_three_tab_two_button_link')->nullable();
            $table->string('section_three_tab_three_title');
            $table->text('section_three_tab_three_short_description');
            $table->longText('section_three_tab_three_detailed_description');
            $table->string('section_three_tab_three_list_title')->nullable();
            $table->string('section_three_tab_three_list_1')->nullable();
            $table->string('section_three_tab_three_list_2')->nullable();
            $table->string('section_three_tab_three_list_3')->nullable();
            $table->string('section_three_tab_three_list_4')->nullable();
            $table->string('section_three_tab_three_quote')->nullable()->comment('maxlength:250');
            $table->string('section_three_tab_three_quote_author')->nullable();
            $table->string('section_three_tab_three_button_name')->nullable();
            $table->string('section_three_tab_three_button_link')->nullable();
            $table->string('section_three_tab_four_title');
            $table->text('section_three_tab_four_short_description');
            $table->longText('section_three_tab_four_detailed_description');
            $table->string('section_three_tab_four_list_title')->nullable();
            $table->string('section_three_tab_four_list_1')->nullable();
            $table->string('section_three_tab_four_list_2')->nullable();
            $table->string('section_three_tab_four_list_3')->nullable();
            $table->string('section_three_tab_four_list_4')->nullable();
            $table->string('section_three_tab_four_quote')->nullable()->comment('maxlength:250');
            $table->string('section_three_tab_four_quote_author')->nullable();
            $table->string('section_three_tab_four_button_name')->nullable();
            $table->string('section_three_tab_four_button_link')->nullable();
            $table->string('section_four_banner_middle_image')->comment('image');
            $table->string('section_four_col_one_title');
            $table->text('section_four_col_one_description');
            $table->string('section_four_ceo_sign')->nullable()->comment('image');
            $table->string('section_four_ceo_name')->nullable();
            $table->string('section_four_ceo_designation')->nullable();
            $table->string('section_four_ceo_facebook_account_link')->nullable();
            $table->string('section_four_ceo_twitter_account_link')->nullable();
            $table->string('section_four_ceo_whatsapp_account_link')->nullable();
            $table->string('section_four_col_two_title')->nullable();
            $table->text('section_four_col_two_content')->nullable();
            $table->string('section_four_col_two_list_1')->nullable();
            $table->string('section_four_col_two_list_2')->nullable();
            $table->string('section_four_col_two_list_3')->nullable();
            $table->string('section_four_col_two_list_4')->nullable();
            $table->string('section_five_card_one_title');
            $table->string('section_five_card_one_count');
            $table->text('section_five_card_one_short_description');
            $table->string('section_five_card_one_icon')->nullable();
            $table->string('section_five_card_two_title');
            $table->string('section_five_card_two_count');
            $table->text('section_five_card_two_short_description');
            $table->string('section_five_card_two_icon')->nullable();
            $table->string('section_five_card_three_title');
            $table->string('section_five_card_three_count');
            $table->text('section_five_card_three_short_description');
            $table->string('section_five_card_three_icon')->nullable();
            $table->string('section_five_card_four_title');
            $table->string('section_five_card_four_count');
            $table->text('section_five_card_four_short_description');
            $table->string('section_five_card_four_icon')->nullable();
            $table->json('brand_id');

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
