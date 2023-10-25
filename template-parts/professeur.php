<h1><?php the_title('<h1>', '</h1>') ?></h1>
<div>
    <?php if (has_post_thumbnail()) {
        the_post_thumbnail('thumbnail');
    } ?>
</div>
<p><?php the_content() ?></p>