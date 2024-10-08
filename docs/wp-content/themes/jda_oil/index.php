<?php
/*
    Template Name: главная
    */
?>



<?php get_header(); ?>

<main>
    <h1 class="visually-hidden">Скрытый заголовок</h1>

    <section class="main-swiper overflow-hidden container__special" style="padding-top: 20px;" data-scroll>
        <div class="main-wrapper overflow-hidden">
            <div class="main-item relative">
                <!-- <div class="swiper-pagination"></div> -->

                <div class="swiper-wrapper tech-class">
                    <?php
                    $my_posts = get_posts(array(
                        'numberposts' => 25,
                        'order' => 'title',
                        'orderby' => 'rand',
                        'post_type' => 'slide',
                    ));

                    if (!empty($my_posts)) {
                        foreach ($my_posts as $post) :
                            // Получаем фотографии и названия баннеров
                            $photos = get_field('photo_banner');


                            // Проверяем, что оба массива не пустые и имеют одинаковое количество элементов
                            if (!empty($photos)) {
                                // Перебираем массив фотографий
                                foreach ($photos as $key => $photo) {
                                    // Получаем соответствующее название баннера


                                    // Отображаем слайд
                                    echo '
                    <div class="swiper-slide relative bg-black -z-10" style="background-image: url(' . esc_url($photo["url"]) . '); background-repeat: no-repeat; background-size: center; background-size: cover;">
                        <div class="container container__for__sliders text-5xl md:text-9xl md:pt-[196px] pt-[176px] relative z-10">
                            <h2 class="text-start text-white z-10 font-medium md:text-[150px] text-[50px] uppercase">
                            </h2>
                        </div>
                    </div>';
                                }
                            }
                        endforeach;
                    }
                    ?>



                </div>
                <div class="swiper-wrapper tech-class-s">
                    <?php
                    $my_posts = get_posts(array(
                        'numberposts' => 25,
                        'order' => 'title',
                        'orderby' => 'rand',
                        'post_type' => 'slide',
                    ));

                    if (!empty($my_posts)) {
                        foreach ($my_posts as $post) :
                            $photos_s = get_field('photo_banner_s');

                            // Форматируем только один слайд для каждого изображения
                            if (!empty($photos_s)) {
                                // Добавляем только один слайд для каждого изображения
                                foreach ($photos_s as $key => $photo) {
                                    echo '
                        <div class="swiper-slide relative bg-black -z-10" style="background-image: url(' . $photo["url"] . '); background-repeat: no-repeat; background-size: cover;">
                            <div class="container text-5xl md:text-9xl md:pt-[196px] pt-[176px] relative z-10" style="min-height: 400px;">
                                <h2 class="text-start text-white z-10 font-medium md:text-[150px] text-[50px] uppercase">
                                </h2>
                            </div>
                        </div>';
                                }
                            }
                        endforeach;
                    }
                    ?>
                </div>

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
        <div class="bg-green py-[12px] md:hidden sm:hidden block">
            <p class="text-white text-center">
                <?php echo get_field('promo_header', 'option'); ?>
            </p>
        </div>
    </section>

    <section class="md:py-[30px] py-[80px]" data-scroll>
        <div class="container">
            <div class="bg-green py-[10px]">
                <h3 class="text-white text-center md:text-[40px] text-[24px]">Подобрать масло</h3>
            </div>

            <form action="https://jda-oil.ru/?page_id=52" method="POST" class="grid md:grid-cols-6 sm:grid-cols-3 grid-cols-1 gap-[20px] md:pt-[60px] pt-[20px] md:items-end items-normal">
                <div class="flex gap-[10px] flex-col">
                    <label class="text-green">Марка</label>
                    <select name="marka" class="border border-dark-green py-[12px] px-[20px] w-auto text-green">
                        <option value="">Марка</option>
                    </select>
                </div>
                <div class="flex gap-[10px] flex-col">
                    <label class="text-green">Модель</label>
                    <select name="model" class="border border-dark-green py-[12px] px-[20px] w-auto text-green">
                        <option value="">Модель</option>

                    </select>
                </div>
                <div class="flex gap-[10px] flex-col">
                    <label class="text-green">Номер кузова</label>
                    <select name="kuzov" class="border border-dark-green py-[12px] px-[20px] w-auto text-green">
                        <option value="">Номер кузова</option>

                    </select>
                </div>
                <div class="flex gap-[10px] flex-col text-green">
                    <label class="text-green">Год</label>
                    <select name="year" class="border border-dark-green py-[12px] px-[20px] w-auto text-green">
                        <option value="">Год</option>
                        <?php
                        for ($year = (int) date('Y'); $year >= 1950; $year--) {
                        ?>
                            <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="flex gap-[10px] flex-col">
                    <label class="text-green">Номер двигателя</label>
                    <select name="dvig" class="border border-dark-green py-[12px] px-[20px] w-auto text-green">
                        <option value="">Номер двигателя</option>
                    </select>
                </div>
                <div style="width: -webkit-fill-available;">
                    <button name="oil_search" style="width: -webkit-fill-available;" class="btn-green p-[13px] md:w-auto w-auto text-center bg-green text-white" type="submit" name="get_maslo">Подобрать</button>
                </div>

            </form>
        </div>
    </section>

    <section id="oil__main" data-scroll>
        <div class="container">
            <div class="flex justify-between items-center flex-wrap gap-[20px]">
                <div>
                    <h3>Моторное масло</h3>
                </div>
                <div>
                    <a href="/?page_id=101" class="border border-dark-green p-[10px] flex items-center gap-[16px] btn-white btn-white--watch">
                        <span class="text-dark-green">Смотреть все</span>
                        <svg width="38" height="13" viewBox="0 0 38 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M37.0303 7.03033C37.3232 6.73744 37.3232 6.26256 37.0303 5.96967L32.2574 1.1967C31.9645 0.903806 31.4896 0.903806 31.1967 1.1967C30.9038 1.48959 30.9038 1.96447 31.1967 2.25736L35.4393 6.5L31.1967 10.7426C30.9038 11.0355 30.9038 11.5104 31.1967 11.8033C31.4896 12.0962 31.9645 12.0962 32.2574 11.8033L37.0303 7.03033ZM0.5 7.25H36.5V5.75H0.5V7.25Z" fill="#0D2B00" />
                        </svg>

                    </a>
                </div>
            </div>

            <div class="oil__list">

                <?php
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => 8,
                    'orderby' => 'rand',
                );




                $query = new WP_Query($args);
                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();
                        $terms = get_the_terms($post->ID, 'product_cat');

                        $product = wc_get_product(get_the_ID());
                        $product_name = $product->get_name();
                        $product_sku = $product->get_sku();
                        $product_image = wp_get_attachment_url($product->get_image_id());
                        $product_price = $product->get_price_html();
                        $product_link = $product->get_permalink();

                        $product_class = $product->get_attribute('pa_class');
                        $product_compound = $product->get_attribute('pa_compound');
                        $product_viscosity = $product->get_attribute('pa_viscosity');
                        $product_volume = $product->get_attribute('pa_volume');

                        echo '  <div class="oil__list-item" style="border: 1px solid rgba(128, 128, 128, .16);">';
                        echo '      <a href="' . $product_link . '">';
                        echo '          <img class="item-img" src="' . $product_image . '" alt="">';
                        echo '      </a>';
                        echo '      <div class="item-content">';
                        echo '          <p class="item-title">' . $product_name . '</p>';
                        echo '              <div class="item-list">';
                        echo '                 <ul class="list--first">';
                        echo '                      <li>Класс</li>';
                        echo '                      <li>Состав</li>';
                        echo '                      <li>Объём</li>';
                        echo '                 </ul>';
                        echo '                 <ul class="list--second">';
                        echo '                      <li>' . $product_class . '</li>';
                        echo '                      <li>' . $product_compound . '</li>';
                        echo '                      <li>' . $product_volume . '</li>';
                        echo '                 </ul>';
                        echo '              </div>';

                        if (is_user_logged_in()) {
                            echo '              <p class="oil__list-item--price">' . $product_price . '</p>';
                        } else {
                            echo '<a href="#popup1" class="popup-link p-[10px] text-center" style="width: -webkit-fill-available;">Войти, чтобы увидеть цену</a>';
                        }


                        echo '              <div class="oil__list-item--buttons">';
                        echo '                  <a href="#popup6" class="popup-link btn-white p-[10px] bg-white text-center" style="width: -webkit-fill-available;">В розницу</a>';

                        if (is_user_logged_in()) {
                            echo '              <a href="' . $product_link . '" style="width: -webkit-fill-available;" class="btn-green p-[10px] text-white text-center bg-green bg-green--watch">Оптом</a>';
                        } else {
                            echo '              <a href="#popup1" style="width: -webkit-fill-available;" class="popup-link btn-green p-[10px] text-white text-center bg-green bg-green--watch">Оптом</a>';
                        }

                        echo '              <div class="modal_lk" style="box-shadow: 0px 4px 17px 0px rgba(0, 0, 0, 0.1);">';
                        echo '                  <ul class="modal_list">';
                        echo '                       <a href="popup1" class="text-black text-base hover:text-green transition-all popup-link">Войти</a>';
                        echo '                      <a href="popup2" class="text-black text-base hover:text-green transition-all popup-link">Зарегистрироваться</a>';
                        echo '                      </ul>';
                        echo '              </div>';
                        echo '              </div>';
                        echo '          </div>';
                        echo '      </div>';
                    }
                }
                wp_reset_postdata(); // Reset the post data
                ?>
            </div>
        </div>
    </section>


    <section id="about" class="md:my-[120px] my-[100px] border border-dark-green" style="background-color: rgb(245, 246, 244);">
        <div class="container">
            <h3 class="md:pt-[100px] pt-[80px]">О производителе</h3>
            <div class="flex gap-[20px] md:flex-row flex-col mt-[40px]">
                <div class="md:w-1/2 w-full border border-dark-green px-[70px] flex justify-center">
                    <img class="md:h-[400px] h-auto" src="<?php echo get_template_directory_uri() . '/src/img/main/about.png'; ?>" alt="">
                </div>
                <div class="md:w-1/2 w-full border border-dark-green md:p-[70px] p-[30px]">
                    <p class="text-[16px] text-dark-green pb-[10px]">
                        JDA — известный экспортёр в области японских автомобильных запчастей и смазочных материалов. Компания, вышедшая на рынок в 1972 году, изначально занималась продажей подержанных автомобилей и спецтехники.
                    </p>
                    <p class="text-[16px] text-dark-green">
                        Сегодня JDA Oil — один из ведущих японских брендов, предлагающий различные виды моторного масла, индустриального масла, автомобильных фильтров и средств по уходу за автомобилем.
                    </p>
                </div>
            </div>

            <div class="py-[80px]">
                <!-- <img class="" src="<?php echo get_template_directory_uri() . '/src/img/main/Frame 124.png'; ?>" alt=""> -->
                <!-- <img class="md:block hidden absolute right-0" src="<?php echo get_template_directory_uri() . '/src/img/icons/about_bg_right.png'; ?>" alt=""> -->
                <!-- <div class="md:pt-[106px] md:pb-[76px] md:px-[80px] p-[20px] pt-[10px] pb-[10px] md:relative absolute"> -->

                <?php
                $my_posts = get_posts(array(
                    'post_type' => 'promotion',
                ));
                if (!empty($my_posts)) {
                    foreach ($my_posts as $post) {
                        echo '
                                    <img class="" src="' . get_field('promo_img') . '" alt="">;
                                ';
                    }
                }

                ?>

                <?php
                // $my_posts = get_posts(array(
                //     'post_type' => 'promotion',
                // ));      
                // if (!empty($my_posts)) {
                //     foreach ($my_posts as $post) {
                //         echo '
                //             <p class="md:mb-[40px] mb-[20px] z-10 text-dark-green md:text-[89px] sm:text-[60px] text-[37px] border border-dark-green md:px-[50px] md:py-[10px] px-[46px] py-[24px] md:w-max w-auto">' . get_field('name_promo', $post->ID) . ':</p>
                //             <p class="text-dark-green z-10 md:text-[65px] sm:text-[30px] text-[25px] md:max-w-[700px] w-auto">' . get_field('text_promotion', $post->ID) . '</p>
                //         ';
                //     }
                // }

                ?>
                <!-- </div> -->
                <!-- <img style="width: -webkit-fill-available;" class="md:hidden block" src="<?php echo get_template_directory_uri() . '/src/img/main/about_s.png'; ?>" alt=""> -->
            </div>

        </div>
    </section>


    <section id="news" class="md:my-[120px] my-[100px]">
        <div class="container">
            <div class="flex justify-between items-center flex-wrap">
                <div>
                    <h3>Новости</h3>
                </div>
                <div>
                    <a href="/?page_id=17" class="border border-dark-green p-[10px] flex items-center gap-[16px] btn-white btn-white--watch">
                        <span class="text-dark-green">Смотреть все</span>
                        <svg width="38" height="13" viewBox="0 0 38 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M37.0303 7.03033C37.3232 6.73744 37.3232 6.26256 37.0303 5.96967L32.2574 1.1967C31.9645 0.903806 31.4896 0.903806 31.1967 1.1967C30.9038 1.48959 30.9038 1.96447 31.1967 2.25736L35.4393 6.5L31.1967 10.7426C30.9038 11.0355 30.9038 11.5104 31.1967 11.8033C31.4896 12.0962 31.9645 12.0962 32.2574 11.8033L37.0303 7.03033ZM0.5 7.25H36.5V5.75H0.5V7.25Z" fill="#0D2B00" />
                        </svg>

                    </a>
                </div>
            </div>

            <div class="news-list">
                <?php
                $my_posts = get_posts(array(
                    'numberposts' => 25,
                    'order' => 'title',
                    'orderby' => 'rand',
                    'post_type' => 'news',
                ));

                foreach ($my_posts as $post) {
                    echo '
                                <a href="' . get_permalink($post->ID) . '">
                                    <div class="news-list--item">
                                        <div class="overflow-hidden">
                                            <img src="' . get_field('photo_news') . '" alt="" class="news-list--item__img">
                                        </div>
                                        <date class="news-list--item__date">' . get_field('date_news') . '</date>
                                        <article class="news-list--item__name">' . get_field('name_news') . '</article>
                                    </div>
                                </a>';
                };
                ?>

            </div>
        </div>
    </section>
</main>



<?php get_footer(); ?>