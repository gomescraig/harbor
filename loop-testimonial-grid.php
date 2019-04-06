<?php
/**
 * The template for displaying the testimonial loop.
 *
 * @package     Harbor
 * @link        https://themebeans.com/themes/harbor
 */
?>

<article id="testimonial-<?php the_ID(); ?>" <?php post_class( 'masonry-project testimonial' ); ?>>

	 <blockquote>
		  <i class="quote-open"></i>
			<?php echo esc_html( $post->post_content ); ?>
		  <i class="quote-close"></i>
	 </blockquote>

	 <cite>
			<?php the_post_thumbnail(); ?>

			<?php the_title(); ?>
	 </cite>

</article>
