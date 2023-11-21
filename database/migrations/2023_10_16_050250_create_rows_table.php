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
        Schema::create('rows', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id')->nullable()->constrained('countries')->cascadeOnDelete();
            $table->string('badge')->nullable();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('image')->comment('580*383')->nullable();
            $table->mediumText('short_des')->nullable();
            $table->string('btn_name')->nullable();
            $table->string('link')->nullable();
            $table->string('list_title')->nullable();
            $table->string('list_one')->nullable();
            $table->string('list_two')->nullable();
            $table->string('list_three')->nullable();
            $table->string('list_four')->nullable();
            $table->longText('description')->nullable();
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
        Schema::dropIfExists('rows');
    }
};
