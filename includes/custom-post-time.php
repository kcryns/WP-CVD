<?php

function cvd_custom_post() {

    $Services_label = array(
        'name'  => __('Services Post' , 'textdomain'),
        'singular_name'  => __('Services Post' , 'textdomain'),
        'add_new'  => __('Add Services Post' , 'textdomain'),
        'add_new_item'  => __('Add New Service' , 'textdomain'),
        'edit_item'  => __('Edit Service Post' , 'textdomain'),
        'all_item'  => __('Services Post' , 'textdomain'),
    );

    $Servicespost_args = array(
        'labels'    => $Services_label,
        'public'    => true,
        'capability_type'    => 'post',
        'show_ui'    => true,
        'taxonomies'    => array('post_tag' , 'category'),
        'supports'    => array('title' , 'editor' , 'thumbnail' , 'excerpt'),

    );

        register_post_type('Servicespost' , $Servicespost_args);

        $LatestTrend_label = array(
            'name'  => __('Latetest Trend Post' , 'textdomain'),
            'singular_name'  => __('Latetest Trend Post' , 'textdomain'),
            'add_new'  => __('Add Latetest Trend Post' , 'textdomain'),
            'add_new_item'  => __('Add New Service' , 'textdomain'),
            'edit_item'  => __('Edit Service Post' , 'textdomain'),
            'all_item'  => __('Latetest Trend Post' , 'textdomain'),
        );
    
        $LatestTrend_args = array(
            'labels'    => $LatestTrend_label,
            'public'    => true,
            'capability_type'    => 'post',
            'show_ui'    => true,
            'taxonomies'    => array('post_tag' , 'category'),
            'supports'    => array('title' , 'editor' , 'thumbnail' , 'excerpt'),
    
        );
    
            register_post_type('LatestTrend' , $LatestTrend_args);    

            $RecentProjects_label = array(
                'name'  => __('Projects Post' , 'textdomain'),
                'singular_name'  => __('Projects Post' , 'textdomain'),
                'add_new'  => __('Add Projects Post' , 'textdomain'),
                'add_new_item'  => __('Add New Project' , 'textdomain'),
                'edit_item'  => __('Edit Project Post' , 'textdomain'),
                'all_item'  => __('Recent Projects Post' , 'textdomain'),
            );
        
            $RecentProjects_args = array(
                'labels'    => $RecentProjects_label,
                'public'    => true,
                'capability_type'    => 'post',
                'show_ui'    => true,
                'taxonomies'    => array('post_tag' , 'category'),
                'supports'    => array('title' , 'editor' , 'thumbnail' , 'excerpt'),
        
            );
        
                register_post_type('RecentProjects' , $RecentProjects_args);    
    
                $RecentPost_label = array(
                    'name'  => __('RecentPost Post' , 'textdomain'),
                    'singular_name'  => __('RecentPost Post' , 'textdomain'),
                    'add_new'  => __('Add RecentPost Post' , 'textdomain'),
                    'add_new_item'  => __('Add New RecentPost' , 'textdomain'),
                    'edit_item'  => __('Edit RecentPost Post' , 'textdomain'),
                    'all_item'  => __('Recent RecentPost Post' , 'textdomain'),
                );
            
                $RecentPost_args = array(
                    'labels'    => $RecentPost_label,
                    'public'    => true,
                    'capability_type'    => 'post',
                    'show_ui'    => true,
                    'taxonomies'    => array('post_tag' , 'category'),
                    'supports'    => array('title' , 'editor' , 'thumbnail' , 'excerpt'),
            
                );
            
                    register_post_type('RecentPost' , $RecentPost_args);   
}
add_action('init' , 'cvd_custom_post');