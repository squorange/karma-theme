<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>
<!-- Begin page-learn.php template -->
<body id="body--learn" <?php body_class(); ?>>
	<?php get_template_part( 'navigation', 'menu' ); ?>

	<div class="header--donate">
		<div class="row">
			<div class="large-12 columns">
				<?php if(function_exists('iinclude_page')) iinclude_page(contact_header); ?>					
			</div>
	   </div>
	</div>
		
	<?php get_template_part( 'page', 'content' ); ?>

	<?php get_footer(); ?>