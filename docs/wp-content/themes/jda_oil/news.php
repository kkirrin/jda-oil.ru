<?php 
    /*
    Template Name: новости
    */
?>

<?php get_header(); ?>

    <main>
        <h1 class="visually-hidden">Скрытый заголовок</h1>

        <section class="pt-[20px]" data-scroll>         
            <div class="container">
                <div class="breadcrumb">
                    <ul class="breadcrumb__list flex items-center justify-start gap-2">
                        <li class="breadcrumb__item text-bg-black opacity-60 ">
                            <a href="/" class="font-medium">
                                Главная
                            </a>
                        </li>
                        <li class="opacity-60 text-bg-black">
                            /
                        </li>
                        <li class="breadcrumb__item">
                            <span class="opacity-60 text-bg-black">Новости</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>  

        <section id="news" class="mt-[24px] mb-[120px]">
            <div class="container">
                <h2 class="md:text-[45px] text-[30px] text-dark-green">Новости</h2> 

                <div class="news-list">
                    <?php
                        $my_posts = get_posts(array(
                            'numberposts' => 25,
                            'order' => 'title',
                            'orderby' => 'rand',
                            'post_type' => 'news',
                        ));
                        
                        foreach($my_posts as $post) {
                            echo '
                                <div class="news-list--item">
                                <a href="'. get_permalink($post->ID) .'">
                                    <img src="'. get_field('photo_news') .'" alt="" class="news-list--item__img">
                                    <date class="news-list--item__date">'. get_field('date_news') .'</date>
                                    <article class="news-list--item__name">'. get_field('name_news') .'</article>
                                    </div>
                                </a>';
                            };
                    ?>
                </div>
            </div>
        </section>

    </main>
    
<?php get_footer(); ?>