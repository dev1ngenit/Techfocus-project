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
            $table->foreignId('brand_id')->nullable()->constrained('brands')->cascadeOnDelete();
            $table->foreignId('category_id')->nullable()->constrained('categories')->cascadeOnDelete();
            $table->foreignId('solution_id')->nullable()->constrained('solution_details')->cascadeOnDelete();
            $table->foreignId('industry_id')->nullable()->constrained('industries')->cascadeOnDelete();
            $table->foreignId('content_id')->nullable()->constrained('news_trends')->cascadeOnDelete();
            $table->string('name')->nullable();
            $table->string('slug')->unique();
            $table->string('image')->comment('image upload');
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->json('meta_tags')->nullable();
            $table->string('meta_image')->nullable()->comment('image upload');
            $table->string('page_name')->nullable();
            $table->string('link')->nullable();
            $table->enum('status', ['active', 'inactive', 'scheduled'])->default('active');
            $table->unsignedInteger('display_order')->default(0);
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
