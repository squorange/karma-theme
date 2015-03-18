<?php
/*
Template Name: Default
*/
?>
<?php get_header(); ?>
<!-- Begin page-default.php template -->
<body id="body" <?php body_class(); ?>>
	<?php get_template_part( 'navigation', 'menu' ); ?>

	<div class="row row--default">
      <div class="large-8 large-offset-2 columns">
				<?php get_template_part( 'page', 'content' ); ?>
			</div>
	</div>

	<?php get_footer(); ?>