<?php get_header();?>

<body class="blog_page_background">
<div class="spacer"></div>
<div class="post_page_container">
<div class="sidebar_blog">
<p class="filterby">Filter by: </p>
<a class="filter" href="/index.php?cat=4">Buildings</a>
<a class="filter" href="/index.php?cat=7">Garden</a>
<a class="filter" href="/index.php?cat=5">Houses</a>
</div>
<div class="post_page">
    <?php
    $cat = get_the_category();
    $cat_name = $cat[0]->name;

    $the_query = new WP_Query([
        'post_type' => 'post',
        'posts_per_page' => 8,
        'order' => 'ASC',
        'category_name' => $cat_name,
        'paged' => get_query_var('paged')
    ]);

if ($the_query->have_posts()):
    while ($the_query->have_posts()): $the_query->the_post();?>
		                <div class="post_item">
		                <div class="post_title"><?php the_title()?></div>
		                <div class="post_description"><?php the_excerpt()?></div>
		                <a href="<?=get_the_permalink();?>" class="post_link">Read post</a>
		                <div class="divideLine"></div>
		        </div>
		    <?php
    endwhile;
    the_posts_pagination();
else:
endif;
?>
</div>
</div>
</body>
<?php get_footer();?>