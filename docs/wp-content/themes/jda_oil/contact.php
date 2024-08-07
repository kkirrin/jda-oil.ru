<?php 
    /*
    Template Name: контакты
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
                                Контакты
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>  

        <section class="section__map">
            <div class="container">
                <h2 class="md:text-[45px] text-[30px] text-black">
                    Контакты
                </h2>

                <div class="md:pt-[40px] pt-[20px] contact__map flex md:flex-row flex-col gap-[40px]">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A4996b586c219a113a4f8647c2e7f76dfcc84f0e18ec889c1d6e8310351515af8&amp;width=700&amp;height=432&amp;lang=ru_RU&amp;scroll=true"></script>                                           
                    <div class="flex flex-col gap-[10px]">
                        <p class="text-base font-semibold pb-[10px] mb-[13px] text-line">Контактная информация:</p>
                        <ul class="flex flex-col gap-[12px]">
                            <li class="text-base"> г. Находка, ул. Ленинградская, д. 13В</li>
                            <li class="text-base">+7 (984) 192‒22‒17</li>
                            <li class="text-base">  Пн — СБ с 10:00 до 18:00/li>
                        </ul>

                        <p style="padding-top: 60px;" class="text-base font-semibold pb-[10px] mb-[13px] text-line">Реквизиты:</p>
                            <ul class="single-list--contact" style="width: -webkit-fill-available;">
                                <li><p>ИНН</p><span>2508140749</span></li>
                                <li><p>ОГРН</p><span>1212500015970</span></li>
                            </ul>
                    </div>
                </div>
            </div>
        </section>
        
        
    </main>

<?php get_footer(); ?>