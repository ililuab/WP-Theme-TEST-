<?php get_header();?>
<body class="blog_page_background">
<div class="spacer"></div>

<?php

if (have_posts()):
    while (have_posts()): the_post();?>
		    <div class="post_container_outer">
		    <div class="post_container_inner">
		    <div class="post-thumbnail"><?php the_post_thumbnail('medium')?></div>
		    <div class="post_title"><?php the_title()?></div>
		    <div class="post_description"><?php the_content()?></div>
		    <div class="post_category"><?php the_category()?></div>
		    </div>
		    </div>
		    <?php
    endwhile;
endif;
?>
</body>
<?php get_footer();?>