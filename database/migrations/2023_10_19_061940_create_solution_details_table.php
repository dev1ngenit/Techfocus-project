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
        Schema::create('solution_details', function (Blueprint $table) {
            $table->id();
            $table->json('industry_id')->nullable()->comment('multi_id');
            $table->string('name')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->text('header')->nullable();
            $table->string('banner_image')->nullable();
            $table->foreignId('row_one_id')->nullable()->constrained('rows')->cascadeOnDelete();
            $table->string('row_two_title')->nullable();
            $table->text('row_two_header')->nullable();
            $table->string('row_three_title')->nullable();
            $table->text('row_three_header')->nullable();
            $table->foreignId('row_four_id')->nullable()->constrained('rows')->cascadeOnDelete();
            $table->string('row_five_title')->nullable();
            $table->text('row_five_header')->nullable();
            $table->foreignId('solution_card_one_id')->nullable()->constrained('solution_cards')->cascadeOnDelete();
            $table->foreignId('solution_card_two_id')->nullable()->constrained('solution_cards')->cascadeOnDelete();
            $table->foreignId('solution_card_three_id')->nullable()->constrained('solution_cards')->cascadeOnDelete();
            $table->foreignId('solution_card_four_id')->nullable()->constrained('solution_cards')->cascadeOnDelete();
            $table->foreignId('solution_card_five_id')->nullable()->constrained('solution_cards')->cascadeOnDelete();
            $table->foreignId('solution_card_six_id')->nullable()->constrained('solution_cards')->cascadeOnDelete();
            $table->foreignId('solution_card_seven_id')->nullable()->constrained('solution_cards')->cascadeOnDelete();
            $table->foreignId('solution_card_eight_id')->nullable()->constrained('solution_cards')->cascadeOnDelete();
            $table->string('added_by')->nullable();
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
        Schema::dropIfExists('solution_details');
    }
};
