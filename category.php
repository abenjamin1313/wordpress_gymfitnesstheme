<?php get_header(); ?>

<main class="container page section">
    <?php
        $category = get_queried_object();   
    ?>
    <h2 class="text-center text-primary">Category: <?php echo $category->name; ?></h2>
    <div class="text-center">
        <?php echo category_description($category->ID ) ?>
    </div>
    <ul class="blog-entries">
        <?php while(have_posts() ): the_post(); ?>
            <?php get_template_part('template-parts/blog', 'loop' ) ?>
        <?php endwhile; ?>
    </ul>
</main>

<?php get_footer(); ?>