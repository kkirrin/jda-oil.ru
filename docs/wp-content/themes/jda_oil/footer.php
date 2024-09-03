        <footer class="footer pb-10 pt-10 border border-dark-green font-medium">
            <div class="container flex md:justify-between md:items-center items-start justify-start text-white md:flex-row flex-col md:gap-0 gap-[30px]">
                <div class="flex flex-row gap-[30px] flex-wrap items-center">
                    <a href="/">
                        <img class="m-auto object-fill" src="<?php echo get_template_directory_uri() . '/src/img/icons/logo_footer.png'; ?>" alt="Logo">
                    </a>
                    <div>
                        <ul class="flex flex-col">
                            <li class="text-dark-green text-[16px]">Пн — СБ с 10:00 до 18:00</li>
                            <li><a href="tel:+<?php echo get_field('phone_header-bot', 'option'); ?>" class="text-dark-green text-[16px]"><?php echo get_field('phone_header', 'option'); ?></a></li>
                        </ul>
                    </div>
                    <div class="md:block hidden">
                        <ul class="flex flex-col gap-[5px]">
                            <li class="text-dark-green text-[16px]">По всем вопросам писать на:</li>
                            <li><a href="mailto:<?php echo get_field('email_header', 'option'); ?>" class="text-dark-green text-[16px]"><?php echo get_field('email_header', 'option'); ?>
                                </a></li>
                        </ul>
                    </div>
                </div>
                <div class="flex md:flex-col md:gap-[0px] flex-row gap-[30px]">

                    <ul class="md:gap-[10px] gap-[0px] grid md:grid-cols-2 grid-cols-1">
                        <li><a href="/?page_id=58" class="text-dark-green text-[16px] ">Каталог</a></li>
                        <li><a href="/?page_id=13" class="text-dark-green text-[16px] ">О компании</a></li>
                        <li><a href="/?page_id=17" class="text-dark-green text-[16px] ">Новости</a></li>
                        <li><a href="/?page_id=15" class="text-dark-green text-[16px] ">Контакты</a></li>
                    </ul>

                    <div class="md:hidden block">
                        <div class="flex flex-col">
                            <p class="text-[16px]  text-dark-green" style="padding-bottom: 10px;">
                                Мы в соцсетях
                            </p>
                            <div class="flex gap-[10px]">
                                <a href="<?php echo get_field('tg_header', 'option'); ?>">
                                    <img src="<?php echo get_template_directory_uri() . '/src/img/icons/tg_dark_green.svg'; ?>" alt="">
                                </a>
                                <a href="<?php echo get_field('vk_header', 'option'); ?>">
                                    <img src="<?php echo get_template_directory_uri() . '/src/img/icons/vk_dark_green.svg'; ?>" alt="">
                                </a>
                                <a href="<?php echo get_field('you_header', 'option'); ?>">
                                    <img src="<?php echo get_template_directory_uri() . '/src/img/icons/youtube_dark_green.svg'; ?>" alt="">
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="md:block hidden">
                    <div class="flex flex-col">
                        <p class="text-[16px] text-dark-green" style="padding-bottom: 4px;">
                            Мы в соцсетях
                        </p>
                        <div class="flex gap-[10px]">
                            <a href="<?php echo get_field('tg_header', 'option'); ?>">
                                <img src="<?php echo get_template_directory_uri() . '/src/img/icons/tg_dark_green.svg'; ?>" alt="">
                            </a>
                            <a href="<?php echo get_field('vk_header', 'option'); ?>">
                                <img src="<?php echo get_template_directory_uri() . '/src/img/icons/vk_dark_green.svg'; ?>" alt="">
                            </a>
                            <a href="<?php echo get_field('you_header', 'option'); ?>">
                                <img src="<?php echo get_template_directory_uri() . '/src/img/icons/youtube_dark_green.svg'; ?>" alt="">
                            </a>

                        </div>
                    </div>
                </div>

                <div class="md:hidden block">
                    <ul class="flex flex-col gap-[5px]">
                        <li class="text-dark-green text-[16px] ">По всем вопросам писать на:</li>
                        <li>
                            <a href="mailto:<?php echo get_field('email_header', 'option'); ?>" class="text-dark-green text-[16px]"><?php echo get_field('email_header', 'option'); ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>


        <!-- ОКНО ВОЙТИ -->
        <section id="popup1" class="popup">
            <div class="popup__body">
                <div class="popup__content">
                    <button class="popup__btn close-popup" aria-label="Закрыть" tabindex="4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="18" viewBox="0 0 23 18" fill="none">
                            <path d="M4 1.45508L19.9099 17.365" stroke="#333" />
                            <path d="M4.54492 16.9099L20.4548 1.00001" stroke="#333" />
                        </svg>
                    </button>
                    <h2 class="text-start text-dark-green z-10  md:text-4xl text-xl pb-7 font-bold">Выполните вход</h2>
                    <p>Чтобы приобретать товары на данном сайте необходимо создать аккаунт</p>

                    <!-- <div class="form-wrapper"> -->
                    <!-- <label>Электронная почта</label>
                        <input class="form__input" placeholder="Введите адрес электронной почты" />

                        <label>Пароль</label>
                        <input class="form__input" placeholder="**********" />
                        
                        <button class="bg-green text-white p-[10px]">
                            Войти
                        </button>
    
                        <a class="text-gray text-sm text-center popup-link" href="#popup4">
                            Забыли пароль?
                        </a> -->
                    <?php echo do_shortcode('[ultimatemember form_id="69"]'); ?>
                    <!-- </div> -->
                </div>
            </div>
        </section>

        <!-- ОКНО РЕГИСТРАЦИЯ -->
        <section id="popup2" class="popup">
            <div class="popup__body">
                <div class="popup__content">
                    <button class="popup__btn close-popup" aria-label="Закрыть" tabindex="4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="18" viewBox="0 0 23 18" fill="none">
                            <path d="M4 1.45508L19.9099 17.365" stroke="#333" />
                            <path d="M4.54492 16.9099L20.4548 1.00001" stroke="#333" />
                        </svg>
                    </button>
                    <h2 class="text-center text-dark-green z-10  md:text-4xl text-xl pb-7 font-bold">Станьте оптовым клиентом и приобретайте товары по более выгодной цене </h2>
                    <p class="text-gray text-center">
                        После рассмотрения заявки мы отправим вам подтверждение на почту
                    </p>

                    <!-- <div class="form-wrapper"> -->
                    <!-- <label>Имя \ название компании*</label>
                        <input class="form__input" placeholder="Представьтесь, пожалуйста" />

                        <label>Телефон*</label>
                        <input type="tel" class="form__input" placeholder="+7 999 999 99 99" />

                        <label>Электронная почта* </label>
                        <input type="email" class="form__input" placeholder="Введите адрес электронной почты" />
                        
                        <button class="bg-green text-white p-[10px]">
                            Войти
                        </button>
    
                        <a href="#popup1" class="text-gray text-sm text-center popup-link">
                            Или войти?
                        </a> -->
                    <?php echo do_shortcode('[ultimatemember form_id="68"]'); ?>
                    <!-- </div> -->
                </div>
            </div>
        </section>

        <!-- ЗАБЫЛИ ПАРОЛЬ -->
        <section id="popup3" class="popup">
            <div class="popup__body">
                <div class="popup__content">
                    <button class="popup__btn close-popup" aria-label="Закрыть" tabindex="4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="18" viewBox="0 0 23 18" fill="none">
                            <path d="M4 1.45508L19.9099 17.365" stroke="#ffffff" />
                            <path d="M4.54492 16.9099L20.4548 1.00001" stroke="#ffffff" />
                        </svg>
                    </button>
                    <h2 class="text-start text-black z-10  md:text-4xl text-xl pb-7 font-bold">Заказать автомобиль</h2>
                    <div class="flex items-start justify-start">
                        <p class="text-black md:text-base text-sm text-start pb-7">Оставьте контакты и наш менеджер свяжется с вами и проконсультирует по всем вопросам</p>
                    </div>

                    <div class="form-wrapper">
                        <input class="form__input" placeholder="Введите имя" />
                        <input class="form__input" placeholder="Введите номер" />

                        <button class="button bg-blue up button__blue__to__dark__blue__to__gray">
                            Заказать автомобиль
                        </button>

                        <p class="text-gray text-sm text-start pt-7">
                            Нажимая кнопку "Заказать автомобиль" вы даете согласие на обработку персональных данных
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ЗАБЫЛИ ПАРОЛЬ -->
        <section id="popup4" class="popup">
            <div class="popup__body">
                <div class="popup__content">
                    <button class="popup__btn close-popup" aria-label="Закрыть" tabindex="4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="18" viewBox="0 0 23 18" fill="none">
                            <path d="M4 1.45508L19.9099 17.365" stroke="#333" />
                            <path d="M4.54492 16.9099L20.4548 1.00001" stroke="#333" />
                        </svg>
                    </button>
                    <h2 class="text-start text-dark-green z-10  md:text-4xl text-xl pb-7 font-bold">Выполните вход</h2>

                    <div class="form-wrapper">
                        <label>Электронная почта</label>
                        <input class="form__input" placeholder="Введите адрес электронной почты" />

                        <button class="bg-green text-white p-[10px]">
                            Сбросить пароль
                        </button>
                    </div>
                </div>
            </div>
        </section>


        <section id="popup6" class="popup">
            <div class="popup__body popup__body--new">
                <div class="popup__content">
                    <button class="popup__btn close-popup" aria-label="Закрыть" tabindex="4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="18" viewBox="0 0 23 18" fill="none">
                            <path d="M4 1.45508L19.9099 17.365" stroke="#333" />
                            <path d="M4.54492 16.9099L20.4548 1.00001" stroke="#333" />
                        </svg>
                    </button>
                    <h2 class="text-start text-dark-green z-10  md:text-4xl text-xl pb-7 font-bold">Если вы хотите купить в розницу, то посетите один из наших филиалов</h2>

                    <img src="<?php echo get_field('cklad', 'option'); ?>" alt="">
                </div>
            </div>
        </section>




        <div class="pb-[20px]">
            <div class="container">
                <div class="flex items-center justify-between text-gray md:flex-row pt-10 flex-col">
                    <div class="md:text-sm text-xs text-dark-green">
                        ©2024 ООО «СД БИЗНЕС ГРУПП». Все права защищены
                    </div>
                    <a href="/?page_id=433" class="md:text-sm text-xs underline text-dark-green">
                        Политика конфиденциальности
                    </a>
                </div>
            </div>
        </div>

        <script type="module" src="<?php echo get_template_directory_uri() . '/js/main.js'; ?>"></script>
        </body>

        </html>