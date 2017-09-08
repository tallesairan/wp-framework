<?php
/**
 * The Template for displaying all single posts.
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
					<?php if (have_posts()): while (have_posts()) : the_post(); ?>
						<article <?php post_class('page single'); ?>>
							<figure>
								<?php the_post_thumbnail( 'post-thumb', array( 'class' => 'img-responsive' ) ); ?>
							</figure>
							<?php the_title('<h2>', '</h2>'); ?>

							<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
							<span class="author"><?php _e( 'Publicado por', 'angolanos' ); ?> <?php the_author_posts_link(); ?></span>
							<span class="comments"><?php comments_number( '0 comentário', '1 comentário', '% comentários' ); ?></span>

							<?php the_content(); ?>

							<?php the_tags( __( 'Tags: ', 'angolanos' ), ', ', '<br>'); ?>
							<p><?php the_category(', '); ?></p>
							<p><?php the_author(); ?></p>

							<footer>
								<?php comments_template( '', true ); ?>
							</footer>
						</article>

					<?php endwhile;  else: ?>
						<article><h3><?php _e( 'Desculpe, nenhum post encontrado.', 'angolanos' ); ?></h3></article>
					<?php endif; ?>
				</div>

				<?php get_sidebar(); ?>

			</div>
		</div>
	</main>

<?php get_footer(); ?>