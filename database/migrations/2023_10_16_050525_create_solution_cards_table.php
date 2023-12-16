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
        Schema::create('solution_cards', function (Blueprint $table) {
            $table->id();
            $table->string('badge')->nullable();
            $table->string('title')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->string('image')->nullable();
            $table->string('icon')->nullable();
            $table->mediumText('short_des')->nullable();
            $table->text('link')->nullable();
            $table->string('button_name')->nullable();
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
        Schema::dropIfExists('solution_cards');
    }
};
