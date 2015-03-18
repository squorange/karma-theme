<?php
/*
Template Name: Donate Detail 10K Paws
*/
?>
<?php get_header(); ?>
<!-- Begin page-donate-detail.php template -->
<body id="body--donate-detail" <?php body_class(); ?>>
	<?php get_template_part( 'navigation', 'menu' ); ?>

	<?php get_template_part( 'page', 'content' ); ?>
	
	<?php get_template_part( 'page', 'donatebutton' ); ?>

	<div class="section--wall-of-paws text--center">
		<div class="row">
			<div class="large-12 columns">
			  <h3 class="donate__featured-title-2">Wall of Paws</h3>
			</div>
		</div>
		<div class="row section--wop-diamond">
			<div class="large-12 columns">
			  <h3>Diamond Donors</h3>
			</div>
			<div class="names__wop">
			<?php if(function_exists('iinclude_page')) iinclude_page(wall_of_paws_diamond); ?>	
			<p>&nbsp;</p>
			</div>
		</div>	
		<div class="row section--wop-platinum">
			<div class="large-12 columns">
			  <h3>Platinum Donors</h3>
			</div>
			<div class="names__wop">			
			<?php if(function_exists('iinclude_page')) iinclude_page(wall_of_paws_platinum); ?>	
			<p>&nbsp;</p>							
			</div>
		</div>	
		<div class="row section--wop-gold">
			<div class="large-12 columns">
			  <h3>Gold Donors</h3>
			</div>	
			<div class="names__wop">
			<?php if(function_exists('iinclude_page')) iinclude_page(wall_of_paws_gold); ?>
			<p>&nbsp;</p>			
			</div>
		</div>	
		<div class="row section--wop-silver row--last">
			<div class="large-12 columns">
			  <h3>Silver Donors</h3>
			</div>	
			<div class="names__wop">
			<?php if(function_exists('iinclude_page')) iinclude_page(wall_of_paws_silver); ?>	
			<p>&nbsp;</p>											
			</div>
	  </div>
	</div>
	
	<?php get_template_part( 'page', 'donatebutton' ); ?>
	

	<?php get_footer(); ?>
	