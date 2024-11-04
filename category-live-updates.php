<?php get_header(); ?>


<section>
	<div class="layout section">

		<div class="main-content">			
            <!-- live update starts -->
	        <?php get_template_part('template-parts/content', 'presidents'); ?>
             
        <section class="section">
            <h4 class='text-danger'>Live Updates</h4>
            <div class="row">
                <div class="col-md-12 row">
                    <?php
                    $news_query = new WP_Query(array(
                        'category_name' => 'live-updates',
                        'orderby' => 'date',
                        'order' => 'DESC',
                    ));

                    if ($news_query->have_posts()) :
                        while ($news_query->have_posts()) : $news_query->the_post(); ?>
                            <div class="col-md-2">
                                <small class="text-muted">
                                    <?php 
                                    $time_difference = human_time_diff(get_the_time('U'), current_time('timestamp'));
                                    echo $time_difference . ' ago'; 
                                    ?>
                                </small>
                            </div>
                            <div class="col-md-10 border-left border-bottom pt-3 text-decoration-none">
                                
                                <h6><?php the_title(); ?></h6>
                                <small class="text-muted">By <?php the_author(); ?></small>
                                <p>
                                    <?php echo wp_trim_words(get_the_content(), 20, '...'); ?>
                                    <a href="<?php the_permalink();?>" class="text-decoration-none">read more</a>
                                </p>
                                
                            </div>
                        <?php endwhile;
                        wp_reset_postdata();
                    else : ?>
                        <p>No live updates available at the moment.</p>
                    <?php endif; ?>
                </div>

                <!-- <div class="col-md-3 bg-dark">
                    Twitter feeds
                </div> -->
            </div>
        </section>
                    <!-- live update stops -->
                </div>
                
                <?php get_template_part('template-parts/content', 'aside'); ?>
                
            </div>

        </section>
<?php get_footer(); ?>