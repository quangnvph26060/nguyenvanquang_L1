<footer>

    <div class="slider_product">
        <div class="slider_products">
            <div class="slides_prodcuts">
                <div class="product_ft">
                    <div class="ft_img">
                        <img src="<?= get_theme_file_uri() . '/images/background-remover (1)/logo.png' ?>" alt="" width="70px" height="70px">
                        <span>
                            <strong>Go<strong style="color: #D16B7D;">grin</strong>.</strong>
                        </span>

                    </div>
                    <div class="ft-text">
                        <p>War should never be entered upon
                            until every agency of peace has
                            failed not to be good. War should
                            never be entered upon
                            until every agency of peace has
                            failed not to be good</p>
                    </div>
                </div>
                <div class="product_ft">
                    <h4>Emergency Link</h4>
                    <p>Our shop store</p>
                    <p>Our Term & Condition</p>
                    <p>Faq Section</p>
                    <p>Trending Product</p>
                    <p>Our shop store</p>
                </div>
                <div class="product_ft">
                    <h4>Emergency Link</h4>
                    <p>Our shop store</p>
                    <p>Our Term & Condition</p>
                    <p>Faq Section</p>
                    <p>Trending Product</p>
                    <p>Our shop store</p>
                </div>
                <div class="product_ft">
                    <h4>Social Feed</h4>
                    <p>War should never be entered upon
                        until every agency of peace has
                        failed not to be good.</p>
                    <div class="icon-container">
                        <?php if (is_active_sidebar('footer-widget-area')) : ?>
                                <?php dynamic_sidebar('footer-widget-area'); ?>
                        <?php endif; ?>
                        <!-- <div class="icon-square">
                            <i class="fab fa-facebook"></i>
                        </div>
                        <div class="icon-square">
                            <i class="fab fa-twitter"></i>
                        </div>
                        <div class="icon-square">
                            <i class="fab fa-instagram"></i>
                        </div>
                        <div class="icon-square">
                            <i class="fab fa-linkedin"></i>
                        </div> -->

                    </div>
                </div>
            </div>


        </div>

    </div>

    <div class="ft_down">
        <div class="ft_down_d">
            <div class="content_fl" style="float: left;">
                <p>Copyright @ gogrin all rights reserved</p>
            </div>
        </div>
        <div class="ft_down_d">
            <div class="content_fl" style="float: right;">
                <p>Service</p>
                <p>Pricing</p>
                <p>Contact</p>
            </div>
        </div>
    </div>
</footer>
<div id="toast"> </div>
<?php wp_footer(); ?>
</body>

</html>