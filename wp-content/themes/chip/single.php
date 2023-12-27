<?php
// single.php, see connected twig example
$context = Timber::context();
$context['page'] = new Timber\Post(); // It's a new Timber\Post object, but an existing post from WordPress.
$context['photos'] = get_field('gallery');
$context['post'] = new Timber\Post();

$post = new TimberPost();

$next = $post->next ?: Timber::get_posts( ['posts_per_page' => 1, 'order' => 'ASC'] )[0];
$prev = $post->prev ?: Timber::get_posts( ['posts_per_page' => 1, 'order' => 'DESC'] )[0];

$context['page'] = $post;
$context['next'] = $next;
$context['prev'] = $prev;

$context[ "main_menu" ] = new Timber\Menu('main');
Timber::render('single.twig', $context);
?>