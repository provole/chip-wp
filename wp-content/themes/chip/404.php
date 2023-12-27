<?php 
/* Template Name:  404 Page */

$context = Timber::get_context();
$context['page'] = new Timber\Post();
$context[ "main_menu" ] = new Timber\Menu('main');
$context['optionsPage'] = true;
Timber::render('404.twig', $context);