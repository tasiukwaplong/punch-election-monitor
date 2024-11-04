<?php get_header(); ?>

<section class="news-highlight-section py-4">
    <div class="container">
        
        <div class="row align-items-center bg-light shadow-sm rounded">

            <?php
            $args = array(
                'category_name' => 'video',
                'posts_per_page' => 1,
            );
            $highlight_query = new WP_Query($args);

            if ($highlight_query->have_posts()) :
                while ($highlight_query->have_posts()) : $highlight_query->the_post();
            ?>
            
            <!-- Red line on the left side -->
            <div class="col-md-1 d-none d-md-block">
                <div class="h-100" style="background-color: #e53935; width: 4px;"></div>
            </div>
            
            <!-- Image section -->
            <div class="col-md-4 p-0">
                <a href="<?php the_permalink(); ?>">
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid w-100 h-100 rounded-left">
                    <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/video.png" alt="Default Image" class="img-fluid w-100 h-100 rounded-left">
                    <?php endif; ?>
                </a>
            </div>

            <!-- Content section -->
            <div class="col-md-7 p-4">
                <h5 class="font-weight-bold"><?php the_title(); ?></h5>
                <small class="text-muted"><?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?></small>
                <div class="mt-3">
                    <a href="<?php the_permalink(); ?>" class="btn btn-dark rounded-pill px-4">Watch</a>
                </div>
            </div>

            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
            <div class="col-md-12">
	        <?php get_template_part('template-parts/content', 'presidents'); ?>
            </div>

            <div class="col-md-12">
	        <?php get_template_part('template-parts/content', 'video'); ?>
            </div>
        </div>
    </div>
    
</section>

<section class="news-list-section py-4">
    <h5>Videos</h5>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <?php
                    $args = array(
                        'category_name' => 'video',
                        'offset' => 1,
                    );
                    $posts_query = new WP_Query($args);

                    if ($posts_query->have_posts()) :
                        while ($posts_query->have_posts()) : $posts_query->the_post();
                    ?>

                    <div class="col-md-12 post-item d-flex align-items-start mb-4 p-3 border-bottom">
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

                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                    ?>
                        <p class="text-center">No additional posts found in the 'election-2023' category.</p>
                    <?php
                    endif;
                    ?>
                </div>
            </div>
            <div class="col-md-4">
                <?php get_template_part('template-parts/content', 'aside'); ?>
            </div>
            
        </div>
        
    </div>
    
</section>