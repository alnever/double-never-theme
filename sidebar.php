<!-- begin of the sidebar -->
<div class="sidebar">
    <?php
        if (function_exists('the_custom_logo')) {
            the_custom_logo();
        }
    ?>
    
    <div>
        <?php dynamic_sidebar("left_sidebar"); ?>
    </div>
</div>
<!-- end of the sidebar -->