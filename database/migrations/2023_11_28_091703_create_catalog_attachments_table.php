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
        Schema::create('catalog_attachments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('catalog_id')->nullable()->constrained('catalogs')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('page_image')->nullable()->comment('image');
            $table->text('page_description')->nullable();
            $table->string('page_link')->nullable();
            $table->string('button_name')->nullable();
            $table->string('button_link')->nullable();
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
        Schema::dropIfExists('catalog_attachments');
    }
};
