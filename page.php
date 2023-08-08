<?php get_header(); ?>

    <article class="l-contents">
        <section class="p-firstview__shop">
            <div class="p-firstview__title c-display__flex c-display__block">
            <h1 class="c-font__Mplus1 c-fontweight__bold u-color__white"><?php the_title(); ?></h1>
            </div>
        </section>

        <div class="c-margin__contents p-page">
            <?php if( have_posts() ):?>
            <?php while( have_posts() ):?>
            <?php the_post() ?>

            <div <?php post_class(); ?>>
            <?php the_content();?>
            <?php wp_link_pages(); ?>
            </div>

            <?php endwhile; ?>
            <?php else : ?>
                <p>表示する記事がありません</p>
            <?php endif; ?>


            </div>



    </article>

    </div>

    <?php get_sidebar(); ?>

</main>

<?php get_footer(); ?>