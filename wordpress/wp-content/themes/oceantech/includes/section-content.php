<article>

    <a href=" <?= get_permalink() ?>">
        <h2><?php the_title(); ?></h2>
    </a>
    <div class="post-thumbnail">
        <?php the_post_thumbnail(); ?>
    </div>
    <div class="post-content">
        <?php the_excerpt(); ?>
    </div>
    <div class="post-info">
        <p>Ngày tạo: <?php the_date(); ?></p>
        <p>Tags: <?php the_tags('', ', '); ?></p>
        <p>Tác giả: <?php the_author(); ?></p>
       
    </div>
</article>