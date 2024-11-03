<section class="section">
    <h3>Education Posts</h3>
    <div class="row">
        <?php
        // Query for posts in the 'education' category
        $education_query = new WP_Query(array(
            'category_name' => 'video', // Use the slug of the 'education' category
            'posts_per_page' => 4,          // Display 4 posts: one main, three smaller
            'orderby' => 'date',
            'order' => 'DESC',
        ));

        if ($education_query->have_posts()) :
            // Display the first post as the main large post
            $education_query->the_post();
            ?>
            <div class="col-md-6">
                <div class="post-card card mb-3">
                    <a href="<?php the_permalink(); ?>">
                       
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/video.png" class="card-img-top" alt="Default Image">
                       
                    </a>
                    <div class="card-body">
                        <a href="<?php the_permalink(); ?>">
                            <h4 class="card-title"><?php the_title(); ?></h4>
                        </a>
                        <p class="card-text"><?php echo wp_trim_words(get_the_content(), 10, '...'); ?></p>
                        <small class="text-muted"><?php echo get_the_date(); ?></small>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="row">
                    <?php
                    // Display the next three posts as smaller cards
                    while ($education_query->have_posts()) : $education_query->the_post(); ?>
                        <div class="col-md-12 mb-3">
                            <div class="post-card card">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        <a href="<?php the_permalink(); ?>">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/video.png" class="card-img" alt="Default Image">
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <a href="<?php the_permalink(); ?>">
                                                <h6 class="card-title"><?php the_title(); ?></h6>
                                            </a>
                                            <!-- <p class="card-text"><?php echo wp_trim_words(get_the_content(), 10, '...'); ?></p> -->
                                            <small class="text-muted"><?php echo get_the_date(); ?></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php else : ?>
            <p>No education posts available at the moment.</p>
        <?php endif;

        wp_reset_postdata();
        ?>
    </div>
</section>
