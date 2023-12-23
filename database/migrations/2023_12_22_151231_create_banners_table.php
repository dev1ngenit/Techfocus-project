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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('category')->nullable();
            $table->foreignId('brand_id')->nullable()->constrained('brands')->cascadeOnDelete();
            $table->foreignId('category_id')->nullable()->constrained('categories')->cascadeOnDelete();
            $table->foreignId('product_id')->nullable()->constrained('products')->cascadeOnDelete();
            $table->foreignId('solution_id')->nullable()->constrained('solution_details')->cascadeOnDelete();
            $table->foreignId('industry_id')->nullable()->constrained('industries')->cascadeOnDelete();
            $table->foreignId('content_id')->nullable()->constrained('news_trends')->cascadeOnDelete();
            $table->string('page_name')->nullable();
            $table->string('banner_one_name')->nullable();
            $table->string('banner_two_name')->nullable();
            $table->string('banner_three_name')->nullable();
            $table->string('banner_one_slug')->unique()->nullable();
            $table->string('banner_two_slug')->unique()->nullable();
            $table->string('banner_three_slug')->unique()->nullable();
            $table->string('banner_one_image')->comment('image upload');
            $table->string('banner_two_image')->comment('image upload');
            $table->string('banner_three_image')->comment('image upload');
            $table->string('banner_one_link')->nullable();
            $table->string('banner_two_link')->nullable();
            $table->string('banner_three_link')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->json('meta_tags')->nullable();
            $table->string('meta_image')->nullable()->comment('image upload');
            $table->enum('status', ['active', 'inactive', 'scheduled'])->default('active');
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
        Schema::dropIfExists('banners');
    }
};
