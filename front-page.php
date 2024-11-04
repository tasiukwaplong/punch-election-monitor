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

		<?php get_template_part('template-parts/content', 'aside'); ?>

	</div>
	<?php get_template_part('template-parts/content', 'electionstories'); ?>

</section>
<?php get_footer(); ?>