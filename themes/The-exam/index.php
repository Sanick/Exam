<?php get_header();?>

<!----------------Main-Content-------------------->
<main class="content-wrapper">

    <!----------------Blog posts-------------------->
    <section class="post-wrapper">
        <p class="post-slogon">
            "Ability may get you to the top, but it takes
            character to keep you there."
            <span>John Wooden</span>
        </p>

        <article class="blog-post">
            <img src="<?php bloginfo('template_url') ?>/images/post-content-img.jpg" width="899" height="561" alt="123"/>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="post-title">
                <p><?php the_title(); ?></p>
                <span><?php the_excerpt();?></span>
                <ul>
                    <li><a href="#">by John Doe </a></li>
                    <li>/</li>
                    <li><a href="#">1 comments</a></li>
                    <li>/</li>
                    <li><a href="#">Oct. 12, 2013</a></li>
                </ul>
            </div>
            <?php endwhile; ?>
            <!-- post navigation -->
            <?php else: ?>
            <!-- no posts found -->
            <?php endif; ?>
    </section>

    <?php get_sidebar();?>

    <?php get_footer();?>