<?php get_header(); ?>


    <article class="l-contents">
    <?php
        $cat = get_the_category();
        $cat = $cat[0];
    ?>
        <section class="p-firstview__archive">
            <div class="p-firstview__title c-display__flex c-display__block">
            <h2 class="c-font__Mplus1 c-fontweight__bold u-color__white">Menu:</h2>
            <h3 class="c-font__Mplus1 c-fontweight__bold u-color__white"><?php echo $cat->name; ?></h3>
            </div>
        </section>

        <section class="p-archive">
            <h2 class="p-archive__title c-font__Mplus1 c-fontweight__bold u-color__black c-margin--h2">小見出しが入ります</h2>
            <p class="c-font__Mplus1 u-color__black c-margin--p">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
        </section>


        <section class="p-card c-display__block">

            <?php if( have_posts() ):?>
            <?php while( have_posts() ):?>
            <?php the_post() ?>

            <div class="p-card__wrapper">
                <?php 
                if ( has_post_thumbnail() ) {
	            the_post_thumbnail();
                } 
                ?>
                <section class="p-card__textarea">
                        <div class="p-card__textbox">
                            <h2 class="u-color__white c-fontweight__bold"><?php the_title(); ?></h2>
                            <p class="u-color__white"><?php the_content('',FALSE,'');?></p>
                        </div>
                        <button type="button" class="p-archive__button c-button--detail c-font__Mplus1 c-fontweight__bold u-color__gray"><a href="<?php the_permalink(); ?>" class="u-color__gray">詳しく見る</a></button>
                </section>
            </div>
            <?php wp_link_pages(); ?>
            <?php endwhile; ?>
            <?php else : ?>
                <p>表示する記事がありません</p>
            <?php endif; ?>

            
        </section>


        <?php wp_pagenavi(); ?>


    </article>

    </div>

<?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>
