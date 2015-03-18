<?php
/*
Template Name: Participate
*/
?>
<?php get_header(); ?>
<!-- Begin page-donate.php template -->
<body id="body--donate" <?php body_class(); ?>>
	<?php get_template_part( 'navigation', 'menu' ); ?>

	<div class="header--donate">
		<div class="row">
			<div class="large-12 columns">
				<?php if(function_exists('iinclude_page')) iinclude_page(participate_header); ?>					
			</div>
	   </div>
	</div>
	
	<div class="row">
      <div class="large-12 columns">
	      	<div class="donate__blurb">
	        	<p>
						<?php if(function_exists('iinclude_page')) iinclude_page(participate_blurb); ?>												
						</p>
					</div>
	  </div>
	</div>
		
	<?php get_template_part( 'page', 'content' ); ?>

	<?php get_footer(); ?>