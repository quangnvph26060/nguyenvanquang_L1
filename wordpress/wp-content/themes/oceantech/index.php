<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <?php get_header() ?>
        <?php
        // hiển thị website bán hoa L0 
         is_front_page();
        // hiển thị sidebar
        get_sidebar();
        ?>
    </header>
    <main>
      
        <!-- <?php
        // hiển thị bài post
        require_once get_template_directory() . '/archive.php';
        // Hiển thị trường tùy chỉnh dưới ảnh bài viết color và price
        echo 'Color: ' . get_post_meta(get_the_ID(), 'color', true) . '<br>';
        echo 'Price: ' . get_post_meta(get_the_ID(), 'price', true);
        ?> -->

    </main>
    <footer>
        <?php get_footer() ?>
    </footer>
    <?php wp_footer(); ?>
</body>

</html>