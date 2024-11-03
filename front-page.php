<?php get_header(); ?>
<!-- headline seection -->
<?php get_template_part('template-parts/content', 'headline'); ?>
<!-- presidential candidate section -->
<?php get_template_part('template-parts/content', 'presidents'); ?>

<section>
	<div class="layout section">

		<div class="main-content">			
			<!-- Voter education -->
			 <?php get_template_part('template-parts/content', 'votereducation'); ?>
			 <!-- Video Posts -->
			  <?php get_template_part('template-parts/content', 'video'); ?>
		</div>
		
		<aside class="sidebar">
			<!-- Newsletter Signup -->
			<div class="newsletter">
				<h4>Weekly Newsletter</h4>
				<p>Subscribe to stay up-to-date on all the latest news</p>
				<form>
					<input type="email" placeholder="Email" required>
					<button type="submit">Sign Up</button>
				</form>
			</div>
			<!-- Advertisement -->
			 <div class="ad">
				<img src="<?php echo get_template_directory_uri();?>/assets/images/ad.png" alt="Advertisement" style="width: 100%;">
			</div>
		</aside>

	</div>
</section>
