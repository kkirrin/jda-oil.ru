<?php
/*
    Template Name: о компании
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
                    <li class="opacity-60 text-bg-black">
                        <a href="/" class="font-medium">
                            О компании
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="pt-[24px] pb-[100px]" data-scroll>
        <div class="container">
            <h2 class="md:text-[45px] text-[30px] text-dark-green">О компании</h2>
            <div class="pt-[20px] md:max-w-[70%] max-w-full">
                <?php echo the_content(); ?>
            </div>



        </div>
    </section>

</main>


<?php get_footer(); ?>