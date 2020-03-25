<li class="card gradient">
    <?php the_post_thumbnail('mediumSize'); ?>

    <?php the_category(); ?>

    <div class="card-content">
        <a href="<?php the_permalink(); ?>">
            <h3><?php the_title(); ?></h3>
        </a>

        <p class="meta"><span>By: </span>
            <a href="<?php echo get_author_posts_url( get_the_author_meta('ID') ); ?>">
                <?php echo get_the_author_meta('display_name'); ?>
            </a>
        </p>
        <p class="date-published meta">
            <span>Date: </span>
            <?php the_time( get_option( 'date_format' ) ); ?>
        </p>
    </div>
</li>
