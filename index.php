<?php get_header(); ?>

<!-- container start -->
<div class="container">
    <?php get_sidebar(); ?>
    
        <!-- the cycle -->
        <?php if (have_posts()) : $i = 0; ?>
            <!-- content start -->
            <div class="content">
                <?php while(have_posts()): the_post(); ?>
                    <!-- start post record -->
                    <div class="entry <?php $i % 2 == 0? _e('left-column') : _e('right-column'); ?>" id="entry-<?php the_ID(); ?>">
                        <h2>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        <?php the_post_thumbnail(); ?>
                        <?php the_excerpt(); ?>
                        <div class="postmetadata">
                            <p><?php _e("Author", 'double-never-theme'); _e(": "); the_author_posts_link(); ?> <?php the_date("Y-m-d","[", "]", true) ?></p>
                        </div>
                    </div>
                    <!-- end post -->
                    <?php $i++; ?>
                <?php endwhile; ?>
            </div>
            <!-- content end -->
        <?php endif; ?>
        <div class="navigation">
                <p><?php posts_nav_link(); ?></p>
        </div>
</div>    
<!-- container end -->

<?php get_footer(); ?>