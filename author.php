<?php get_header(); ?>

<main class="container page section">
    <?php 
        $author = get_queried_object( );
    ?>
    <h2 class="text-center primary-text">Author: <?php echo $author->data->display_name; ?></h2>

    <p class="text-center"><?php echo get_the_author_meta('description', $author->data->ID );  ?></p>

    <ul class="blog-entries">
        <?php while(have_posts() ): the_post(); ?>
            <?php get_template_part('template-parts/blog', 'loop' ) ?>
        <?php endwhile; ?>
    </ul>
</main>

<?php get_footer(); ?>