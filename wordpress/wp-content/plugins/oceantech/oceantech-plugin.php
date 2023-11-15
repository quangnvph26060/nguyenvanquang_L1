<?php
/*
Plugin Name: OceanTech Plugin WooCommerce
Plugin URI: https://woocommerce.com/
Description: A plugin to call products from WooCommerce and display the latest products.
Version: 1.0
Author: quangnv
Author URI: https://woocommerce.com
 Text Domain: woocommerce
 Domain Path: /i18n/languages/
 Requires at least: 6.2
 Requires PHP: 7.3
*/



function get_product_woo()
{
    $args = array(
        'post_type' => 'product', // Loại bài viết "product"
    );

    $products = new WP_Query($args);

    if ($products->have_posts()) {
        while ($products->have_posts()) {
            $products->the_post();
            // Hiển thị thông tin sản phẩm
            echo '<h2>' . get_the_title() . '</h2>';
            echo '<div>' . get_the_content() . '</div>';
        }
    }

    wp_reset_postdata();
}

// add_action('init', 'get_product_woo');

function get_product_woo_new()
{
    $args = array(
        'post_type'      => 'product', // Loại bài viết "product"
        'posts_per_page' => 5, // Số lượng sản phẩm mới nhất muốn hiển thị
        'orderby'        => 'date', // Sắp xếp theo ngày
        'order'          => 'DESC', // Sắp xếp giảm dần
    );

    $products = new WP_Query($args);

    if ($products->have_posts()) {
        while ($products->have_posts()) {
            $products->the_post();
            // Lấy thông tin sản phẩm
            $product = wc_get_product(get_the_ID());
            $product_title = get_the_title();
            $product_content = get_the_content();
            $product_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail')[0];
            $product_link = get_permalink();
            $product_price = $product->get_price_html();
            // Hiển thị thông tin sản phẩm
            echo '<div class="product-wrapper">';
            echo '<a href="' . $product_link . '">';
            echo '<h2>' . $product_title . '</h2>';
            echo '<img src="' . $product_image_url . '" alt="' . $product_title . '">';
            echo '<div>' . $product_content . '</div>';
            echo '<div class="product-price">' . $product_price . '</div>';
            echo '</a>';
            echo '</div>';
        }
    }

    wp_reset_postdata();
}

// add_action('init', 'get_product_woo_new');
