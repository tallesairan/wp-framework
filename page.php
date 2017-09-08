<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the wordpress construct of pages
 * and that other 'pages' on your wordpress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.1
 */

get_header(); ?>

	<main id="content" role="main">
		<div class="container">
			<div class="row">

				<div class="col-sm-12">
					<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
						<article <?php post_class('page'); ?> >
							<header class="page-title">
								<h1><?php the_title(); ?></h1>
							</header>

							<div class="page-content">
								<?php the_content(); ?>
							</div>

							<footer>
								<?php comments_template( '', true ); ?>
							</footer>

						</article>
					<?php endwhile; ?>
				</div>

			</div>
		</div>
	</main>

<?php get_footer(); ?>