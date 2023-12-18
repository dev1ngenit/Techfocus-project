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
        Schema::create('industries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parent_id')->nullable()->constrained('industries')->cascadeOnDelete();
            $table->string('name')->nullable();
            $table->string('slug')->unique();
            $table->string('logo')->nullable();
            $table->string('image')->nullable();
            $table->string('banner_image')->nullable();
            $table->text('description')->nullable();
            $table->text('website_url')->nullable();
            $table->foreignId('row_one_id')->nullable()->constrained('rows')->cascadeOnUpdate();
            $table->foreignId('row_three_id')->nullable()->constrained('rows')->cascadeOnUpdate();
            $table->foreignId('row_five_id')->nullable()->constrained('rows')->cascadeOnUpdate();
            $table->foreignId('solution_one_id')->nullable()->constrained('solution_details')->cascadeOnUpdate();
            $table->foreignId('solution_two_id')->nullable()->constrained('solution_details')->cascadeOnUpdate();
            $table->foreignId('solution_three_id')->nullable()->constrained('solution_details')->cascadeOnUpdate();
            $table->foreignId('solution_four_id')->nullable()->constrained('solution_details')->cascadeOnUpdate();
            $table->foreignId('client_story_id')->nullable()->constrained('news_trends')->cascadeOnUpdate();
            $table->text('header')->nullable();
            $table->string('row_four_title')->nullable();
            $table->text('row_four_header')->nullable();
            $table->string('row_four_col_one_title')->nullable();
            $table->text('row_four_col_one_header')->nullable();
            $table->string('row_four_col_one_button_name')->nullable();
            $table->text('row_four_col_one_button_link')->nullable();
            $table->string('row_four_col_two_title')->nullable();
            $table->text('row_four_col_two_header')->nullable();
            $table->string('row_four_col_two_button_name')->nullable();
            $table->text('row_four_col_two_button_link')->nullable();
            $table->string('footer_title')->nullable();
            $table->text('footer_header')->nullable();
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
        Schema::dropIfExists('industries');
    }
};
