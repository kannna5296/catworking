<!-- sidebar.phpここから -->
</div>

<aside class="mymenu">
    <div class="mycontainer">

        <div class="widget">
            <h2>関連記事</h2>
            <?php
$post_id = get_the_ID(); //投稿IDを取得
foreach((get_the_category()) as $cat) {
$cat_id = $cat->cat_ID ; //カテゴリーIDを取得 
break ;
}
query_posts(
array(
'cat' => $cat_id,
'showposts' => 3, //表示件数
'post__not_in' => array($post_id), //post__not_inで取得した投稿IDの記事を除外
)
);
if(have_posts()) :
?>
            <ul>
                <?php while (have_posts()) : the_post(); ?>
                <li>
                    <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
                        <div class="related">
                            <figure>
                                <!-- サムネイル画像がある場合はサムネイル画像を呼び出す -->
                                <?php if ( has_post_thumbnail() ): ?>
                                <?php echo get_the_post_thumbnail($post->ID); ?>
                                <!-- サムネイル画像がない場合は指定したNO-IMAGE画像を呼び出す -->
                                <?php else: ?>
                                <img src="https://placehold.jp/d1d1d1/ffffff/100x70.png?text=NO%20IMAGE" alt="NO IMAGE"
                                    title="NO IMAGE" />
                                <?php endif; ?>
                            </figure>
                            <p>
                                <?php the_title(); ?>
                            </p>
                        </div>
                    </a>
                </li>
                <?php endwhile; ?>
            </ul>
            <?php else : ?>
            <p>関連記事はありません</p>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</aside>

</div>
<!-- sidebar.phpここまで -->