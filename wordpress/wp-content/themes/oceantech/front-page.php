<?php get_header();?>
    <div class="product-box">
        <div class="barnbox">
            <div class="box " id="box_sp">
                <div>
                    <i class="fas fa-headphones"></i>
                </div>
                <div>
                    <p class="box_title">24/7 Help line</p>
                    <p class="box_content">Adipiscing neque, amet scelerisque nulla. Morbi faucibus </p>
                </div>
            </div>
            <div class="box">
                <div>

                    <i class='fas fa-leaf'></i>
                </div>
                <div>
                    <p class="box_title">Fresh flowers</p>
                    <p class="box_content">Adipiscing neque, amet scelerisque nulla. Morbi faucibus </p>
                </div>
            </div>
            <div class="box">
                <div>

                    <i class="fas fa-mobile-alt"></i>
                </div>
                <div>
                    <p class="box_title">payment secure</p>
                    <p class="box_content">Adipiscing neque, amet scelerisque nulla. Morbi faucibus </p>
                </div>
            </div>
            <div class="box">
                <div>

                    <i class='fas fa-box-open'></i>
                </div>
                <div>
                    <p class="box_title">Free delivery</p>
                    <p class="box_content">Adipiscing neque, amet scelerisque nulla. Morbi faucibus </p>
                </div>
            </div>
        </div>


        <div class="showing">
            <div class="showing_one">

                <div class="showing_a">
                    <img src="../images/logo1.png" alt="" width="60px" class="content_box_img"
                        style="margin-left: 30px; margin-top: 10px;">
                    <p class="content_box_p" style="font-weight: 800;">Trending <strong
                            style="color: #D16B7D;">Flowers</strong>
                    </p>
                </div>
                <div class="showing_a show_menu">
                    <div id="myBtnContainer">
                        <span> <button class="btn active" onclick="filterSelection('all')">All</button></span>
                        <span> <button class="btn" onclick="filterSelection('exctic')"> Exctic</button> </span>
                        <span><button class="btn" onclick="filterSelection('green')"> Green</button></span>
                        <span> <button class="btn" onclick="filterSelection('popular')"> Popular</button></span>
                        <span> <button class="btn" onclick="filterSelection('winter')">Winter</button></span>
                    </div>

                </div>
            </div>
        </div>
        <!-- các sản phẩm  -->
        <div class="product_sort">
            <div class="product_sort_con">
                <div class="product_con exctic">
                    <div class="product_img">
                        <img src="<?= get_theme_file_uri().'/images/background-remover/sp2.png'?>" alt="">
                        <div class="product_sale">
                            SALE!
                        </div>
                        <div class="overlay">
                            <div class="text">
                                <a href=""><i class="fa fa-heart"></i></a>
                                <i class="fas fa-shopping-cart"></i>
                                <a href=""> <i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="product_info">
                            <p class="product_name">Sản Phẩm 1</p>
                            <p class="product_price"><span
                                    style="text-decoration: line-through;opacity: 0.5;">$19</span>
                               </p>
                        </div>
                    </div>
                   
                </div>
                <div class="product_con green">
                    <div class="product_img">
                        <img src="../images/background-remover/sp2.png" alt="">
                        <div class="product_sale">
                            SALE!
                        </div>
                        <div class="overlay">
                            <div class="text">
                                <a href=""><i class="fa fa-heart"></i></a>
                                <i class="fas fa-shopping-cart"></i>
                                <a href=""> <i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="product_info">
                            <p class="product_name">Sản Phẩm 1</p>
                            <p class="product_price"><span
                                    style="text-decoration: line-through;opacity: 0.5;">$19</span>
                               </p>
                        </div>
                    </div>
                   
                </div>
                <div class="product_con green">
                    <div class="product_img">
                        <img src="../images/background-remover/sp2.png" alt="">
                        <div class="product_sale">
                            SALE!
                        </div>
                        <div class="overlay">
                            <div class="text">
                                <a href=""><i class="fa fa-heart"></i></a>
                                <i class="fas fa-shopping-cart"></i>
                                <a href=""> <i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="product_info">
                            <p class="product_name">Sản Phẩm 1</p>
                            <p class="product_price"><span
                                    style="text-decoration: line-through;opacity: 0.5;">$19</span>
                               </p>
                        </div>
                    </div>
                   
                </div>
                <div class="product_con winter">
                    <div class="product_img">
                        <img src="../images/background-remover/sp1.png" alt="">
                        <div class="product_sale">
                            SALE!
                        </div>
                        <div class="overlay">
                            <div class="text">
                                <a href=""><i class="fa fa-heart"></i></a>
                                <i class="fas fa-shopping-cart"></i>
                                <a href=""> <i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="product_info">
                            <p class="product_name">Sản Phẩm 1</p>
                            <p class="product_price"><span
                                    style="text-decoration: line-through;opacity: 0.5;">$19</span>
                               </p>
                        </div>
                    </div>
                   
                </div>
                <div class="product_con winter">
                    <div class="product_img">
                        <img src="../images/background-remover/sp2.png" alt="">
                        <div class="product_sale">
                            SALE!
                        </div>
                        <div class="overlay">
                            <div class="text">
                                <a href=""><i class="fa fa-heart"></i></a>
                                <i class="fas fa-shopping-cart"></i>
                                <a href=""> <i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="product_info">
                            <p class="product_name">Sản Phẩm 1</p>
                            <p class="product_price"><span
                                    style="text-decoration: line-through;opacity: 0.5;">$19</span>
                               </p>
                        </div>
                    </div>
                   
                </div>
                <div class="product_con exctic">
                    <div class="product_img">
                        <img src="../images/background-remover/sp1.png" alt="">
                        <div class="product_sale">
                            SALE!
                        </div>
                        <div class="overlay">
                            <div class="text">
                                <a href=""><i class="fa fa-heart"></i></a>
                                <i class="fas fa-shopping-cart"></i>
                                <a href=""> <i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="product_info">
                            <p class="product_name">Sản Phẩm 1</p>
                            <p class="product_price"><span
                                    style="text-decoration: line-through;opacity: 0.5;">$19</span>
                               </p>
                        </div>
                    </div>
                   
                </div>
                <div class="product_con exctic">
                    <div class="product_img">
                        <img src="<?= get_theme_file_uri().'/images/background-remover/sp1.png'?>" alt="">
                        <div class="product_sale">
                            SALE!
                        </div>
                        <div class="overlay">
                            <div class="text">
                                <a href=""><i class="fa fa-heart"></i></a>
                                <i class="fas fa-shopping-cart"></i>
                                <a href=""> <i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="product_info">
                            <p class="product_name">Sản Phẩm 1</p>
                            <p class="product_price"><span
                                    style="text-decoration: line-through;opacity: 0.5;">$19</span>
                               </p>
                        </div>
                    </div>
                   
                </div>
                <div class="product_con exctic">
                    <div class="product_img">
                        <img src="../images/background-remover/sp1.png" alt="">
                        <div class="product_sale">
                            SALE!
                        </div>
                        <div class="overlay">
                            <div class="text">
                                <a href=""><i class="fa fa-heart"></i></a>
                                <i class="fas fa-shopping-cart"></i>
                                <a href=""> <i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="product_info">
                            <p class="product_name">Sản Phẩm 1</p>
                            <p class="product_price"><span
                                    style="text-decoration: line-through;opacity: 0.5;">$19</span>
                               </p>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    <div class="context_avatar">
        <div class="avatar_img">
            <img src="../images/background-remover/img_avatar.png" alt="Avatar" class="avatar">
            <div class="content_avatar">
                <p class="content_up">Gogrin flower shop is really amezing there fresh flower & servicers. i </p>
                <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">always pray a lot for
                    there big success</p>
                <p style="line-height: 40px;"><strong
                        style="color: #D16B7D;font-family: 'Poppins', sans-serif;font-size: 15px;">Rakib hossain...
                    </strong><strong style="font-size: 15px;">Manager</strong></p>
            </div>
        </div>
        <div class="shop_shopping">
            <div class="shop_shopping_now">
                <img src="<?= get_theme_file_uri().'/images/rohoa.png'?>" alt="" class="imgrohoa">
                <div class="product_off_new">
                    <span> 20% <br> OFF</span>
                </div>
                <div class="content_now">
                    <p>Latest red & white rose <br> Combo Offer... $35</p>
                </div>
                <a href="">SHOP NOW</a>
            </div>
            <div class="shop_shopping_now">
                <img src="../images/rohoa.png" alt="" class="imgrohoa">
                <div class="product_off_new">
                    <span> 20% <br> OFF</span>
                </div>
                <div class="content_now">
                    <p>Latest red & white rose <br> Combo Offer... $35</p>
                </div>
                <a href="">SHOP NOW</a>
            </div>

        </div>

    </div>
    <div class="title_product">
        <div class="logo_product">
            <img src="../images/logo1.png" alt="" width="60px" class="content_box_img">
            <p class="content_box_p" style="font-weight: 800;">Trending <strong style="color: #D16B7D;">Flowers</strong>
            </p>
        </div>

        <div class="btn_product">
            <button class="next-btn"><i class='fas fa-arrow-right' style="font-size: 1rem; color: white;"></i></button>
            <button class="prev-btn"><i class='fas fa-arrow-left' style="font-size: 1rem; color: white;"></i></button>
        </div>

    </div>
    <div class="slider_product">
        <div class="slider_products">
            <div class="slides_prodcuts">
                <div class="product_hoa">
                    <div class="product_img">
                        <img src="../images/background-remover/lohoa.png" alt="">
                        <div class="overlay">
                            <div class="text">
                                <a href=""><i class="fa fa-heart"></i></a>
                                <a href=""><i class='fas fa-shopping-cart'></i></a>
                                <a href=""> <i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product_info">
                        <p class="product_name">Yellow rose flower </p>
                        <p class="product_price"><span style="text-decoration: line-through;opacity: 0.5;">$19</span>
                            $17</p>
                    </div>
                </div>
                <div class="product_hoa">
                    <div class="product_img">
                        <img src="../images/pro.jpg" alt="">
                        <div class="product_sale">
                            SALE!
                        </div>
                        <div class="overlay">
                            <div class="text">
                                <a href=""><i class="fa fa-heart"></i></a>
                                <a href=""><i class='fas fa-shopping-cart'></i></a>
                                <a href=""> <i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product_info">
                        <p class="product_name">Flower in glash </p>
                        <p class="product_price">$15</p>
                    </div>
                </div>
                <div class="product_hoa">
                    <div class="product_img">
                        <img src="../images/background-remover/transparent.png" alt="">
                        <div class="overlay">
                            <div class="text">
                                <a href=""><i class="fa fa-heart"></i></a>
                                <a href=""><i class='fas fa-shopping-cart'></i></a>
                                <a href=""> <i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product_info">
                        <p class="product_name">Beautiful rose flower </p>
                        <p class="product_price"><span style="text-decoration: line-through;opacity: 0.5">$33</span> $31
                        </p>
                    </div>
                </div>
                <div class="product_hoa">
                    <div class="product_img">
                        <img src="<?php echo get_theme_file_uri().'/images/background-remover/lohoa.png'?>" alt="">
                        <div class="overlay">
                            <div class="text">
                                <a href=""><i class="fa fa-heart"></i></a>
                                <a href=""><i class='fas fa-shopping-cart'></i></a>
                                <a href=""> <i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product_info">
                        <p class="product_name">Yellow rose flower </p>
                        <p class="product_price"><span style="text-decoration: line-through;opacity: 0.5;">$19</span>
                            $17</p>
                    </div>
                </div>
            </div>
            <div class="slides_prodcuts">
                <div class="product_hoa">
                    <div class="product_img">
                        <img src="../images/background-remover/lohoa.png" alt="">
                        <div class="overlay">
                            <div class="text">
                                <a href=""><i class="fa fa-heart"></i></a>
                                <a href=""><i class='fas fa-shopping-cart'></i></a>
                                <a href=""> <i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product_info">
                        <p class="product_name">Yellow rose flower </p>
                        <p class="product_price"><span style="text-decoration: line-through;opacity: 0.5;">$19</span>
                            $17</p>
                    </div>
                </div>
                <div class="product_hoa">
                    <div class="product_img">
                        <img src="../images/background-remover/p1.jpg" alt="">
                        <div class="product_sale">
                            SALE!
                        </div>
                        <div class="overlay">
                            <div class="text">
                                <a href=""><i class="fa fa-heart"></i></a>
                                <a href=""><i class='fas fa-shopping-cart'></i></a>
                                <a href=""> <i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product_info">
                        <p class="product_name">Flower in glash </p>
                        <p class="product_price">$15</p>
                    </div>
                </div>
                <div class="product_hoa">
                    <div class="product_img">
                        <img src="../images/background-remover/transparent.png" alt="">
                        <div class="overlay">
                            <div class="text">
                                <a href=""><i class="fa fa-heart"></i></a>
                                <a href=""><i class='fas fa-shopping-cart'></i></a>
                                <a href=""> <i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product_info">
                        <p class="product_name">Beautiful rose flower </p>
                        <p class="product_price"><span style="text-decoration: line-through;opacity: 0.5">$33</span> $31
                        </p>
                    </div>
                </div>
                <div class="product_hoa">
                    <div class="product_img">
                        <img src="../images/pro.jpg" alt="">
                        <div class="product_sale">
                            SALE!
                        </div>
                        <div class="overlay">
                            <div class="text">
                                <a href=""><i class="fa fa-heart"></i></a>
                                <a href=""><i class='fas fa-shopping-cart'></i></a>
                                <a href=""> <i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product_info">
                        <p class="product_name">Yellow rose flower </p>
                        <p class="product_price"><span style="text-decoration: line-through;opacity: 0.5;">$19</span>
                            $17</p>
                    </div>
                </div>
            </div>
            <div class="slides_prodcuts">
                <div class="product_hoa">
                    <div class="product_img">
                        <img src="../images/background-remover/lohoa.png" alt="">
                        <div class="overlay">
                            <div class="text">
                                <a href=""><i class="fa fa-heart"></i></a>
                                <a href=""><i class='fas fa-shopping-cart'></i></a>
                                <a href=""> <i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product_info">
                        <p class="product_name">Yellow rose flower </p>
                        <p class="product_price"><span style="text-decoration: line-through;opacity: 0.5;">$19</span>
                            $17</p>
                    </div>
                </div>
                <div class="product_hoa">
                    <div class="product_img">
                        <img src="<?= get_theme_file_uri().'/images/background-remover/p1.jpg'?>" alt="">
                        <div class="product_sale">
                            SALE!
                        </div>
                        <div class="overlay">
                            <div class="text">
                                <a href=""><i class="fa fa-heart"></i></a>
                                <a href=""><i class='fas fa-shopping-cart'></i></a>
                                <a href=""> <i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product_info">
                        <p class="product_name">Flower in glash </p>
                        <p class="product_price">$15</p>
                    </div>
                </div>
                <div class="product_hoa">
                    <div class="product_img">
                        <img src="<?= get_theme_file_uri().'/images/background-remover/transparent.png'?>" alt="">
                        <div class="overlay">
                            <div class="text">
                                <a href=""><i class="fa fa-heart"></i></a>
                                <a href=""><i class='fas fa-shopping-cart'></i></a>
                                <a href=""> <i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product_info">
                        <p class="product_name">Beautiful rose flower </p>
                        <p class="product_price"><span style="text-decoration: line-through;opacity: 0.5">$33</span> $31
                        </p>
                    </div>
                </div>
                <div class="product_hoa">
                    <div class="product_img">
                        <img src="../images/pro.jpg" alt="">
                        <div class="product_sale">
                            SALE!
                        </div>
                        <div class="overlay">
                            <div class="text">
                                <a href=""><i class="fa fa-heart"></i></a>
                                <a href=""><i class='fas fa-shopping-cart'></i></a>
                                <a href=""> <i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product_info">
                        <p class="product_name">Yellow rose flower </p>
                        <p class="product_price"><span style="text-decoration: line-through;opacity: 0.5;">$19</span>
                            $17</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div style="overflow:auto;margin-top: 30px;" class="main_sum">
        <div class="main">
            <img src="<?= get_theme_file_uri().'/images/background-remover (1)/logo.png'?>" alt="">
            <div class="main1">
                <p style="color: #D16B7D;font-weight: 700;">We provide always fresh & beautiful flower</p>
                <p class="main_title_content" style="line-height: 35px;"><span style="color: #D16B7D;">Love</span> is
                    the flower <br>
                    you've got to <span style="color: #D16B7D;">let grow.</span></p>
                <p style="line-height: normal;font-family: 'Courier New', Courier, monospace;">They have to a certain
                    caliber and connect with me because I'm
                    going to be playing them for reset of my life. They have to a
                    certain caliber connect with me </p>
                <p style="line-height: 30px ; color: #D16B7D;">Learn More...</p>
                <p class="main2">
                    <span><i class='fas fa-award' style="color: #0ED678;margin-right: 10px;"></i></span> We provide
                    always fresh & beautiful flower <br>

                    <span><i class='fas fa-award' style="color: #0ED678;margin-right: 10px"></i></span> We provide
                    always fresh & beautiful flower
                </p>
            </div>
        </div>

        <div class="right">
            <img src="<?= get_theme_file_uri().'./images/background-remover/sp3.png'?>" alt="">
        </div>
    </div>
    <div class="logo_six">
        <div class="logo_six_image"> <img src="<?php echo get_theme_file_uri().'/images/logo/1.PNG'?>" alt=""></div>
        <div class="logo_six_image"><img src="<?php echo get_theme_file_uri().'/images/logo/2.PNG'?>" alt=""></div>
        <div class="logo_six_image"><img src="<?php echo get_theme_file_uri().'/images/logo/3.PNG'?>" alt=""></div>
        <div class="logo_six_image"><img src="<?php echo get_theme_file_uri().'/images/logo/4.PNG'?>" alt=""></div>
        <div class="logo_six_image"><img src="<?php echo get_theme_file_uri().'/images/logo/2.PNG'?>" alt=""></div>
        <div class="logo_six_image"><img src="<?php echo get_theme_file_uri().'/images/logo/1.PNG'?>" alt=""></div>
    </div>
    <div class="title_product">
        <div class="logo_product">
            <img src="../images/logo1.png" alt="" width="60px" class="content_box_img">
            <p class="content_box_p" style="font-weight: 800;">Trending <strong style="color: #D16B7D;">Flowers</strong>
            </p>
        </div>

        <div class="btn_product">
            <button class="next-btn1"><i class='fas fa-arrow-right' style="font-size: 1rem; color: white;"></i></button>
            <button class="prev-btn1"><i class='fas fa-arrow-left' style="font-size: 1rem; color: white;"></i></button>
        </div>

    </div>
    <div class="post_product">
        <div class="post_products">
            <div class="posts_prodcuts">

                <div class="product_post">
                    <div class="post_img">
                        <img src="../images/baitamhonrom.jpg" alt="">
                    </div>
                    <div class="post_sale">
                        03 Feb 2023
                    </div>
                    <div class="post_info">
                        <p class="post_info_title">The Biggest Contribution Of <br>
                            Nonprofit To Humanty.</p>
                        <p class="post_info_more">READ MORE...</p>
                    </div>
                </div>
                <div class="product_post">
                    <div class="post_img">
                        <img src="../images/huu-percentage-20thanh-percentage-2033-percentage-20-3.jpg" alt="">
                    </div>
                    <div class="post_sale">
                        03 Feb 2023
                    </div>
                    <div class="post_info">
                        <p class="post_info_title">Flowers always make people <br>
                            better, happier, and more</p>
                        <p class="post_info_more">READ MORE...</p>
                    </div>
                </div>
                <div class="product_post">
                    <div class="post_img">
                        <img src="<?= get_theme_file_uri().'/images/chiemnguonvedepcongviendiachat.jpg'?>" alt="">
                    </div>
                    <div class="post_sale">
                        03 Feb 2023
                    </div>
                    <div class="post_info">
                        <p class="post_info_title">The Biggest Contribution Of <br>
                            Nonprofit To Humanty.</p>
                        <p class="post_info_more">READ MORE...</p>
                    </div>
                </div>
            </div>
            <div class="posts_prodcuts">

                <div class="product_post">
                    <div class="post_img">
                    <img src="<?= get_theme_file_uri().'./images/chiemnguonvedepcongviendiachat.jpg'?>" alt="">
                    </div>
                    <div class="post_sale">
                        03 Feb 2023
                    </div>
                    <div class="post_info">
                        <p class="post_info_title">The Biggest Contribution Of <br>
                            Nonprofit To Humanty.</p>
                        <p class="post_info_more">READ MORE...</p>
                    </div>
                </div>
                <div class="product_post">
                    <div class="post_img">
                    <img src="<?= get_theme_file_uri().'./images/chiemnguonvedepcongviendiachat.jpg'?>" alt="">
                    </div>
                    <div class="post_sale">
                        03 Feb 2023
                    </div>
                    <div class="post_info">
                        <p class="post_info_title">Flowers always make people <br>
                            better, happier, and more</p>
                        <p class="post_info_more">READ MORE...</p>
                    </div>
                </div>
                <div class="product_post">
                    <div class="post_img">
                        <img src="../images/chiemnguonvedepcongviendiachat.jpg" alt="">
                    </div>
                    <div class="post_sale">
                        03 Feb 2023
                    </div>
                    <div class="post_info">
                        <p class="post_info_title">The Biggest Contribution Of <br>
                            Nonprofit To Humanty.</p>
                        <p class="post_info_more">READ MORE...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact">
        <div class="contact_lh">

            <div class="contact_lh_left">

            </div>
            <p>OUR NEWSLETTER</p>

        </div>
        <div class="contact_lh">

            <input type="text" placeholder="    Your Email">
            <button>SEND</button>
        </div>
    </div>
    <?php get_footer(); ?>