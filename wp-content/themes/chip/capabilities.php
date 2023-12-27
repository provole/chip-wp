<?php 
/* Template Name:  Capabilities */

$context = Timber::get_context();
$context[ "main_menu" ] = new Timber\Menu('main');
$context['page'] = new Timber\Post();
Timber::render('capabilities.twig', $context);