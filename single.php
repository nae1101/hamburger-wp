<?php get_header(); ?> <!--header.phpを読み込むテンプレートタグ（インクルードタグ）-->

    <article class="l-contents">
        <section class="p-firstview__single">
            <div class="p-firstview__title c-display__flex c-display__block">
            <h1 class="c-font__Mplus1 c-fontweight__bold u-color__white"><?php the_title(); ?></h1>
            </div>
        </section>

        
        <div class="c-margin__contents p-single">
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

    <?php get_sidebar(); ?> <!--//siderbar.phpを読み込むテンプレートタグ（インクルードタグ）-->
</main>

<?php get_footer(); ?> <!--footer.phpを読み込むテンプレートタグ（インクルードタグ）-->