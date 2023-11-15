<?php
// add load_css
function load_css()
{
    $ver = time();
    wp_register_style(
        'custom-style',
        'http://localhost/quang_L1/wordpress/wp-content/themes/oceantech/style.css',
        array(),
        $ver
    );
    wp_enqueue_style('custom-style');
    wp_enqueue_style('stylecss','http://localhost/quang_L1/wordpress/wp-content/themes/oceantech/css/style.css',array(),$ver);
    wp_enqueue_style('googleapis','http://fonts.googleapis.com',array(),'1.0.4','all');
    wp_enqueue_style('gstatic','http://fonts.gstatic.com',array(),'1.0.5','all');
    wp_enqueue_style('googleapiscss','http://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap',array(),'1.0','all');
    wp_enqueue_style('cloudflare','http://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css',array(),'1.0','all');

}
add_action('wp_enqueue_scripts', 'load_css');
// add load_js
function load_js()
{
    wp_register_script(
        'custom-script',
        'http://localhost/quang_L1/wordpress/wp-content/themes/oceantech/js/custom.js',
        array('jquery'),
        '1.0',
        true
    );
    wp_enqueue_script('custom-script');
    wp_enqueue_script('select','http://localhost/quang_L1/wordpress/wp-content/themes/oceantech/js/select.js',array('jquery'),'1.0',true);
    wp_enqueue_script('jsflie','http://localhost/quang_L1/wordpress/wp-content/themes/oceantech/js/jsflie.js',array('jquery'),'1.0',true);
    wp_enqueue_script('slider','http://localhost/quang_L1/wordpress/wp-content/themes/oceantech/js/slider.js',array('jquery'),'1.0',true);
    wp_enqueue_script('overflow','http://localhost/quang_L1/wordpress/wp-content/themes/oceantech/js/overflow.js',array('jquery'),'1.0',true);
}
add_action('wp_enqueue_scripts', 'load_js');



/// add menus
add_theme_support('menus');
function register_custom_menus()
{
    register_nav_menus(
        array(
            'primary-menu' => __('Primary Menu', 'new-text-domain'),
        )
    );
}
add_action('init', 'register_custom_menus');


// 
add_theme_support('widgets');
// footer 
function theme_name_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Footer', 'theme_name' ),
        'id'            => 'footer-widget-area',
        'description'   => __( 'Widget area for the footer.', 'theme_name' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'theme_name_widgets_init' );
function register_custom_sidebars()
{
    // Đăng ký sidebar mới
    register_sidebar(array(
        'name' => 'Tên Sidebar',
        'id' => 'sidebar-1',
        'description' => 'Mô tả sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    // Đăng ký các sidebar khác nếu cần
    // register_sidebar(array(
    //     'name' => 'Tên Sidebar Khác',
    //     'id' => 'sidebar-2',
    //     'description' => 'Mô tả sidebar khác',
    //     'before_widget' => '<div id="%1$s" class="widget %2$s">',
    //     'after_widget' => '</div>',
    //     'before_title' => '<h2 class="widget-title">',
    //     'after_title' => '</h2>',
    // ));
}
add_action('widgets_init', 'register_custom_sidebars');



//// widgets
class Custom_Post_Category_Widget extends WP_Widget
{

    public function __construct()
    {
        parent::__construct(
            'custom_post_category_widget',
            'Custom Post Category Widget',
            array(
                'description' => 'A custom widget to display post and category lists',
            )
        );
    }

    public function widget($args, $instance)
    {
        $title = apply_filters('widget_title', $instance['title']);
        echo $args['before_widget'];

        if (!empty($title)) {
            echo $args['before_title'] . $title . $args['after_title'];
        }

        // Hiển thị danh sách bài viết
        $posts = get_posts();
        echo '<h3>Posts</h3>';
        echo '<ul>';
        foreach ($posts as $post) {
            echo '<li>' . $post->post_title . '</li>';
        }
        echo '</ul>';

        // Hiển thị danh sách danh mục
        $categories = get_categories();

        echo '<h3>Categories</h3>';
        echo '<ul>';
        foreach ($categories as $category) {
            echo '<li>' . $category->name . '</li>';
        }
        echo '</ul>';

        echo $args['after_widget'];
    }

    public function form($instance)
    {
        $title = !empty($instance['title']) ? $instance['title'] : '';
?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr($title); ?>">
        </p>
<?php
    }

    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        return $instance;
    }
}

function register_custom_widget()
{
    register_widget('Custom_Post_Category_Widget');
}
add_action('widgets_init', 'register_custom_widget');

// function custom_sidebar_content()
// {
//     if (is_active_sidebar('sidebar-1')) {
//         dynamic_sidebar('sidebar-1');
//     } else {
//         echo 'No widgets added to sidebar-1.';
//     }
// }
// add_action('wp_footer', 'custom_sidebar_content');


////custom files

// Thêm trường tùy chỉnh vào trang chỉnh sửa bài viết
function add_custom_fields_meta_box()
{
    add_meta_box(
        'custom_fields', // ID của meta box
        'Custom Fields', // Tiêu đề của meta box
        'display_custom_fields_meta_box', // Callback function để hiển thị nội dung meta box
        'post', // Loại bài viết áp dụng meta box
        'normal', // Vị trí của meta box (normal, side, advanced)
        'high' // Ưu tiên hiển thị meta box (high, core, default, low)
    );
}
add_action('add_meta_boxes', 'add_custom_fields_meta_box');

// Hiển thị nội dung của meta box
function display_custom_fields_meta_box($post)
{
    // Lấy giá trị hiện tại của trường color và price
    $color = get_post_meta($post->ID, 'color', true);
    $price = get_post_meta($post->ID, 'price', true);

    // Hiển thị các trường tùy chỉnh
    echo 'Color: <input type="text" name="color" value="' . esc_attr($color) . '"><br>';
    echo 'Price: <input type="text" name="price" value="' . esc_attr($price) . '">';
}

// Lưu giá trị của trường tùy chỉnh khi bài viết được lưu
function save_custom_fields($post_id)
{
    if (isset($_POST['color'])) {
        update_post_meta($post_id, 'color', sanitize_text_field($_POST['color']));
    }
    if (isset($_POST['price'])) {
        update_post_meta($post_id, 'price', sanitize_text_field($_POST['price']));
    }
}
add_action('save_post', 'save_custom_fields');
