<!DOCTYPE html>
<html id="section1" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=yes">
    <?php wp_head();?>

    <title>test</title>
</head>

<body <?php body_class();?>>
    <div id="header" class="container_header">
        <div id="header" class="header">
            <a href="http://test.local/"><img width='120vw' height='75vh'
                    src="<?=get_template_directory_uri();?>/assets/images/testlogo.png"></a>
            <div class="content">
                <?php wp_nav_menu(array('theme_location' => 'header-menu'), );?>
                <?php get_search_form();?>
            </div>
        </div>
    </div>