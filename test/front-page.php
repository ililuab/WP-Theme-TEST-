<?php get_header();?>

<a id="backToTopButton" href="#section1"><i class="fa fa-arrow-up"></i></a>
<div class="spacer"></div>
<div class="fp_outercontainer">
    <div class="fp_innercontainer">
        <div class="container">
            <div class="fp_content">

                <?php
$image = get_field('afbeelding');
$text = get_field('introductie');
if ($image) {
    echo wp_get_attachment_image($image, 'medium');
}
if ($text) {
    the_field('introductie');
}
?>
                <a href="#home_link">
                    <p class="homepage_link">Begin Journey<i class="fa fa-long-arrow-right"></i></p>
                </a>
            </div>
        </div>
    </div>
    <img class="buildings" width="600vw" height="250vh"
        src="<?=get_template_directory_uri();?>/assets/images/building3.png" />
</div>
</div>



<hr />



<!-- Begin Overview Artikel -->
<div id="home_link" class="spacer"></div>
<div id="artikel_content" class="next_content">
    <div class="p1">
        <img id="other" class="projectimg" src="<?=get_template_directory_uri();?>/assets/images/project1.png" />
        <p class="genre">architecture</p>
        <p class="description">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        </p>
        <a href="#A1">
            <p class="artikel">GO TO ARTICLE</p>
        </a>
    </div>
    <div class="p2">
        <img id="other2" class="projectimg" src="<?=get_template_directory_uri();?>/assets/images/project2.png" />
        <p class="genre">art</p>
        <p class="description">
            When an unknown printer took a galley of type and scrambled it to make a
            type specimen book.
        </p>
        <a href="#A2">
            <p class="artikel">GO TO ARTICLE</p>
        </a>
    </div>
    <div class="p3">
        <img id="other3" class="projectimg" src="<?=get_template_directory_uri();?>/assets/images/project3.png" />
        <p class="genre">medieval</p>
        <p class="description">
            It has survived not only five centuries, but also the leap into electronic
            typesetting, remaining essentially unchanged.
        </p>
        <a href="#A3">
            <p class="artikel">GO TO ARTICLE</p>
        </a>
    </div>
</div>
<!-- Einde Overview Artikel -->



<hr>



<!-- Begin Artikel 1 -->
<div id="artikel_inhoud" class="artikel_inhoud">
    <div class="parent_inhoudA1">
        <img width="90vw" height="80vh" class="logo_artikel"
            src="<?=get_template_directory_uri();?>/assets/images/testlogo.png" />
        <p>by Ilias Lugolo Abeli</p>
        <p class="genre2">Architecture</p>
        <p id="A1" class="naam">Modernist and Contemporary</p>
        <p class="description2">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the
            1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        </p>
        <a href="#other">
            <p class="other_article">Read other articles</p>
        </a>
    </div>
    <img class="imgA1" src="<?=get_template_directory_uri();?>/assets/images/project1.png" />
    <div class="parent_inhoudA2">
        <div class="inhoudA2"></div>
    </div>
    <div class="parent_inhoudA3">
        <div class="inhoudA3"></div>
    </div>
</div>
<!-- Einde Artikel 1 -->



<hr>



<!-- Begin Artikel 2 -->
<div id="artikel_inhoud" class="artikel_inhoud">
    <div class="parent_inhoudA1">
        <img width="90vw" height="80vh" class="logo_artikel"
            src="<?=get_template_directory_uri();?>/assets/images/testlogo.png" />
        <p>by Ilias Lugolo Abeli</p>
        <p class="genre2">Art</p>
        <p id="A2" class="naam">House in the desert</p>
        <p class="description2">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the
            1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        </p>
        <a href="#other">
            <p class="other_article">Read other articles</p>
        </a>
    </div>
    <img class="imgA1" src="<?=get_template_directory_uri();?>/assets/images/project2.png" />
    <div class="parent_inhoudA2">
        <div class="inhoudA2"></div>
    </div>
    <div class="parent_inhoudA3">
        <div class="inhoudA3"></div>
    </div>
</div>
<!-- Einde Artikel 2 -->



<hr>



<!-- Begin Artikel 3 -->
<div class="spacer"></div>
<div id="artikel_inhoud" class="artikel_inhoud">
    <div class="parent_inhoudA1">
        <img width="90vw" height="80vh" class="logo_artikel"
            src="<?=get_template_directory_uri();?>/assets/images/testlogo.png" />
        <p>by Ilias Lugolo Abeli</p>
        <p class="genre2">Medieval</p>
        <p id="A3" class="naam">Baroque Achitecture</p>
        <p class="description2">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the
            1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        </p>
        <a href="#other">
            <p class="other_article">Read other articles</p>
        </a>
    </div>
    <img class="imgA1" src="<?=get_template_directory_uri();?>/assets/images/project3.png" />
    <div class="parent_inhoudA2">
        <div class="inhoudA2"></div>
    </div>
    <div class="parent_inhoudA3">
        <div class="inhoudA3"></div>
    </div>
</div>
<div class="spacer"></div>
<!-- Einde Artikel 3 -->



<hr>



<!-- Begin Blog preview -->
<div class="blog_preview_container">
    <p class="blog_preview_text">Blog Preview</p>
    <div class="blog_preview">
        <?php

$the_query = new WP_Query([
    'post_type' => 'post',
    'posts_per_page' => 3,
    'order' => 'ASC',
    'category_name' => 'houses',
]);

if ($the_query->have_posts()):
    while ($the_query->have_posts()): $the_query->the_post();?>
        <div class="post_item_blog_preview">
            <div class="post_title"><?php the_title()?></div>
            <div class="post_description"><?php the_excerpt()?></div>
            <div class="vl"></div>
            <a href="<?=get_the_permalink();?>" class="post_link">Read post</a>

        </div>
        <?php
    endwhile;
    wp_reset_postdata();
else:
endif;
?>
    </div>
</div>
<!-- Einde Blog preview -->



<hr class="hr1">



<!-- Begin FAQ Sectie -->

<div class="FAQ_container">
    <div class="FAQ_content">
        <h1 class="FAQ_header_text">FAQ Questions and Answers</h1>
        <?php
if (have_rows('FAQ')): ?>
        <?php while (have_rows('FAQ')): the_row();?>
        <div class="FAQ_rows">
            <div class="FAQ_vraag"><?php the_sub_field('vraag');?></div>
            <div class="FAQ_antwoord"><?php the_sub_field('antwoord');?><div class="FAQ_author">
                    <p>-Ilias</p>
                </div>
            </div>
            <div class="divideLine"></div>
        </div>
        <?php endwhile;?>
        <?php wp_reset_postdata();?>
        <?php else: ?>
        <p>No FAQ found.</p>
        <?php endif;?>
    </div>
</div>

<!-- Eind FAQ Sectie -->
<hr>
<?php //the_field('video');?>


<div class="contact_container_home">
    <?php echo do_shortcode('[contact-form-7 id="242"]') ?>
</div>



<?php get_footer();?>