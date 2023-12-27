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
        Schema::create('news_trends', function (Blueprint $table) {
            $table->id();
            $table->foreignId('added_by')->nullable()->constrained('admins')->cascadeOnDelete();
            $table->json('category_id')->nullable()->comment('multi_id');
            $table->json('brand_id')->nullable()->comment('multi_id');
            $table->json('industry_id')->nullable()->comment('multi_id');
            $table->json('solution_id')->nullable()->comment('multi_id');
            $table->json('product_id')->nullable()->comment('multi_id');
            $table->enum('featured', ['0', '1'])->default('0')->nullable();
            $table->enum('type', ['news', 'trends','blogs','client_stories','tech_contents'])->default('blogs');
            $table->string('badge', 50)->nullable();
            $table->string('title', 255)->nullable();
            $table->string('slug', 255)->unique();
            $table->text('header')->nullable();
            $table->longText('short_des')->comment('summernote')->nullable();
            $table->longText('long_des')->comment('summernote')->nullable();
            $table->string('author')->nullable();
            $table->text('address')->nullable();
            $table->text('tags')->nullable();
            $table->string('thumbnail_image')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('additional_button_name')->nullable();
            $table->text('additional_url')->nullable();
            $table->string('source_image')->nullable();
            $table->text('source_link')->nullable();
            $table->text('footer')->nullable()->comment('summernote');
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
        Schema::dropIfExists('news_trends');
    }
};
