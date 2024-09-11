<?php 
    /*
    Template Name: каталог
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
                            <span class="opacity-60 text-bg-black">Каталог товаров</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>  

        <section class="mt-[24px] mb-[120px]" data-scroll="">
            <div class="container">  
                <div class="flex justify-between items-center ">
                    <div>
                        <h2 class="md:text-[45px] text-[30px] text-dark-green"> Каталог Товаров</h2>
                    </div>

                    <div class="flex flex-row gap-[20px]">
                        <div>
                            <select class="">Цена</select>
                        </div>
                        <div>
                            <select class="">Название</select>
                        </div>
                    </div>
                </div>
                    
                <div class="flex md:flex-row flex-col gap-[50px]">
                    <div class="md:w-1/3 w-auto">
                        <!-- <form action="" class="flex flex-col gap-[20px] md:pt-[60px] pt-[20px]">
                            <div class="flex gap-[10px] flex-col">
                                <label>Марка</label>
                                <input class="border border-dark-green py-[12px] px-[20px]" type="text" name="marka" placeholder="Введите марку">
                            </div>
                            <div class="flex gap-[10px] flex-col">
                                <label>Модель</label>
                                <input class="border border-dark-green py-[12px] px-[20px]" type="text" name="marka" placeholder="Введите модель">
                            </div>
                            <div class="flex gap-[10px] flex-col">
                                <label>Номер кузова</label>
                                <input class="border border-dark-green py-[12px] px-[20px]" type="text" name="marka" placeholder="Введите номер кузова">
                            </div>
                            <div class="flex gap-[10px] flex-col">
                                <label>Год</label>
                                <input class="border border-dark-green py-[12px] px-[20px]" type="date" name="marka" placeholder="Введите год">
                            </div>
                            <div class="flex gap-[10px] flex-col">
                                    <label>Номер двигателя</label>
                                <input class="border border-dark-green py-[12px] px-[20px]" type="text" name="marka" placeholder="Введите yомер двигателя">
                            </div>
                            <div class="my-[5px]">
                                <button style="width: -webkit-fill-available;" class="p-[10px] md:w-auto w-auto text-center bg-green text-white" type="submit" name="get_maslo">Подобрать</button>
                            </div>
                        </form> -->

                        <form action="https://jda-oil.ru/?page_id=52" method="POST" class="grid md:grid-cols-6 sm:grid-cols-3 grid-cols-1 gap-[20px] md:pt-[60px] pt-[20px] md:items-end items-normal">
                            <div class="flex gap-[10px] flex-col">
                                <label>Марка</label>
                                <input type="text" name="marka" class="border border-dark-green py-[12px] px-[20px] w-auto" placeholder="Введите марку">
                            </div>
                            <div class="flex gap-[10px] flex-col">
                                <label>Модель</label>
                                <input name="model" class="border border-dark-green py-[12px] px-[20px] w-auto"  placeholder="Введите модель">
                            </div>
                            <div class="flex gap-[10px] flex-col">
                                <label>Номер кузова</label>
                                <input class="border border-dark-green py-[12px] px-[20px]w-auto" type="text" name="kuzov" placeholder="Введите номер кузова">
                            </div>
                            <div class="flex gap-[10px] flex-col">
                                <label>Год</label>
                                <select class="border border-dark-green py-[12px] px-[20px] w-auto"" name="year">
                                    <option value="">Укажите год</option>
                                    <?php
                                        for($year = (int) date('Y'); $year >= 1950; $year--) {
                                    ?>
                                    <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="flex gap-[10px] flex-col">
                                <label>Номер двигателя</label>
                                <input name="dvig" class="border border-dark-green py-[12px] px-[20px] w-auto" type="text" placeholder="Введите номер двигателя">
                            </div>
                            <div class="my-[5px]" style="width: -webkit-fill-available;">
                                <button name="oil_search" style="width: -webkit-fill-available;" class="p-[10px] md:w-auto w-auto text-center bg-green text-white" type="submit" name="get_maslo">Подобрать</button>
                            </div>

                        </form>
                    </div>

                    <div class="md:w-10/12 w-auto">
                        <ul class="flex flex-col gap-[20px]">
                            <li class="flex md:flex-row flex-col gap-[20px] justify-between border-b border-dark-green pb-[30px]">
                                <div class="border border-dark-green p-[20px]">
                                    <img src="<?php echo get_template_directory_uri() . '/src/img/main/image 1.png'; ?>" alt="">
                                </div>
                                <div class="flex justify-between flex-col">
                                    <p class="text-dark-green md:text-[20px] text-[16px] font-semibold">Гидравлическое масло JDA</p>
                                    <div class="flex flex-col gap-[16px]">
                                        <ul class="flex flex-row gap-[40px] justify-between">
                                            <li>
                                                Код товара
                                            </li>
                                            <li>
                                                Состав 
                                            </li>
                                            <li>
                                                Объем  
                                            </li>
                                        </ul>
                                        <ul class="flex flex-row gap-[40px] justify-between">
                                            <li class="text-dark-green font-semibold">
                                                345678900 
                                            </li>
                                            
                                            <li class="text-dark-green font-semibold">
                                                Минеральное 
                                            </li>

                                            <li class="text-dark-green font-semibold">
                                                20л
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div>
                                    <p class="font-semibold md:text-[20px] text-[16px]">Цена хуле</p>
                                </div>
                                <div class="flex gap-[10px] md:flex-col flex-row">
                                    <button class="h-max w-[172px] p-[10px] text-center border border-dark-green bg-white text-dark-green">В розницу</button>
                                    <button class="h-max w-[172px] p-[10px] text-center bg-green text-white">Оптом</button>
                                </div>
                            </li> 
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        

    </main>
    
<?php get_footer(); ?>
