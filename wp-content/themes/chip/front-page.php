<?php

$context = Timber::context();

$context[ "page" ] = new Timber\Post();

$context["main_menu"] = new Timber\Menu('main');

Timber::render('index.twig', $context);