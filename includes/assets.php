<?php

function cvd_assets() {
wp_enqueue_style('cvd-style', get_template_directory_uri() . '/css/main.css' , microtime());

}

add_action('wp_enqueue_scripts','cvd_assets');