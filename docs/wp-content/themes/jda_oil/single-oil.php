<?php 
    /*
    Template name: card__oil__item
    Template Post Type: oil
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
                                    Каталог
                                </a>
                            </li>
                            <li class="breadcrumb__item">
                                <span class="opacity-60 text-bg-black">Гидравлическое масло JDA</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>  

            <section class="py-[24px] md:pb-[0]" data-scroll>
                <div class="container pt-[40px]">
                    <div class="flex justify-between items-center ">
                        <div>
                            <h2 class="md:text-[45px] text-[30px] text-dark-green"> Гидравлическое масло JDA</h2>
                        </div>
                    </div>

                    <div class="pt-[40px] md:pb-[60px] pb-[0px] flex md:flex-row flex-col gap-[40px]">
                        <div class="overflow-hidden border-dark-green border md:w-[600px] w-auto h-auto">
                            <img class="m-auto p-[10px]" src="<?php echo get_template_directory_uri() . '/src/img/main/card.png'; ?>" alt="">
                        </div>

                        <ul class="single-list">
                            <li><p>Код товара</p><span>111111</span></li>
                            <li><p>Состав</p><span>Минеральное</span></li>
                            <li><p>Объём</p><span>20 л</span></li>
                            <li><p>Вязкость SAE</p><span>5W-30</span></li>
                            <li><p>Класс пл API</p><span>CK-4/SN</span></li>
                        </ul>
                        <p class="text-end font-semibold text-dark-green"></p>
                    </div>
                </div>
            </section>

            <section class="md:pt-[100px] pt-[0px] md:pb-[100px] pb-[60px]" data-scroll>
                <div class="container md:pt-[40px] pt-[0px]">
                    <div class="flex justify-between items-center ">
                        <div class="py-[40px]">
                            <h2 class="md:text-[45px] text-[30px] text-dark-green"> Похожие товары </h2>
                        </div>
                    </div>
                    
                  <div>
                    <ul class="grid md:grid-cols-4 sm:grid-cols-2 grid-cols-1 gap-[20px]">
                        <li class="flex flex-col border border-dark-green gap-[10px]">
                            <img class="max-w-[200px] m-auto" src="<?php echo get_template_directory_uri() . '/src/img/main/card.png'; ?>" alt="">
                            <div class="border-t border-dark-green p-[10px]">
                                <p class="font-semibold text-dark-green mb-[10px]">Гидравлическое масло JDA</p>
                                <div class="flex justify-between">
                                    <ul class="flex flex-col gap-[10px]">
                                        <li>Код товара</li>
                                        <li>Состав</li>
                                        <li>Объём</li>
                                    </ul>
                                    <ul class="flex flex-col gap-[10px]">
                                        <li class="font-semibold text-dark-green">44444444</li>
                                        <li class="font-semibold text-dark-green">Минеральное</li>
                                        <li class="font-semibold text-dark-green">20л</li>
                                    </ul>
                                </div>
                            </div>
                            <p class="text-dark-green md:text-[20px] text-[16px] text-end border-t p-[5px]">Цена</p>
                            <div class="flex" style="width: -webkit-fill-available;">
                                <button style="width: -webkit-fill-available;" class="p-[10px] border-t text-dark-green bg-white text-center">В розницу</button>
                                <button style="width: -webkit-fill-available;" class="p-[10px] text-white text-center bg-green">Оптом</button>
                            </div>
                        </li>
                    </ul>
                  </div>

                </div>
            </section>
            

        </main>

<?php get_footer(); ?>