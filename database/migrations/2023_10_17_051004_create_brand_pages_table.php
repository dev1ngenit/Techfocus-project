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
        Schema::create('brand_pages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id')->nullable()->constrained('countries')->cascadeOnUpdate();
            $table->foreignId('brand_id')->nullable()->constrained('brands')->cascadeOnUpdate();
            $table->string('banner_image')->comment('1800*625');
            $table->text('header');
            $table->string('brand_logo')->nullable();
            $table->string('row_six_title')->nullable();
            $table->text('row_six_header')->nullable();
            $table->foreignId('row_four_id')->nullable()->constrained('rows')->cascadeOnUpdate();
            $table->foreignId('row_five_id')->nullable()->constrained('rows')->cascadeOnUpdate();
            $table->foreignId('solution_card_one_id')->nullable()->constrained('solution_cards')->cascadeOnUpdate();
            $table->foreignId('solution_card_two_id')->nullable()->constrained('solution_cards')->cascadeOnUpdate();
            $table->foreignId('solution_card_three_id')->nullable()->constrained('solution_cards')->cascadeOnUpdate();
            $table->string('row_six_image')->comment('1920*1080');
            $table->foreignId('row_seven_id')->nullable()->constrained('rows')->cascadeOnUpdate();
            $table->foreignId('row_eight_id')->nullable()->constrained('rows')->cascadeOnUpdate();
            $table->string('row_one_title')->nullable();
            $table->text('row_one_header')->nullable();
            $table->string('row_nine_title')->nullable();
            $table->text('row_nine_header')->nullable();
            $table->string('added_by')->nullable();
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
        Schema::dropIfExists('brand_pages');
    }
};
