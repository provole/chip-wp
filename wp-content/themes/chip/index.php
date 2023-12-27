<?php 


$context = Timber::context();
$context['page'] = new TimberPost();

$context[ "main_menu" ] = new Timber\Menu('main');

Timber::render('index.twig', $context);