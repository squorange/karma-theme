<?php
/*
Template Name: Adopt
*/
?>
<?php get_header(); ?>
<!-- Begin page-adopt.php template -->
<body id="body--adopt" <?php body_class(); ?>>
	<?php get_template_part( 'navigation', 'menu' ); ?>

	<div class="header--adopt">
		<div class="row">
			<div class="large-12 columns">
				<h1 class="header__mainmessage header__mainmessage-adopt">Find the dog that's right for you</h1>
			</div>
			<div class="large-4 medium-4 columns">
					<a href="<?php echo home_url(); ?>/form_meet_and_greet/" class="expand button header__button">Sign up to Meet &amp; Greet</a>
			</div>
			<div class="large-4 medium-4 columns">
					<a href="<?php echo home_url(); ?>/form_adoption_application/" class="expand button header__button">Fill out adoption form</a>
			</div>
			<div class="large-4 medium-4 columns">
					<a href="<?php echo home_url(); ?>/adoption-schedule/" class="expand button header__button">Attend adoption events</a>
			</div>		
		</div>
	</div>
	
	<div class="l-dogselector">
		<div class="row">
			<div id="placeholder"></div>
		</div>
	</div>
	<div class="row">
		<div class="large-12 columns dog-gallery__filter">	
				<div id="legend"></div><br /><br />	
		</div>
		

		<div id="container">
				<?php
				$args = array(
					'post_type' => 'adoptable_dogs',
					'nopaging' => true
				);
		
				$the_query = new WP_Query( $args );
						
				while ( $the_query->have_posts() ) : $i++;
				$the_query->the_post(); ?>
					<div class="large-3 medium-4 small-6 columns dog-gallery__item dog"			
	data-age="<?php echo implode(', ', get_field('age')); ?>" 	
	data-size="<?php echo implode(', ', get_field('size')); ?>" 
	data-gender="<?php echo implode(', ', get_field('gender')); ?>" 
	data-good-with="<?php echo implode(', ', get_field('good_with')); ?>" 
	data-activity="<?php echo implode(', ', get_field('activity')); ?>">				
							
							<a class="dog__block" href="<?php the_permalink(); ?>">
								<div class="dog-image">
									<?php the_post_thumbnail('dog'); ?>
								</div>			
								<div class="dog__label">
									<span class="dog__name"><?php the_title(); ?></span><br />
									<span class="dog__description"><?php echo get_the_excerpt(); ?></span>											
								</div>
							</a>
					</div>
		
				<?php endwhile; wp_reset_postdata(); ?>	
			<div class="small-12 columns">
				<br /><br />
			</div>
		</div>
		
	</div>

	<script>
	jQuery(document).ready(function($){
	     $.filtrify("container", "placeholder", {
	     	close : true,
	     	callback : function( query, match, mismatch ) {
	     	           if ( !mismatch.length ) {
	     	               $("#legend").html(" ");
	     	           } else {
	     	               var category, tags, i, tag, legend = "<h4>Currently filtered by:</h4>";
	     	               for ( category in query ) {
	     	                   tags = query[category];
	     	                   if ( tags.length ) {
	     	                       legend += "";
	     	                       for ( i = 0; i < tags.length; i++ ) {
	     	                           tag = tags[i];
	     	                           legend += "" + tag + "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	     	                       };
	     	                       legend += " ";
	     	                   };
	     	               };
	     	               $("#legend").html( legend );
	     	           };
	     	       }
	     });
	});
	</script>	

	<?php get_footer(); ?>