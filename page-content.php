<!-- Begin page-content.php -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<?php the_content('Read more on "'.the_title('', '', false).'" &raquo;'); ?>


<?php endwhile; else: ?>
	<section>
		<article>
			<p>Sorry, no posts matched your criteria.</p>
		</article>
	</section>
	
<?php endif; ?>

