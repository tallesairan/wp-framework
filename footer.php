<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.1
 */
?>

	<footer id="footer" role="contentinfo">
		<div class="container">
			<a id="logotipo" class="logotipo logotipo-rodape" href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<img src="<?php echo get_field('logotipo_rodape', get_option( 'page_on_front' )); ?>" class="img-fluid" />
			</a>
			<p> © Copyright <?php echo date('Y') ?> - <?php bloginfo('name'); ?> - Todos direitos reservados</p>
			<?php get_template_part('partials/_assinatura-bfriend') ?>
		</div>
	</footer>

<?php wp_footer(); ?>
</body>
</html>