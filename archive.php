<?php get_header(); ?> <!--header.phpを読み込むテンプレートタグ（インクルードタグ）-->


    <article class="l-contents">
    <?php
        $cat = get_the_category();
        $cat = $cat[0];
    ?>
        <section class="p-firstview__archive">
            <div class="p-firstview__title c-display__flex c-display__block">
            <h2 class="c-font__Mplus1 c-fontweight__bold u-color__white">Menu:</h2>
            <h3 class="c-font__Mplus1 c-fontweight__bold u-color__white"><?php echo $cat->name; ?><!--チーズバーガー--></h3>
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
                if ( has_post_thumbnail() ) { // 投稿にアイキャッチ画像が割り当てられているかチェックします。
	            the_post_thumbnail();
                } 
                ?>
                <section class="p-card__textarea">
                        <div class="p-card__textbox">
                            <h2 class="u-color__white c-fontweight__bold"><?php the_title(); ?><!--チーズバーガー--></h2>
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
        <!-- <div class="p-pagination c-display__flex">
            <ul class="p-pagination__wrapper c-display__flex-center">
                <li class="p-pagination__number"><p class="u-color__gray c-font__Robot c-fontweight__bold">page 1/10</p></li>
                <li class="p-pagination__prev"><a href="" class="c-display__flex-center u-color__gray"><div class="c-icon__prev"></div><p class="p-pagination__list">前へ</p></a></li>
                <li class="p-pagination__box c-box__pagination"><a href="" class="u-color__white c-font__Robot c-fontweight__bold">1</a></li>
                <li class="p-pagination__box c-box__pagination"><a href="" class="u-color__gray c-font__Robot c-fontweight__bold">2</a></li>
                <li class="p-pagination__box c-box__pagination"><a href="" class="u-color__gray c-font__Robot c-fontweight__bold">3</a></li>
                <li class="p-pagination__box c-box__pagination"><a href="" class="u-color__gray c-font__Robot c-fontweight__bold">4</a></li>
                <li class="p-pagination__box c-box__pagination"><a href="" class="u-color__gray c-font__Robot c-fontweight__bold">5</a></li>
                <li class="p-pagination__box c-box__pagination"><a href="" class="u-color__gray c-font__Robot c-fontweight__bold">6</a></li>
                <li class="p-pagination__box c-box__pagination"><a href="" class="u-color__gray c-font__Robot c-fontweight__bold">7</a></li>
                <li class="p-pagination__box c-box__pagination"><a href="" class="u-color__gray c-font__Robot c-fontweight__bold">8</a></li>
                <li class="p-pagination__box c-box__pagination"><a href="" class="u-color__gray c-font__Robot c-fontweight__bold">9</a></li>
                <li class="p-pagination__next"><a href="" class="c-display__flex-center u-color__gray"><p class="p-pagination__list">次へ</p><div class="c-icon__next"></div></a></li>
            </ul>
        </div> -->

    </article>

    </div>

<?php get_sidebar(); ?> <!--//siderbar.phpを読み込むテンプレートタグ（インクルードタグ）-->
</main>

<?php get_footer(); ?> <!--footer.phpを読み込むテンプレートタグ（インクルードタグ）-->
