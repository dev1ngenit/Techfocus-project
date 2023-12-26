<?php

use App\Models\Admin\DynamicCss;
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
        Schema::create('dynamic_csses', function (Blueprint $table) {
            $table->id();
            $table->string('primary_color')->nullable();
            $table->string('secondary_color')->nullable();
            $table->string('secondary_bg_color')->nullable();
            $table->string('secondary_deep_color')->nullable();
            $table->string('btn_color')->nullable();
            $table->string('main_bg_color')->nullable();
            $table->string('paragraph_color')->nullable();
            $table->string('secondary_paragraph_color')->nullable();
            $table->string('heading_color')->nullable();
            $table->string('white')->nullable();
            $table->string('black')->nullable();
            $table->string('secoandaryborder_color')->nullable();
            $table->string('border_color')->nullable();
            $table->string('divider_color')->nullable();
            $table->string('toggle_color')->nullable();
            $table->string('text_color')->nullable();
            $table->string('para_color')->nullable();
            $table->string('custom_shadow')->nullable();
            $table->string('primary_font')->nullable();
            $table->string('number_font')->nullable();
            $table->string('section_title_font_size')->nullable();
            $table->string('header_font_size')->nullable();
            $table->string('content_title_font_size')->nullable();
            $table->string('paragraph_font_size')->nullable();
            $table->string('badge_font_size')->nullable();
            $table->text('primary_font_url')->nullable();
            $table->text('number_font_url')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->timestamps();
        });

        DynamicCss::create([
            'primary_color'             => '#38b6ff',
            'secondary_color'           => '#00193d',
            'secondary_bg_color'        => '#f7f6f5',
            'secondary_deep_color'      => '#001430',
            'btn_color'                 => '#004aad',
            'main_bg_color'             => '#f6f6f6',
            'paragraph_color'           => '#8b8888',
            'secondary_paragraph_color' => '#3d3632',
            'heading_color'             => '#00193d',
            'white'                     => '#fff',
            'black'                     => '#000',
            'secoandaryborder_color'    => '#bbbbbb',
            'border_color'              => '#f6eae0',
            'divider_color'             => '#0069bf',
            'toggle_color'              => '#d0d0d0',
            'text_color'                => '#b1afaf',
            'para_color'                => '#8b8888',
            'custom_shadow'             => 'rgba(100, 100, 111, 0.2) 0px 7px 29px 0px',
            'primary_font'              => 'Arimo, sans-serif',
            'number_font'               => 'Poppins, sans-serif',
            'section_title_font_size'   => '1.75rem',
            'header_font_size'          => '1.125rem',
            'content_title_font_size'   => '1.5rem',
            'paragraph_font_size'       => '1rem',
            'badge_font_size'           => '1.25rem',
            'primary_font_url'          => '',
            'number_font_url'           => '',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dynamic_csses');
    }
};
