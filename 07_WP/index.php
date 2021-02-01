<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">

<!-- グーテンベルクの設定を読み込んでくれる -->
<?php wp_head(); ?>

<?php wp_body_open(); ?>
<header class="myhead mycontainer">

<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
<?php bloginfo( 'name' ); ?>
</a>

<p><?php bloginfo( 'description' ); ?></p>
</header>

<div class="mycols">
<div class="mycontent">

<?php if(have_posts()): while(have_posts()): the_post(); ?>

<article <?php post_class( 'mycontainer' ); ?>>

<div class="myposthead">
<?php the_category(); ?>
<h1><?php the_title(); ?></h1>

<time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>">
<?php echo esc_html( get_the_date() ); ?>
</time>
</div>

<?php the_content(); ?>

</article>

<?php endwhile; endif; ?>

<?php get_sidebar(); ?>

<?php wp_footer(); ?>
</body>
</html>