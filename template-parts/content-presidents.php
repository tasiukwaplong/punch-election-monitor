<section class="candidates">
    <div class="section">
        <h3>Presidential Candidate</h3>
        <div id="candidateCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php
                $candidate_query = new WP_Query(array(
                    'post_type' => 'candidate',
                    'posts_per_page' => -1
                ));
                $total_candidates = $candidate_query->post_count;
                for ($i = 0; $i < ceil($total_candidates / 4); $i++) {
                    echo '<li data-target="#candidateCarousel" data-slide-to="' . $i . '" class="' . ($i === 0 ? 'active' : '') . '"></li>';
                }
                ?>
            </ol>

            <!-- Carousel Content -->
            <div class="carousel-inner">
                <?php if ($candidate_query->have_posts()) :
                    $counter = 0;
                    while ($candidate_query->have_posts()) : $candidate_query->the_post();
                        if ($counter % 4 === 0) :  ?>
                            <div class="carousel-item <?php echo $counter === 0 ? 'active' : ''; ?>">
                                <div class="row">
                        <?php endif; ?>

                        <div class="col-md-3">
                            <?php if (has_post_thumbnail()) : ?>
                              <img src="<?php the_post_thumbnail_url('candidate-thumbnail'); ?>" class="w-100 candidate-img img-fluid rounded" alt="<?php the_title(); ?>">  
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default.jpg" class="w-100 candidate-img img-fluid rounded" alt="Placeholder">
                            <?php endif; ?>
                        </div>

                        <?php
                        $counter++;
                        if ($counter % 4 === 0 || $counter === $total_candidates) : ?>
                                </div>
                            </div>
                        <?php endif;
                    endwhile;
                    wp_reset_postdata();
                endif; ?>
            </div>

            <!-- Carousel Controls -->
            <a class="carousel-control-prev" href="#candidateCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#candidateCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>