<div class="blog-post__date">
    <time class="updated" datetime="<?= get_post_time('F d'); ?>"><?= get_the_date(); ?></time>
</div>
<div class="blog-post__category">
    <?php echo get_the_category_list(); ?>
</div>
