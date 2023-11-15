<!-- <?php
        wp_nav_menu(array(
            'theme_location' => 'primary-menu',
            'menu_class' => 'navigation-menu',
        ));
        // Trong header.php
        echo '<div class="my-plugin-content">';
        // get_product_woo();
        get_product_woo_new();
        echo '</div>';
        ?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>


    <?php wp_head(); ?>
</head>

<body>
    <div class="banner">
        <div class="menu">

            <div class="menu_navbar" style="margin-top: 10px;">
                <label class="logo">
                    <img src="<?php echo get_theme_file_uri() . '/images/background-remover (1)/logo.png' ?>" alt="" width="48px">
                    <strong>Go<span style="color: #D16B7D;">grin</span>.</strong>
                </label>
            </div>

            <div class="menu_navbar">
                <div>
                    <label for="checks" class="checkbtn1 iconcart">
                        <a href="#">
                            <i class="fas fa-search"></i>
                        </a>
                        <div class="cart-icon">
                            <a href="cart.html">
                                <i class="fas fa-cart-plus sign-giohang"></i>
                                <span class="item-count" id="count">0</span>
                            </a>
                        </div>
                    </label>
                    <input type="checkbox" id="check">
                    <label for="check" class="checkbtn">
                        <i class="fas fa-bars"></i>
                    </label>

                    <!-- <ul>
                        <li><a href="trangchu.html" class="active">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Service</a></li>
                        <li><a href="listproduct.html">Shop</a></li>
                        <li><a href="">Pages</a></li>
                        <li><a href="">Blog</a></li>
                        <li><a href="about.html">Contact</a></li>

                    </ul> -->
                    <?php
                    // menu
                    wp_nav_menu(array(
                        'theme_location' => 'primary-menu',
                        'menu_class' => 'navigation-menu',
                    ));

                    ?>
                </div>

            </div>
            <div class="menu_navbar unmenu" style="margin-top: 20px;">
                <div class="menu_navbar_right">
                    <div class="search-form" id="search-form">
                        <?php get_search_form(); ?>
                    </div>
                    <a href="#"> <i class="fas fa-search sign-kinhlup"></i></a>
                    <div class="cart-icon">
                        <a href="cart.html">
                            <i class="fas fa-cart-plus sign-giohang"></i>
                            <span class="item-count" id="count">0</span></a>
                    </div>
                    <button class="sign-button">24/7 Help</button>
                </div>
            </div>
        </div>


        <!-- slider -->
        <div class="slider">
            <div class="myslide fade">
                <div class="txt">
                    <h1>
                        <strong style="color: #333333;text-shadow: 4px -1px 0px #D16B7D;">F</strong><strong style="color: #D16B7D;text-shadow: 4px -1px 0px #333333;">L</strong><strong style="color: #333333;text-shadow: 4px -1px 0px #D16B7D;">O</strong><strong style="color: #D16B7D;text-shadow: 4px -1px 0px #333333;">W</strong style="color: #333333;text-shadow: 4px -1px 0px #D16B7D;"><strong style="color: #333333;text-shadow: 4px -1px 0px #D16B7D;">E</strong><strong style="color: #D16B7D;text-shadow: 4px -1px 0px #333333;">R</strong><strong style="color: #333333;text-shadow: 4px -1px 0px #D16B7D;">S</strong>
                    </h1>
                    <h1>
                        <strong style="font-weight: lighter;color: #333333;text-shadow: 4px -1px 0px #D16B7D;">S</strong><strong style="font-weight: lighter;color: #D16B7D;text-shadow: 4px -1px 0px #333333;">H</strong><strong style="font-weight: lighter;color: #333333;text-shadow: 4px -1px 0px #D16B7D;">O</strong><strong style="font-weight: lighter;color: #D16B7D;text-shadow: 4px -1px 0px #333333;">P</strong>
                    </h1>
                    <p>Your attitude will go a long way in determining your success , your recognition, <br>
                        your reputation Your attitude</p>
                    <button class="sign-button2">Know More</button> <button class="sign-button2">About US</button>

                </div>
                <div class="img">
                    <img src="<?php echo get_theme_file_uri() . '/images/background-remover/lohoa.png' ?>" alt="" width="1000px" height="490">
                </div>
            </div>
            <div class="myslide fade">
                <div class="txt">
                    <h1>
                        <strong style="color: #333333;text-shadow: 4px -1px 0px #D16B7D;">F</strong><strong style="color: #D16B7D;text-shadow: 4px -1px 0px #333333;">L</strong><strong style="color: #333333;text-shadow: 4px -1px 0px #D16B7D;">O</strong><strong style="color: #D16B7D;text-shadow: 4px -1px 0px #333333;">W</strong style="color: #333333;text-shadow: 4px -1px 0px #D16B7D;"><strong style="color: #333333;text-shadow: 4px -1px 0px #D16B7D;">E</strong><strong style="color: #D16B7D;text-shadow: 4px -1px 0px #333333;">R</strong><strong style="color: #333333;text-shadow: 4px -1px 0px #D16B7D;">S</strong>
                    </h1>
                    <h1>
                        <strong style="font-weight: lighter;color: #333333;text-shadow: 4px -1px 0px #D16B7D;">G</strong><strong style="font-weight: lighter;color: #D16B7D;text-shadow: 4px -1px 0px #333333;">O</strong><strong style="font-weight: lighter;color: #333333;text-shadow: 4px -1px 0px #D16B7D;">R</strong><strong style="font-weight: lighter;color: #D16B7D;text-shadow: 4px -1px 0px #333333;">I</strong><strong style="font-weight: lighter;color: #333333;text-shadow: 4px -1px 0px #D16B7D;">N</strong>
                    </h1>
                    <p>Your attitude will go a long way in determining your success , your recognition, <br>
                        your reputation Your attitude</p>
                    <button class="sign-button2">Know More</button> <button class="sign-button2">About US</button>

                </div>
                <div class="img">
                    <img src="<?= get_theme_file_uri() . '/images/background-remover/T400-1C_jpg.png' ?>" alt="" width="1000" height="490">
                </div>
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>




    </div>