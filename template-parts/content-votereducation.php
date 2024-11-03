<section class="voter-education">
    <h3>Voter Education</h3>
    <div class="grid">
        <div class="row">

            <?php
            $voter_query = new WP_Query(array(
                'post_type' => 'post',
                'category_name' => 'voter-education',
                'posts_per_page' => 3,
                'orderby' => 'date',
                'order' => 'DESC',
            ));

            // Loop through posts
            if ($voter_query->have_posts()) :
                while ($voter_query->have_posts()) : $voter_query->the_post(); ?>
                
                    <div class="col-md-4">
                        <div class="post-card">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php the_post_thumbnail_url('candidate-thumbnail'); ?>" class="img-fluid" alt="<?php the_title_attribute(); ?>">
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default.jpg" class="img-fluid" alt="Default Image">
                                <?php endif; ?>
                            </a>
                            
                            <div class="post-content">
                                <p><?php echo wp_trim_words(get_the_content(), 10, '...'); ?></p>
                                <small><?php echo get_the_date(); ?></small>
                            </div>
                        </div>
                    </div>

                <?php endwhile;
                wp_reset_postdata();
            else : ?>
                <p>No voter education posts available at the moment.</p>
            <?php endif; ?>

        </div>
    </div>
</section>

