<?php 
    /*
    Template Name: главная
    */
?>


<?php get_header(); ?>

    <main>
        <h1 class="visually-hidden">Скрытый заголовок</h1>

        <section class="main-swiper overflow-hidden" data-scroll>
            <div class="main-wrapper overflow-hidden md:h-[86vh] h-[60vh]">
                <div class="main-item relative">
                    <div class="swiper-pagination"></div>
                    
                    <div class="swiper-wrapper">
                        <?php
                            $my_posts = get_posts(array(
                                'numberposts' => 25,
                                'order' => 'title',
                                'orderby' => 'rand',
                                'post_type' => 'slide',
                            ));

                            if(!empty($my_posts)) {
                                foreach($my_posts as $post) :
                                    $photos = get_field('photo_banner');
                                    $banner_name = get_field('name_banner'); 

                                    if(!empty($photos)) {
                                        foreach($photos as $key => $photo) { 
                                            foreach($banner_name as $name)
                                            echo '
                                                <div class="swiper-slide relative bg-black -z-10  h-screen" style="background-image: url('. $photo["url"] .'); background-repeat: no-repeat; background-size: cover;">
                                                    <div class="container text-5xl md:text-9xl md:pt-[196px] pt-[176px] relative z-10">
                                                        <h2 class="text-start text-white z-10 font-medium md:text-[150px] text-[50px] uppercase">
                                                            ' . $name["name_banner"] . '
                                                        </h2>
                                                    </div>
                                                </div>';
                                        }
                                    }
                                endforeach;
                            };
                        ?>
                      
                        
                    </div>
                </div>
            </div>
            <div class="bg-green py-[12px] md:hidden sm:hidden block">
                <p class="text-white text-center">Летняя акция — скидка 10% на заказы конкретной категории</p>
            </div>
        </section>


        <section class="md:py-[30px] py-[80px]" data-scroll>
            <div class="container">
                <div class="bg-green py-[10px]">
                    <h3 class="text-white text-center md:text-[40px] text-[24px]">Подобрать масло</h3 >
                </div>
                
                <form action="" class="grid md:grid-cols-6 sm:grid-cols-3 grid-cols-1 gap-[20px] md:pt-[60px] pt-[20px] md:items-end items-normal">
                    <div class="flex gap-[10px] flex-col">
                        <label>Марка</label>
                        <input class="border border-dark-green py-[12px] px-[20px] w-auto" type="text" name="marka" placeholder="Введите марку">
                    </div>
                    <div class="flex gap-[10px] flex-col">
                        <label>Модель</label>
                        <input class="border border-dark-green py-[12px] px-[20px] w-auto" type="text" name="marka" placeholder="Введите модель">
                    </div>
                    <div class="flex gap-[10px] flex-col">
                        <label>Номер кузова</label>
                        <input class="border border-dark-green py-[12px] px-[20px]w-auto" type="text" name="marka" placeholder="Введите номер кузова">
                    </div>
                    <div class="flex gap-[10px] flex-col">
                        <label>Год</label>
                        <input class="border border-dark-green py-[12px] px-[20px] w-auto" type="date" name="marka" placeholder="Введите год">
                    </div>
                    <div class="flex gap-[10px] flex-col">
                            <label>Номер двигателя</label>
                        <input class="border border-dark-green py-[12px] px-[20px] w-auto" type="text" name="marka" placeholder="Введите yомер двигателя">
                    </div>
                    <div class="my-[5px]" style="width: -webkit-fill-available;">
                        <button style="width: -webkit-fill-available;" class="p-[10px] md:w-auto w-auto text-center bg-green text-white" type="submit" name="get_maslo">Подобрать</button>
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
                        <a href="/?page_id=52" class="border border-dark-green p-[10px] flex items-center gap-[16px]">
                            <span class="text-dark-green">Смотреть все</span>
                            <svg width="38" height="13" viewBox="0 0 38 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M37.0303 7.03033C37.3232 6.73744 37.3232 6.26256 37.0303 5.96967L32.2574 1.1967C31.9645 0.903806 31.4896 0.903806 31.1967 1.1967C30.9038 1.48959 30.9038 1.96447 31.1967 2.25736L35.4393 6.5L31.1967 10.7426C30.9038 11.0355 30.9038 11.5104 31.1967 11.8033C31.4896 12.0962 31.9645 12.0962 32.2574 11.8033L37.0303 7.03033ZM0.5 7.25H36.5V5.75H0.5V7.25Z" fill="#0D2B00"/>
                            </svg>
                                
                        </a>
                    </div>
                </div>

                <div class="oil__list">

                    <?php                         
                        $args = array(
                            'post_type' => 'product'
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

                                echo '<a href="'. $product_link .'">';
                                echo '  <div class="oil__list-item">';
                                echo '      <img class="item-img" src="'. $product_image .'" alt="">';
                                echo '          <div class="item-content">';
                                echo '              <p class="item-title">'. $product_name .'</p>';
                                echo '              <div class="item-list">';
                                echo '                  <ul class="list--first">';
                                echo '                      <li>Класс</li>';
                                echo '                      <li>Состав</li>';
                                echo '                      <li>Объём</li>';
                                echo '                  </ul>';
                                echo '                  <ul class="list--second">';
                                echo '                      <li>'. $product_class .'</li>';
                                echo '                      <li>'. $product_compound .'</li>';
                                echo '                      <li>'. $product_volume .'</li>';
                                echo '                  </ul>';
                                echo '              </div>';
                                echo '              <p class="oil__list-item--price">'. $product_price .'</p>';
                                echo '              <div class="oil__list-item--buttons">';
                                echo '                  <button style="width: -webkit-fill-available;" class="p-[10px] text-dark-green bg-white text-center">В розницу</button>';
                                echo '                  <button style="width: -webkit-fill-available;" class="p-[10px] text-white text-center bg-green">Оптом</button>';
                                echo '              </div>';
                                echo '          </div>';
                                echo '      </div>';
                                echo '  </a>';


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

                <div class="md:my-[120px] my-[80px] relative border border-dark-green">
                    <img class="md:block hidden absolute left-0 top-0" src="<?php echo get_template_directory_uri() . '/src/img/icons/about_bg.png'; ?>" alt="">
                    <img class="md:block hidden absolute right-0" src="<?php echo get_template_directory_uri() . '/src/img/icons/about_bg_right.png'; ?>" alt="">
                    <div class="md:pt-[106px] md:pb-[76px] md:px-[80px] p-[20px] pt-[10px] pb-[10px]">

                    <?php
                        $my_posts = get_posts(array(
                            'post_type' => 'promotion',
                        ));      
                        if (!empty($my_posts)) {
                            foreach ($my_posts as $post) {
                                echo '
                                    <p class="md:mb-[40px] mb-[20px] z-10 text-dark-green md:text-[89px] sm:text-[60px] text-[37px] border border-dark-green p-[10px] md:w-max w-auto">' . get_field('name_promo', $post->ID) . ':</p>
                                    <p class="text-dark-green z-10 md:text-[65px] sm:text-[30px] text-[25px] md:max-w-[700px] w-auto">' . get_field('text_promotion', $post->ID) . '</p>
                                ';
                            }
                        }
                    ?>
                    </div>
                    <img style="width: -webkit-fill-available;" class="md:hidden block" src="<?php echo get_template_directory_uri() . '/src/img/main/about_s.png'; ?>" alt="">
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
                        <a href="/?page_id=17" class="border border-dark-green p-[10px] flex items-center gap-[16px]">
                            <span class="text-dark-green">Смотреть все</span>
                            <svg width="38" height="13" viewBox="0 0 38 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M37.0303 7.03033C37.3232 6.73744 37.3232 6.26256 37.0303 5.96967L32.2574 1.1967C31.9645 0.903806 31.4896 0.903806 31.1967 1.1967C30.9038 1.48959 30.9038 1.96447 31.1967 2.25736L35.4393 6.5L31.1967 10.7426C30.9038 11.0355 30.9038 11.5104 31.1967 11.8033C31.4896 12.0962 31.9645 12.0962 32.2574 11.8033L37.0303 7.03033ZM0.5 7.25H36.5V5.75H0.5V7.25Z" fill="#0D2B00"/>
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
                        
                        foreach($my_posts as $post) {
                            echo '
                                <a href="'. get_permalink($post->ID) .'">
                                    <div class="news-list--item">
                                        <img src="'. get_field('photo_news') .'" alt="" class="news-list--item__img">
                                        <date class="news-list--item__date">'. get_field('date_news') .'</date>
                                        <article class="news-list--item__name">'. get_field('name_news') .'</article>
                                    </div>
                                </a>';
                            };
                    ?>
                    
                </div>
            </div>
        </section>
    </main>



<?php get_footer(); ?>