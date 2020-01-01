<?php get_header();?>


<div class="content">
    <section id="main_content">
        <?php if(have_posts()): while (have_posts()): the_post();?>
            <?php get_template_part("content", get_post_format())?>
        <?php endwhile;?>
            <?php display_pagination(); ?>
        <?php else: ?>
            <?php get_template_part("content", 'none')?>
        <?php endif;?>
    </section>
    <section id="site_bar">
        <?php get_sidebar(); ?>
    </section>
</div>

<?php get_footer();?>
