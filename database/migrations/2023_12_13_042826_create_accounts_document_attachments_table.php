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
        Schema::create('accounts_document_attachments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('accounts_document_id')->nullable()->constrained('accounts_documents')->cascadeOnDelete();
            $table->string('attachment')->comment('file:image/Docs/PDF');
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
        Schema::dropIfExists('accounts_document_attachments');
    }
};
