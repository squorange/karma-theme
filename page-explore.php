<?php
/*
Template Name: Explore
*/
?>
<?php get_header(); ?>
<!-- Begin page-explore.php template -->
<body id="body--explore" <?php body_class(); ?>>
	<?php get_template_part( 'navigation', 'menu' ); ?>
	<div class="row l-exploremenu">	
		<?php get_template_part( 'page', 'content' ); ?>
	</div>
	<?php get_footer(); ?>