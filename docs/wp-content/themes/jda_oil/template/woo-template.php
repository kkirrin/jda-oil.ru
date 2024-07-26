<?php
/*
Template Name: Woocommerce страницы - шаблон
*/
?>
<?php get_header(); ?>


<main class="inner-page-main lk">
    <div class="container">
        <h1>
            <?php the_title(); ?>
        </h1>
        <?php the_content(); ?>
    </div>
</main>

<?php get_footer(); ?>