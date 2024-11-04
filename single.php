<?php get_header(); ?>

<main id="main" class="site-main container my-5">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('mb-5'); ?>>

            <!-- Post Header -->
            <header class="entry-header text-center mb-4">
                <h1 class="entry-title display-4"><?php the_title(); ?></h1>
                <div class="entry-meta text-muted">
                    <small>
                        <?php echo get_the_date(); ?> | By <?php the_author(); ?> | In <?php the_category(', '); ?>
                    </small>
                </div>
            </header>

            <!-- Post Thumbnail -->
            <?php if (has_post_thumbnail()) : ?>
                <div class="post-thumbnail text-center mb-4">
                    <?php the_post_thumbnail('large', ['class' => 'img-fluid rounded']); ?>
                </div>
            <?php endif; ?>

            <!-- Post Content -->
            <div class="entry-content">
                <?php the_content(); ?>
            </div>

            <!-- Post Footer -->
            <footer class="entry-footer mt-4">
                <div class="tags mb-3">
                    <?php the_tags('<span class="badge badge-primary mr-1">', '</span><span class="badge badge-primary mr-1">', '</span>'); ?>
                </div>
                <nav class="post-navigation d-flex justify-content-between">
                    <div class="prev-post btn btn-warning"><?php previous_post_link('%link', '← Previous Post'); ?></div>
                    <div class="next-post btn btn-warning"><?php next_post_link('%link', 'Next Post →'); ?></div>
                </nav>
            </footer>

            <!-- Comments Section -->
            <?php if (comments_open() || get_comments_number()) : ?>
                <section class="comments-area mt-5">
                    <?php comments_template(); ?>
                </section>
            <?php endif; ?>
        </article>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
