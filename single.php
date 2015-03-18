<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<!-- Begin single.php template -->
<body id="body--dog" <?php body_class(); ?>>
	<?php get_template_part( 'navigation', 'menu' ); ?>
	
	<div class="row dog-profile">
		<div class="columns medium-4">
			<?php the_post_thumbnail('dog'); ?>
			<a href="<?php echo home_url(); ?>/form_meet_and_greet/" class="expand button button--learn button--outline">Sign up to meet &amp; greet</a>
			<a href="<?php echo home_url(); ?>/form_adoption_application/" class="expand button button--donate button--outline">Fill out adoption form</a>
		</div>
		<div class="columns medium-8">
			<h3><?php the_title(); ?></h3>
				<p>
				<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();

						/*
						 * Include the post format-specific template for the content. If you want to
						 * use this in a child theme, then include a file called called content-___.php
						 * (where ___ is the post format) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
						the_content('Read more on "'.the_title('', '', false).'" &raquo;');

					endwhile;
				?>
				</p>
<!--				
				<p>
					Age: <?php echo get_post_meta($post->ID, 'age', true); ?><br />
					Size: <?php echo get_post_meta($post->ID, 'size', true); ?><br />
					Gender: <?php echo get_post_meta($post->ID, 'gender', true); ?><br />
					Good With: <?php echo get_post_meta($post->ID, 'good_with', false); ?><br />
					Acitvity Level: <?php echo get_post_meta($post->ID, 'activity', false); ?><br />
					Training: <?php echo get_post_meta($post->ID, 'training', false); ?>		
				</p>
-->				
			</div>
	</div><!-- .row -->

<?php
get_footer();
?>
