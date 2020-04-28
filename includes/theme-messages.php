<?php
function basictheme_messages() {
    $text_theme = [
        'text_category' =>  esc_html__( 'Category: ', 'basictheme' ),
        'read_more'     =>  esc_html__( 'Read more', 'basictheme' )
    ];
    return $text_theme;
}
