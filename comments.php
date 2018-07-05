<?php 
    if (post_password_required())
        return;
?>

<div id="comments" class="comments-area">
<?php if ( have_comments() ): ?>
    <h4 class="comments-title">
        <?php 
            printf(__('Comments: %1$s','double-never-theme' ),
                    number_format_i18n( get_comments_number() )
                  );
        ?>
    </h4>
    
    <!-- start comment list -->
    <ul class="comment-list">
      <?php
        wp_list_comments (
            array(
                'style' => 'ul',
                'short_ping' => true,
                'avatar_size' => 50,
                'max_depth' => 10
            )
        );
      ?>
    </ul>
    <!-- end comment list -->
    
    <!-- comments pagination -->
    <?php 
        if (get_comment_pages_count() > 1 && get_option('page_comments')):
    ?>
        <nav class="navigation comment-navigation" role="navigation">
            <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'double-never-theme' ) ); ?></div>
            <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'double-never-theme' ) ); ?></div>
        </nav>
    <?php endif; ?>
    <!-- end comments pagination -->
    
    <!-- no comments -->
    <?php if ( ! comments_open() && get_comments_number() ) : ?>
        <p class="no-comments"><?php _e( 'Comments are closed.' , 'double-never-theme' ); ?></p>
    <?php endif; ?>    
    
<?php endif; ?>
    
<!-- comments form -->
<?php comment_form(); ?>
</div>