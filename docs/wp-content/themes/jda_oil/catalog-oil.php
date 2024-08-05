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
                
                <form action="https://jda-oil.ru/?page_id=52" method="POST" class="grid md:grid-cols-6 sm:grid-cols-3 grid-cols-1 gap-[20px] md:pt-[60px] pt-[20px] md:items-end items-normal">
                    <div class="flex gap-[10px] flex-col">
                        <label class="text-green">Марка</label>
                        <input value="<?php echo isset($_POST['marka']) ? $_POST['marka'] : ''; ?>" type="text" name="marka" class=" text-green border border-dark-green py-[12px] px-[20px] w-auto" placeholder="Введите марку">
                    </div>
                    <div class="flex gap-[10px] flex-col">
                        <label class="text-green">Модель</label>
                        <input value="<?php echo isset($_POST['model']) ? $_POST['model'] : ''; ?>" name="model" class=" text-green border border-dark-green py-[12px] px-[20px] w-auto"  placeholder="Введите модель">
                    </div>
                    <div class="flex gap-[10px] flex-col">
                        <label class="text-green">Номер кузова</label>
                        <input value="<?php echo isset($_POST['kuzov']) ? $_POST['kuzov'] : ''; ?>" class=" text-green border border-dark-green py-[12px] px-[20px] w-auto" type="text" name="kuzov" placeholder="Введите номер кузова">
                    </div>
                    <div class="flex gap-[10px] flex-col text-green">
                        <label class="text-green">Год</label>
                        <select class="border border-dark-green py-[12px] px-[20px] w-auto text-green " name="year">
                            <option class="text-green" value="">Укажите год</option>
                            <?php
                                for($year = (int) date('Y'); $year >= 1950; $year--) {
                            ?>
                            <option value="<?php echo $year; ?>" <?php echo isset($_POST['year']) && $_POST['year'] == $year ? 'selected' : '';?>><?php echo $year; ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="flex gap-[10px] flex-col">
                        <label class="text-green">Номер двигателя</label>
                        <input value="<?php echo isset($_POST['dvig']) ? $_POST['dvig'] : ''; ?>" name="dvig" class=" text-green border border-dark-green py-[12px] px-[20px] w-auto" type="text" placeholder="Введите номер двигателя">
                    </div>
                    <div class="my-[5px]" style="width: -webkit-fill-available;">
                        <button name="oil_search" style="width: -webkit-fill-available;" class="p-[10px] md:w-auto w-auto text-center bg-green text-white" type="submit" name="get_maslo">Подобрать</button>
                    </div>

                </form>

                <table class="table">
                    <tbody>
                        <tr class="data-row">   
                            <td>Двигатель</td>
                            <td>
                            <ul>
                                <li>Марка</li>
                                <li>Модель</li>
                                <li>Номер кузова</li>
                                <li>Год</li>
                                <li>Номер двигателя</li>
                            </ul> 
                            </td>
                            <td>
                            <ul>
                                <li><?php echo isset($_POST['marka']) ? $_POST['marka'] : '-'; ?></li>
                                <li><?php echo isset($_POST['model']) ? $_POST['model'] : '-'; ?></li>
                                <li><?php echo isset($_POST['kuzov']) ? $_POST['kuzov'] : ''; ?></li>
                                <li><?php echo isset($_POST['year']) && $_POST['year'] == $year ? 'selected' : '-';?></li>
                                <li><?php echo isset($_POST['dvig']) ? $_POST['dvig'] : '-'; ?></li>
                            </ul> 
                            </td>
                        </tr>
                        <tr class="data-row">
                            <td>Моторное масло</td>
                            <td>
                            <ul>
                                <li>Классификация по API </li>
                                <li>Классификация по SAE </li>
                                <li>Объем с фильтром</li>
                            </ul> 
                            </td>
                            <td>
                            <ul>
                                <li>-</li>
                                <li>-</li>
                                <li>-</li>
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
                                <li>-</li>
                                <li>-</li>
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
                                <li>-</li>
                                <li>-</li>
                                <li>-</li>
                                <li>-</li>
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
                                <li>-</li>
                                <li>-</li>
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
                                <li>-</li>
                                <li>-</li>
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
                                <li>-</li>
                                <li>-</li>
                                <li>-</li>
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
                    <?php
                        if (isset($_POST['recommend_oil']) && !empty($_POST['recommend_oil'])) {
                            $viscosities = $_POST['recommend_oil'];

                            $products = wc_get_products(array(
                                'limit' => -1,
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'pa_viscosity',
                                        'field'    => 'slug',
                                        'terms'    => $viscosities, 
                                        'operator' => 'IN', 
                                    ),
                                ),
                            ));

                            foreach($products as $product) {
                            
                                $product_image = wp_get_attachment_url($product->get_image_id());
                                $product_link = $product->get_permalink();
                                $product_name = $product -> get_name();

                                // echo '<pre>';
                                // var_dump($products);
                                // echo '</pre>';
                                echo '<a href="'. $product_link .'">';
                                echo ' <li class="flex flex-col border border-dark-green gap-[10px]">';
                                echo '   <img class="max-w-[200px] m-auto" src="'. $product_image .'" alt="">';
                                echo '    <div class="border-t border-dark-green p-[10px]">';
                                echo '      <p class="font-semibold text-dark-green mb-[10px]">'. $product_name .'</p>';
                                echo '     </div>';
                                echo ' </li>';
                                echo '</a>';
                            }

                        } else {
                            echo 'Ничего не найдено';
                        }
                        ?>
                  
                </ul>
            </div>
        </section>
        

    </main>

<?php get_footer(); ?>