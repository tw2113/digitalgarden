<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package SemPress
 * @since SemPress 1.0.0
 */

get_header(); ?>

<section id="primary">
	<main id="content" role="main">

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>
            <div <?php post_class(); ?>>
                <h2><a href="<?php echo esc_attr( get_the_permalink() ); ?>"><?php the_title(); ?></a></h2>
            </div>
			<?php endwhile; ?>

		<?php endif; ?>

	</main><!-- #content -->
</section><!-- #primary -->

<?php get_footer(); ?>
