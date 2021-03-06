<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.1
 */

get_header(); ?>

	<main id="content" role="main">
		<div class="container">
			<div class="row">

				<div class="col-sm-8">
					<article <?php post_class('page category'); ?> >
						<h1><?php printf( __( 'Categoria: %s', 'twentyten' ), '' . single_cat_title( '', false ) . '' ); ?></h1>

						<?php if ( have_posts() ): while( have_posts() ): the_post(); ?>
							<article <?php post_class(); ?>>
								<?php the_title(); ?>
							</article>
						<?php endwhile;  else: ?>
							<h2>Nenhum post encontrado.</h2>
						<?php endif; ?>
					</article>
				</div>

				<?php get_sidebar(); ?>

			</div>
		</div>
	</main>

<?php get_footer(); ?>