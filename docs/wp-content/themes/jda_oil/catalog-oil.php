<?php 
    /*
    Template Name: каталог масел
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
                            <span class="opacity-60 text-bg-black">Каталог масел</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>  



        <section class="mt-[24px] mb-[120px]">
            <div class="container">         
                <h2 class="md:text-[45px] text-[30px] text-dark-green"> Подбор масел</h2> 
                
                <form action="" class="flex md:flex-row flex-col gap-[20px] md:pt-[30px] pt-[20px] md:items-end items-normal">
                    <div class="flex gap-[10px] flex-col">
                        <label>Марка</label>
                        <input class="border border-dark-green py-[12px] px-[20px] md:w-[224px] w-auto" type="text" name="marka" placeholder="Введите марку">
                    </div>
                    <div class="flex gap-[10px] flex-col">
                        <label>Модель</label>
                        <input class="border border-dark-green py-[12px] px-[20px] md:w-[224px] w-auto" type="text" name="marka" placeholder="Введите модель">
                    </div>
                    <div class="flex gap-[10px] flex-col">
                        <label>Номер кузова</label>
                        <input class="border border-dark-green py-[12px] px-[20px] md:w-[224px] w-auto" type="text" name="marka" placeholder="Введите номер кузова">
                    </div>
                    <div class="flex gap-[10px] flex-col">
                        <label>Год</label>
                        <input class="border border-dark-green py-[12px] px-[20px] md:w-[224px] w-auto" type="date" name="marka" placeholder="Введите год">
                    </div>
                    <div class="flex gap-[10px] flex-col">
                            <label>Номер двигателя</label>
                        <input class="border border-dark-green py-[12px] px-[20px] md:w-[224px] w-auto" type="text" name="marka" placeholder="Введите yомер двигателя">
                    </div>
                    <div class="my-[5px]">
                        <button style="width: -webkit-fill-available;" class="p-[10px] md:w-auto w-auto text-center bg-green text-white" type="submit" name="get_maslo">Подобрать</button>
                    </div>

                </form>

                <table class="table">
                    <tbody>
                        <tr class="data-row">   
                            <td>Двигатель</td>
                            <td>
                            <ul>
                                <li>1</li>
                                <li>2</li>
                                <li>3</li>
                            </ul> 
                            </td>
                            <td>
                            <ul>
                                <li>1</li>
                                <li>2</li>
                                <li>3</li>
                            </ul> 
                            </td>
                        </tr>
                        <tr class="data-row">
                            <td>Моторное масло</td>
                            <td>
                            <ul>
                                <li>Номер </li>
                                <li>Объем </li>
                                <li>Тип трансмиссии</li>
                            </ul> 
                            </td>
                            <td>
                            <ul>
                                <li>1</li>
                                <li>2</li>
                                <li>3</li>
                            </ul> 
                            </td>
                        </tr>
                        <tr class="data-row">
                            <td>Масло для МПК</td>
                            <td>
                            <ul>
                                <li>Объем </li>
                                <li>Требуемое масло</li>
                            </ul> 
                            </td>
                            <td>
                            <ul>
                                <li>1</li>
                                <li>2</li>
                            </ul> 
                            </td>
                        </tr>
                        <tr class="data-row">
                            <td>Жидкость для АКП, для вариаторов, для АКП с встроенными дифференциалом </td>
                            <td>
                            <ul>
                                <li>Объем </li>
                                <li>Idemitsu USA</li>
                                <li>Универсальная жидкость Idemitsu</li>
                                <li>Универсальная жидкость Autobacs</li>
                                </ul> 
                            </td>
                            <td>
                            <ul>
                                <li>1 </li>
                                <li>2</li>
                                <li>3</li>
                                <li>4</li>
                                </ul> 
                            </td>
                        </tr>
                        <tr class="data-row">
                            <td>Жидкость и масло для раздаточной коробки </td>
                            <td>
                            <ul>
                                <li>Объем</li>
                                <li>Требуемое масло</li>
                            </ul> 
                            </td>
                            <td>
                            <ul>
                                <li>1</li>
                                <li>2</li>
                            </ul> 
                            </td>
                        </tr>
                        <tr class="data-row">
                            <td>Масло для дифференциала/передний привод</td>
                            <td>
                            <ul>
                                <li>Объем</li>
                                <li>Требуемое масло</li>
                            </ul> 
                            </td>
                            <td>
                            <ul>
                                <li>1</li>
                                <li>2</li>
                            </ul> 
                            </td>
                        </tr>
                        <tr class="data-row">
                            <td>Масло для дифференциала/задний привод </td>
                            <td>
                            <ul>
                                <li>Объем</li>
                                <li>Требуемое масло</li>
                            </ul> 
                            </td>
                            <td>
                            <ul>
                                <li>1</li>
                                <li>2</li>
                                <li>3</li>
                            </ul> 
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                
            </div>
        </section>
        <section class="py-[30px]" data-scroll>
            <div class="container">
                <h2 class="md:text-[45px] text-[30px] text-dark-green"> Рекомендованная продукция</h2> 
                <ul class="grid md:grid-cols-4 sm:grid-cols-2 grid-cols-1 pt-[30px]">
                    <li class="flex flex-col border border-dark-green gap-[10px]">
                        <img class="max-w-[200px] m-auto" src="<?php echo get_template_directory_uri() . '/src/img/main/card.png'; ?>" alt="">
                        <div class="border-t border-dark-green p-[10px]">
                            <p class="font-semibold text-dark-green mb-[10px]">IDEMITSU ZEPRO ECO MEDALIST 0W-20 SN, ILSAC GF-5</p>
                            
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        

    </main>

<?php get_footer(); ?>