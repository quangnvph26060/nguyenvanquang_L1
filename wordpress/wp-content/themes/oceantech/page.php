<?php
// Template Name: Custom Page Template
// Template này sẽ hiển thị nội dung của trang

get_header();

while (have_posts()) {
  the_post();
  ?>
  <!-- <h1><?php the_title(); ?></h1> -->
  <div class="page-content">
    <?php the_content(); 
    ?>
  </div>
  <?php
}

get_footer();
