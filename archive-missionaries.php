<?php
/**
 * Template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<section id="primary">
			<div id="content" role="main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title">Missionaries</h1>
				</header>

				<?php twentyeleven_content_nav( 'nav-above' ); ?>

				<div class="flex-container">

				<?php /* Start the Loop */ ?>
				<?php
				while ( have_posts() ) :
					the_post();

					echo '<h3 class="missionary-listed">
						<a href="' . esc_url( get_permalink() ) . '">';
							the_post_thumbnail( 'category-thumb', array( 'class' => 'rounded shadowed' ) );
							echo '<span class="missionary-name">' . get_the_title() . '</span>
						</a>';

						$wwntbm_field_region = get_post_meta( get_the_ID(), 'Field Region', true );
						$wwntbm_field        = get_post_meta( get_the_ID(), 'Field', true );

					if ( ! empty( $wwntbm_field_region ) ) {
						echo '<span class="field-of-service">' . esc_html( $wwntbm_field_region ) . '</span>';
					} elseif ( ! empty( $wwntbm_field ) ) {
						echo '<span class="field-of-service">' . esc_html( $wwntbm_field ) . '</span>';
					}
					echo '</h3>';

				endwhile;
				?>

				</div>

				<?php twentyeleven_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php esc_html__e( 'Nothing Found', 'twentyeleven' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php esc_html__e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

			</div><!-- #content -->
		</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
