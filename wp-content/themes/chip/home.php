<?php

/* Template Name: Work */

$context = Timber::get_context();
$context[ "main_menu" ] = new Timber\Menu('main');

$context['page'] = new TimberPost();

$args = array(
    // Get post type project
    'post_type' => 'post',
    // Get all posts
    'posts_per_page' => -1,
    // Order by post date
    'orderby' => array(
        'date' => 'DESC'
    )
);

Timber::render('work.twig', $context);