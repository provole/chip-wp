<?php
/* Template Name: Contact us */

$context = Timber::get_context();
$context[ "main_menu" ] = new Timber\Menu('main');
$context['page'] = new Timber\Post();
Timber::render('contact-us.twig', $context);