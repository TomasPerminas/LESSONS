<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lesson
 */

get_header();

$query = new WP_Query(array(
	'post_type' => 'merchandises'
));


?>

<main id="primary" class="site-main">

	<?php
        if($query->have_posts()){
            while($query->have_posts()){
                $query->the_post();
            echo '<h2>'.get_field('Name',get_the_ID()).'</h2>';
            echo '<h2>'.get_field('Price',get_the_ID()).'</h2>';
            }
        }
	?>

</main><!-- #main -->

<?php
get_footer();
