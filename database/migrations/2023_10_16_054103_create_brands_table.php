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
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id')->nullable()->constrained('countries')->cascadeOnDelete();
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->string('logo')->nullable();
            $table->string('website_url')->nullable();
            $table->text('description')->nullable();
            $table->string('category');
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
        Schema::dropIfExists('brands');
    }
};
