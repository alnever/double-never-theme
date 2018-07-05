<?php get_header() ?>

<div class="container">
    <?php get_sidebar(); ?>
    
    <div class="single-content">
        <?php if (have_posts()) : while(have_posts()): the_post(); ?>
            <div class="article" id="article-<?php the_ID(); ?>">
                <h2>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>
                <?php the_content(); ?>
                <div class="postmetadata">
                    <p>
                        <?php _e("Author", 'double-never-theme'); _e(": ", 'double-never-theme'); the_author_posts_link(); ?> 
                        <?php the_date("Y-m-d","[", "]", true) ?>
                    </p>
                    <p>
                        <?php 
                            if (get_the_category_list(" | ")) {
                                _e("Categories", 'double-never-theme'); _e(": ",'double-never-theme');
                                _e(get_the_category_list(" | "), 'simplenevertheme'); 
                            }
                        ?>
                    </p>
                    <p>
                        <?php if (get_the_tag_list()) {
                                _e("Tags", 'double-never-theme'); _e(": ", 'double-never-theme');
                                _e(get_the_tag_list("", " | "), 'double-never-theme'); 
                              }
                        ?>
                    </p>
                </div>
                <!-- comments -->    
                <?php 
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
                ?>
            </div>
        <?php endwhile; ?>
        <div class="navigation">
            <span class="previous"> <?php previous_post_link(); ?> </span>
            <span class="next"> <?php next_post_link(); ?> </span>
        </div>
        <?php endif; ?>
    </div>
    
    
</div>    

<?php get_footer(); ?>