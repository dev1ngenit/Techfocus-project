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
        Schema::create('home_pages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id')->nullable()->constrained('countries')->cascadeOnDelete();
            $table->string('section_one_name')->nullable();
            $table->string('section_one_badge')->nullable();
            $table->string('section_one_title')->nullable();
            $table->mediumText('section_one_description')->nullable()->comment('text-editor');
            $table->string('section_one_button')->nullable();
            $table->text('section_one_link')->nullable();
            $table->string('section_one_image')->nullable()->comment('image');
            
            $table->string('section_two_name')->nullable();
            $table->json('section_two_products')->nullable()->comment('multiselect:max-4;products table');

            $table->string('section_three_name')->nullable();
            $table->string('section_three_badge')->nullable();
            $table->string('section_three_title')->nullable();
            $table->string('section_three_button')->nullable();
            $table->text('section_three_link')->nullable();
            $table->string('section_three_first_column_logo')->nullable()->comment('image');
            $table->string('section_three_first_column_title')->nullable();
            $table->text('section_three_first_column_link')->nullable();
            $table->string('section_three_second_column_logo')->nullable()->comment('image');
            $table->string('section_three_second_column_title')->nullable();
            $table->text('section_three_second_column_link')->nullable();
            $table->string('section_three_third_column_logo')->nullable()->comment('image');
            $table->string('section_three_third_column_title')->nullable();
            $table->text('section_three_third_column_link')->nullable();
            $table->string('section_three_fourth_column_logo')->nullable()->comment('image');
            $table->string('section_three_fourth_column_title')->nullable();
            $table->text('section_three_fourth_column_link')->nullable();

            $table->string('section_four_name')->nullable();
            $table->json('section_four_contents')->nullable()->comment('multiselect:max-4;news_trends table');

            $table->string('section_five_title')->nullable();
            $table->string('section_five_link_one_title')->nullable();
            $table->string('section_five_link_one_icon')->nullable()->comment('fa-icon');
            $table->string('section_five_link_one_link')->nullable();
            $table->string('section_five_link_two_title')->nullable();
            $table->string('section_five_link_two_icon')->nullable()->comment('fa-icon');
            $table->string('section_five_link_two_link')->nullable();
            $table->string('section_five_link_three_title')->nullable();
            $table->string('section_five_link_three_icon')->nullable()->comment('fa-icon');
            $table->string('section_five_link_three_link')->nullable();
            $table->string('section_five_button_title')->nullable();
            $table->string('section_five_button_sub_title')->nullable();
            $table->string('section_five_button_link')->nullable();

            $table->string('section_six_name')->nullable();
            $table->string('section_six_first_column_image')->nullable()->comment('image');
            $table->string('section_six_first_column_title')->nullable();
            $table->mediumText('section_six_first_column_description')->nullable();
            $table->string('section_six_first_column_button_name')->nullable();
            $table->text('section_six_first_column_button_link')->nullable();

            $table->string('section_six_second_column_image')->nullable()->comment('image');
            $table->string('section_six_second_column_title')->nullable();
            $table->mediumText('section_six_second_column_description')->nullable();
            $table->string('section_six_second_column_button_name')->nullable();
            $table->text('section_six_second_column_button_link')->nullable();

            $table->string('section_six_third_column_image')->nullable()->comment('image');
            $table->string('section_six_third_column_title')->nullable();
            $table->mediumText('section_six_third_column_description')->nullable();
            $table->string('section_six_third_column_button_name')->nullable();
            $table->text('section_six_third_column_button_link')->nullable();

            $table->string('section_seven_name')->nullable();
            $table->string('section_seven_badge')->nullable();
            $table->string('section_seven_title')->nullable();
            $table->mediumText('section_seven_description')->nullable()->comment('text-editor');
            $table->string('section_seven_button')->nullable();
            $table->text('section_seven_link')->nullable();
            $table->string('section_seven_first_grid_icon')->nullable()->comment('image');
            $table->string('section_seven_first_grid_title')->nullable();
            $table->string('section_seven_first_grid_button_name')->nullable();
            $table->text('section_seven_first_grid_button_link')->nullable();

            $table->string('section_seven_second_grid_icon')->nullable()->comment('image');
            $table->string('section_seven_second_grid_title')->nullable();
            $table->string('section_seven_second_grid_button_name')->nullable();
            $table->text('section_seven_second_grid_button_link')->nullable();

            $table->string('section_seven_third_grid_icon')->nullable()->comment('image');
            $table->string('section_seven_third_grid_title')->nullable();
            $table->string('section_seven_third_grid_button_name')->nullable();
            $table->text('section_seven_third_grid_button_link')->nullable();

            $table->string('section_seven_fourth_grid_icon')->nullable()->comment('image');
            $table->string('section_seven_fourth_grid_title')->nullable();
            $table->string('section_seven_fourth_grid_button_name')->nullable();
            $table->text('section_seven_fourth_grid_button_link')->nullable();

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
        Schema::dropIfExists('home_pages');
    }
};
