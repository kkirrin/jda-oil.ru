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
                    Приближается лето, а вместе с ним и сезон морских приключений. Пора начинать готовить своё судно к выходу в море. Среди всех подготовительных этапов водного транспорта, замена масла в двигателе является одной из важнейших процедур. Зачастую у лодок стоят двухтактные двигатели, поэтому в этой статье разберём, что они из себя представляют и какое масло для них выбрать.
                </div>
                <p class="pt-[10px]">
                    В чем отличительные особенности масла для двухтактного двигателя?
                </p>

                <div class="flex md:flex-row flex-col gap-[20px] pt-[40px]">
                    <div class="md:w-2/3 w-auto">
                        <img src="<?php echo get_template_directory_uri() . '/src/img/main/Rectangle 22.png'; ?>" alt="" class="">
                    </div>
                    <div class="md:1/3 w-auto h-auto">
                        <img src="<?php echo get_template_directory_uri() . '/src/img/main/Frame 245.png'; ?>" alt="" class="h-max">
                    </div>
                </div>
            </div>  
        </section>

    </main>


<?php get_footer(); ?>