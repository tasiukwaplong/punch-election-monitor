<section>
    <div class="row mt-5">
        <div class="col-md-8">
            <?php
            $headline_query = new WP_Query(array(
                'category_name' => 'headline',
                'posts_per_page' => 3
            ));
            
            if ($headline_query->have_posts()) : ?>
                <div id="newsCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <?php for ($i = 0; $i < $headline_query->post_count; $i++) : ?>
                            <li data-target="#newsCarousel" data-slide-to="<?php echo $i; ?>" class="<?php echo $i === 0 ? 'active' : ''; ?>"></li>
                        <?php endfor; ?>
                    </ol>

                    <div class="carousel-inner">
                        <?php
                        $index = 0;
                        while ($headline_query->have_posts()) : $headline_query->the_post();
                        ?>
                            <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                                <div class="row">
                                    <div class="col-8">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <img src="<?php the_post_thumbnail_url('large'); ?>" class="d-block w-100" alt="<?php the_title(); ?>">
                                        <?php else : ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default.jpg" class="d-block w-100" alt="Default Image">
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-4 d-flex flex-column justify-content-center p-4 bg-light">
                                        <span class="badge badge-danger"><?php echo get_the_category()[0]->name; ?></span>
                                        <h5 class="mt-2"><?php the_title(); ?></h5>
                                        <p class="text-muted"><?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?></p>
                                        <p class="text-muted"><?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?></p>
                                        <a href="<?php the_permalink(); ?>" class="btn btn-dark">Read More</a>
                                    </div>
                                </div>
                            </div>
                        <?php
                            $index++;
                        endwhile;
                        wp_reset_postdata();
                        ?>
                    </div>

                    <a class="carousel-control-prev" href="#newsCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#newsCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            <?php else : ?>
                <p>No headlines available.</p>
            <?php endif; ?>
        </div>

        <!-- Advertisement Column -->
        <div class="col-md-4 d-flex align-items-center justify-content-center bg-secondary text-white">
            <div class="text-center p-3">
                <h4>Advertisement</h4>
                <p>Place your ad content here</p>
                <a href="#" class="btn btn-light">Learn More</a>
            </div>
        </div>
    </div>
</section>
