<?php
/**
 * Template Name: Home
 *
 * A custom page template homepage.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.1
 */

get_header();
get_template_part('partials/_slideshow'); ?>

	<main id="content" role="main">
		<div class="container">
			<div class="row">

				<div class="col-sm-12">
					<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
						<article <?php post_class('page home'); ?> >
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