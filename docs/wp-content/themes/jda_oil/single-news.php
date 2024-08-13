<?php 
    /*
    Template name: card__news__item
    Template Post Type: news
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
                            <a href="?page_id=17" class="font-medium">
                                <span class="opacity-60 text-bg-black">Новости</span>
                            </a>
                        </li>
                        <li class="opacity-60 text-bg-black">
                            /
                        </li>
                        <li class="breadcrumb__item">
                            <?php echo get_field('name_news'); ?>
                        </li>
                    </ul>
                </div>
            </div>
        </section>  

        <section id="news" class="mt-[24px] mb-[120px]">
            <div class="container">
                <h3><?php echo get_field('name_news'); ?></h3>
                <div class="md:max-w-[80%] max-w-[100%]">
                    <?php echo the_content(); ?>
                </div>
            </div>
        </section>

    </main>

<?php get_footer(); ?>