<?php
/*
Template Name: About
*/
?>
<?php get_header(); ?>
<!-- Begin page-about.php template -->
<body id="body--about" <?php body_class(); ?>>
	<?php get_template_part( 'navigation', 'menu' ); ?>

	<div class="header--about">
		<div class="row">
			<div class="large-12 columns">
				<?php if(function_exists('iinclude_page')) iinclude_page(about_header); ?>					
			</div>
	   </div>
	</div>

	<div class="row">
    <div class="large-8 large-offset-2 columns">
    	<div class="about__history-paragraph">
				<?php get_template_part( 'page', 'content' ); ?>
			</div>
	  </div>
	</div>
	
<!--	
	<div class="l-tails">
		<div class="row">
			<div class="large-12 columns">
				<h3 class="tails--center">Tails of Success</h3>
			</div>
		</div>
		<ul class="tails-orbit" data-orbit>
			<?php if(function_exists('iinclude_page')) iinclude_page(front_tails_success); ?>
		</ul>
	</div>
-->
	
	<div class="about__team-members row">
		<?php if(function_exists('iinclude_page')) iinclude_page(about_board); ?>					
	</div>
	
	<div class="about__team-members row">
		<?php if(function_exists('iinclude_page')) iinclude_page(about_advisory); ?>					
	</div>
	
	<div class="about__team-members row  row--last">
		<?php if(function_exists('iinclude_page')) iinclude_page(about_team); ?>					
	</div>

	<?php get_footer(); ?>