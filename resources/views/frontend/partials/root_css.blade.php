<style>
    @import url('https://fonts.googleapis.com/css2?family=Arimo:wght@400;500;600;700&family=Raleway&display=swap');
    @import url({{ $dynamic_css->primary_font_url }});
    @import url({{ $dynamic_css->number_font_url }});

    :root {
        /* Main Color */
        --primary-color: {{ $dynamic_css->primary_color }};
        --secondary-color: {{ $dynamic_css->secondary_color }};
        --secondary-bg-color: {{ $dynamic_css->secondary_bg_color }};
        --secondary-deep-color: {{ $dynamic_css->secondary_deep_color }};
        --btn-color: {{ $dynamic_css->btn_color }};
        /* Background Color */
        --main-bg-color: {{ $dynamic_css->main_bg_color }};
        /* Paragraph Color */
        --paragraph-color: {{ $dynamic_css->paragraph_color }};
        --secondary-paragraph-color: {{ $dynamic_css->secondary_paragraph_color }};
        /* Heading Color */
        --heading-color: {{ $dynamic_css->heading_color }};
        /* Default Color */
        --white: {{ $dynamic_css->white }};
        --black: {{ $dynamic_css->black }};
        /*  */
        --secoandaryborder-color: {{ $dynamic_css->secoandaryborder_color }};
        --border-color: {{ $dynamic_css->border_color }};
        --divider-color: {{ $dynamic_css->divider_color }};

        --toggle-color: {{ $dynamic_css->toggle_color }};
        --text-color: {{ $dynamic_css->text_color }};
        --para-color: {{ $dynamic_css->para_color }};
        --custom-shadow: {{ $dynamic_css->custom_shadow }};
        --primary-font: {{ $dynamic_css->primary_font }};
        --number-font: {{ $dynamic_css->number_font }};
        --section-title-font-size: {{ $dynamic_css->section_title_font_size }};
        /*28px*/
        --header-font-size: {{ $dynamic_css->header_font_size }};
        /*18px*/
        --content-title-font-size: {{ $dynamic_css->content_title_font_size }};
        /*24px*/
        --paragraph-font-size: {{ $dynamic_css->paragraph_font_size }};
        /*16px*/
        --badge-font-size: {{ $dynamic_css->badge_font_size }};
        /*20px*/
    }
</style>
