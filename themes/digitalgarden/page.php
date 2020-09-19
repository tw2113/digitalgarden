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

    <div class="garden-categories">
        <ul class="garden-list">
			<?php wp_list_categories(
				[
					'title_li' => '',
				]
			); ?>
        </ul>
    </div>

	<main id="content" role="main">

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>
            <div <?php post_class( 'plant' ); ?>>
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>

                <?php
                    printf(
                        '<span class="page-modified">Last modified on %s at %s</span>',
						get_the_modified_date(),
						get_the_modified_time()
                    );
                    echo wpautop( 'Categories: ' . get_the_category_list( ', ', '', get_the_ID() ) );
                ?>
            </div>
			<?php endwhile; ?>

		<?php endif; ?>

	</main><!-- #content -->
</section><!-- #primary -->

<?php get_footer(); ?>
