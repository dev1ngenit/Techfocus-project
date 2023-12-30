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
        Schema::create('dynamic_sites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id')->nullable()->constrained('countries')->cascadeOnDelete();
            $table->foreignId('industry_id')->nullable()->constrained('industries')->cascadeOnDelete();
            $table->string('name')->nullable();
            $table->string('slug')->unique();
            $table->string('page_name')->nullable();
            $table->string('url')->nullable();
            $table->string('favicon_icon')->nullable();
            $table->string('logo')->nullable();
            $table->json('category_id')->nullable();
            $table->json('brands')->nullable();
            $table->string('page_name')->nullable();
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
        Schema::dropIfExists('dynamic_sites');
    }
};
