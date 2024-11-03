<section class="section">
    <h3>Election Stories</h3>
    <div class="post-list">
        <?php
        $education_query = new WP_Query(array(
            'category_name' => 'headline',
            'posts_per_page' => 6,
            'orderby' => 'date',
            'order' => 'DESC',
        ));

        if ($education_query->have_posts()) :
            while ($education_query->have_posts()) : $education_query->the_post(); ?>
                <div class="post-item d-flex align-items-start mb-4 p-3 border-bottom">
                    <div class="post-thumbnail mr-3">
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" class="rounded img-fluid" alt="<?php the_title_attribute(); ?>">
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default.jpg" class="rounded img-fluid" alt="Default Image">
                            <?php endif; ?>
                        </a>
                    </div>
                    <div class="post-content flex-grow-1">
                        <a href="<?php the_permalink(); ?>" class="text-dark">
                            <h4 class="post-title mb-1"><?php the_title(); ?></h4>
                        </a>
                        <p class="post-excerpt mb-1"><?php echo wp_trim_words(get_the_content(), 20, '...'); ?></p>
                        <small class="text-muted"><?php echo get_the_date(); ?></small>
                    
                        <span class="badge badge-danger float-right"><?php echo get_comments_number(); ?> </span>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata();
        else : ?>
            <p>No election stories posts available at the moment.</p>
        <?php endif; ?>
    </div>
</section>
