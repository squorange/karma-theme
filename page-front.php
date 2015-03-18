<?php
/*
Template Name: Front
*/
?>
<?php get_header(); ?>
<!-- Begin front.php template -->
<body id="body--front" <?php body_class(); ?>>
	<?php get_template_part( 'navigation', 'menu' ); ?>

	<div class="header--home">
		
		<div class="row">
			<div class="large-4 medium-4 small-6 columns header__logo">
				<a href="#"><img class="responsive" src="<?php bloginfo('template_directory'); ?>/images/logo-karma-large.png" alt="Karma Rescue" /></a><br />
			</div>
		</div>
		
		<div class="row">
			<div class="large-6 columns">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<?php the_content('Read more on "'.the_title('', '', false).'" &raquo;'); ?>

				<?php endwhile; else: ?>
					<section>
						<article>
							<p>Sorry, no posts matched your criteria.</p>
						</article>
					</section>
				
				<?php endif; ?>
				<!--
				<?php
					// Page title.
					the_title( '<h1>','</h1>' );
				?>
				-->
				<br />
			</div>
		</div>
		
		<div class="row">
      <div class="large-4 medium-4 columns">
				<a href="<?php echo home_url(); ?>/about" class="expand button header__button">Learn More</a>
			</div>
		</div>
		
	</div>
	
	<div class="row">
		<div class="large-3 medium-3 small-6 columns button--icon">
				<a href="<?php echo home_url(); ?>/adopt"><img class="responsive" src="<?php bloginfo('template_directory'); ?>/images/btn-adopt.png" />Adopt</a><br />
		</div>
		<div class="large-3 medium-3 small-6 columns button--icon">
				<a href="<?php echo home_url(); ?>/donate"><img class="responsive" src="<?php bloginfo('template_directory'); ?>/images/btn-donate.png" />Donate</a><br />
		</div>
		<div class="large-3 medium-3 small-6 columns button--icon">
				<a href="<?php echo home_url(); ?>/participate"><img class="responsive" src="<?php bloginfo('template_directory'); ?>/images/btn-participate.png" />Participate</a><br />
		</div>
		<div class="large-3 medium-3 small-6 columns button--icon">
				<a href="<?php echo home_url(); ?>/learn"><img class="responsive" src="<?php bloginfo('template_directory'); ?>/images/btn-learn.png" />Learn</a><br />
		</div>						
	</div>	

	<div class="row">
		<div class="large-8 columns">
			<h3>Featured Story</h3>
			<?php if(function_exists('iinclude_page')) iinclude_page(front_featured_story); ?>			
		</div>
		<div class="large-4 columns">			
			<?php if(function_exists('iinclude_page')) iinclude_page(front_featured_events); ?>	
			<?php if(function_exists('iinclude_page')) iinclude_page(front_adoption_events); ?>
		</div>
	</div>
	
	<div class="l-tails">
		<div class="row">
			<div class="large-12 columns">
				<h3 class="tails--title text--center">Tails of Success</h3>
			</div>
		</div>
		<ul class="tails-orbit" data-orbit>
			<?php if(function_exists('iinclude_page')) iinclude_page(front_tails_success); ?>
		</ul>
	</div>
	
	<div class="l-partners">
		<div class="row">
			<div class="large-12 columns">
				<h3 class="partners--title">Our Partners</h3>
			</div>				
		</div>
		<div class="row">
			<div class="medium-3 small-6 columns">
				<div class="partners--box">
					<a href="http://www.dogswell.com/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/logo-partner-dogswell.png" /></a>
				</div>
			</div>
			<div class="medium-3 small-6 columns">
				<div class="partners--box">
					<a href="http://www.petco.com/petco_Page_PC_petcofoundationhome.aspx" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/logo-partner-petco.png" /></a>
				</div>
			</div>
			<div class="medium-3 small-6 columns">					
				<div class="partners--box">
					<a href="http://nkla.org/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/logo-partner-nkla.png" target="_blank" /></a>
				</div>
			</div>							
			<div class="medium-3 small-6 columns">
				<div class="partners--box">
					<img src="<?php bloginfo('template_directory'); ?>/images/logo-partner-angeldogs.png" />
				</div>
			</div>
			<div class="medium-3 small-6 columns">
				<div class="partners--box">
					<img src="<?php bloginfo('template_directory'); ?>/images/logo-partner-givebones.png" />
				</div>
			</div>
			<div class="medium-3 small-6 columns">
				<div class="partners--box">
					<img src="<?php bloginfo('template_directory'); ?>/images/logo-partner-k9s.png" />
				</div>
			</div>
			<div class="medium-3 small-6 columns">
				<div class="partners--box">
					<img src="<?php bloginfo('template_directory'); ?>/images/logo-partner-pooch.png" />
				</div>
			</div>
			<div class="medium-3 small-6 columns">
				<div class="partners--box">
					&nbsp;
				</div>
			</div>
		</div>		
	</div>
	

	<?php get_footer(); ?>


