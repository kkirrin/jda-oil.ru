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
                            <span class="opacity-60 text-bg-black">Новости</span>
                        </li>
                        <li class="opacity-60 text-bg-black">
                            /
                        </li>
                        <li class="breadcrumb__item">
                            <span class="opacity-60 text-bg-black">Название новости</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>  

        <section id="news" class="mt-[24px] mb-[120px]">
            <div class="container">
                <h3>Масло для водной техники</h3>
                <div class="md:max-w-[80%] max-w-[100%] text-gray">
                    Приближается лето, а вместе с ним и сезон морских приключений. Пора начинать готовить своё судно к выходу в море. Среди всех подготовительных этапов водного транспорта, замена масла в двигателе является одной из важнейших процедур. Зачастую у лодок стоят двухтактные двигатели, поэтому в этой статье разберём, что они из себя представляют и какое масло для них выбрать. В чем отличительные особенности масла для двухтактного двигателя?
                </div>
            </div>
        </section>

    </main>

<?php get_footer(); ?>