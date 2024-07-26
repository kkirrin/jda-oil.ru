<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JDA MARKET</title>

    <?php wp_head(); ?>
</head>

<body <?php body_class('wrapper'); ?>>
    
    <div>
        <header class="z-10 w-full md-28 transition-colors"> 
            <div class="bg-green py-[12px] md:block sm:hidden hidden">
                <p class="text-white text-center">Летняя акция — скидка 10% на заказы конкретной категории</p>
            </div>


            <div class="md:gap-5 items-center flex-col md:pt-2">
                <div class="relative w-full z-10 flex justify-between gap-5 items-center container md:p-[5px] p-[10px]">
                    <div class="md:block sm:block hidden">
                        <p class="text-dark-green">
                            По всем вопросам писать на: <a href="mailto:jdaoil@mail.ru">
                                jdaoil@mail.ru
                            </a>
                        </p>
                    </div>                  

                    <a href="/" class="md:hidden sm:hidden block">
                        <img class="object-fill" src="<?php echo get_template_directory_uri() . '/src/img/logo.jpg'; ?>" alt="" >                           
                     </a>

                    <div class="flex gap-[30px] items-center">
                        <div class="text-dark-green md:block sm:block hidden">ПН — СБ с 10:00 до 18:00</div>

                        <div class="text-dark-green md:block sm:block hidden">
                            <a href="tel:+79841922217" class="list-disc">+7 (984) 192‒22‒17</a>
                        </div>

                        <div class="flex gap-[10px] items-center">
                            <div class="md:scale-100 scale-125">
                                <a href="">
                                    <svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_225_1691)">
                                        <path d="M0 13C0 6.09646 5.59646 0.5 12.5 0.5C19.4035 0.5 25 6.09646 25 13C25 19.9035 19.4035 25.5 12.5 25.5C5.59646 25.5 0 19.9035 0 13Z" fill="#247500"/>
                                        <path d="M18.8882 9.19928C18.7348 8.61022 18.283 8.14636 17.7093 7.98891C16.6696 7.70282 12.5002 7.70282 12.5002 7.70282C12.5002 7.70282 8.33068 7.70282 7.29094 7.98891C6.71719 8.14636 6.26537 8.61022 6.11204 9.19928C5.8335 10.2669 5.8335 12.4945 5.8335 12.4945C5.8335 12.4945 5.8335 14.722 6.11204 15.7897C6.26537 16.3788 6.71719 16.8426 7.29094 17.0001C8.33068 17.2862 12.5002 17.2862 12.5002 17.2862C12.5002 17.2862 16.6696 17.2862 17.7093 17.0001C18.283 16.8426 18.7348 16.3788 18.8882 15.7897C19.1668 14.722 19.1668 12.4945 19.1668 12.4945C19.1668 12.4945 19.1668 10.2669 18.8882 9.19928Z" fill="white"/>
                                        <path d="M11.25 14.7859V10.6192L14.5833 12.7026L11.25 14.7859Z" fill="#247500"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_225_1691">
                                        <rect width="25" height="25" fill="white" transform="translate(0 0.5)"/>
                                        </clipPath>
                                        </defs>
                                    </svg>   
                                </a>
                            </div>

                            <div class="md:scale-100 scale-125">
                                <a href="">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="30" height="30" rx="15" fill="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.5 15C2.5 21.9035 8.09646 27.5 15 27.5C21.9035 27.5 27.5 21.9035 27.5 15C27.5 8.09646 21.9035 2.5 15 2.5C8.09646 2.5 2.5 8.09646 2.5 15ZM12.7083 20.0149L12.921 16.8286L18.7171 11.5977C18.9715 11.3719 18.6616 11.2618 18.3239 11.4666L11.1705 15.9796L8.08057 15.0152C7.41328 14.8109 7.40849 14.3524 8.23036 14.0227L20.271 9.37993C20.8209 9.13025 21.3517 9.51202 21.1418 10.3537L19.0913 20.0165C18.9481 20.7032 18.5332 20.8674 17.9583 20.5502L14.8347 18.2424L13.3333 19.7024C13.3286 19.707 13.3239 19.7115 13.3192 19.7161C13.1513 19.8796 13.0123 20.0149 12.7083 20.0149Z" fill="#247500"/>
                                    </svg>
                                </a>
                            </div>

                            <div class="md:scale-100 scale-125">
                                <a href="">
                                    <svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5 0.5C5.59646 0.5 0 6.09646 0 13C0 19.9035 5.59646 25.5 12.5 25.5C19.4035 25.5 25 19.9035 25 13C25 6.09646 19.4035 0.5 12.5 0.5ZM13.5178 16.9459C13.3945 17.0759 13.1539 17.1021 13.1539 17.1021H12.357C12.357 17.1021 10.5988 17.2058 9.05 15.6234C7.36099 13.897 5.86953 10.4716 5.86953 10.4716C5.86953 10.4716 5.78349 10.2469 5.87672 10.1387C5.98172 10.0165 6.26802 10.0088 6.26802 10.0088L8.17286 9.99667C8.17286 9.99667 8.35224 10.0255 8.48068 10.1183C8.58698 10.1951 8.64635 10.3379 8.64635 10.3379C8.64635 10.3379 8.95417 11.1022 9.36172 11.7935C10.158 13.1435 10.5284 13.4386 10.7984 13.294C11.1923 13.0834 11.0742 11.3857 11.0742 11.3857C11.0742 11.3857 11.0814 10.7699 10.876 10.4953C10.7169 10.2828 10.4169 10.2207 10.2845 10.2034C10.1769 10.1893 10.353 9.94479 10.5812 9.83536C10.9242 9.67083 11.5294 9.66125 12.2448 9.66828C12.8024 9.67401 12.9628 9.70797 13.1806 9.75979C13.6861 9.87953 13.6704 10.2633 13.6363 11.0915C13.6261 11.3392 13.6143 11.6266 13.6143 11.9586C13.6143 12.0333 13.6121 12.1128 13.6098 12.1946C13.598 12.6189 13.5844 13.1048 13.8693 13.2857C14.0154 13.3778 14.3721 13.2991 15.2648 11.8114C15.6881 11.106 16.005 10.277 16.005 10.277C16.005 10.277 16.0748 10.1292 16.1824 10.0658C16.2926 10.0011 16.4413 10.021 16.4413 10.021L18.4459 10.0088C18.4459 10.0088 19.0485 9.93776 19.1457 10.2054C19.2481 10.4851 18.9207 11.1393 18.1016 12.2109C17.3246 13.2277 16.9466 13.602 16.9812 13.9331C17.0066 14.175 17.2524 14.3938 17.7241 14.8232C18.7086 15.7206 18.9726 16.1927 19.0359 16.3061C19.0412 16.3155 19.0451 16.3224 19.0479 16.3269C19.4894 17.0458 18.5581 17.1021 18.5581 17.1021L16.7771 17.1265C16.7771 17.1265 16.395 17.2007 15.8916 16.8615C15.6278 16.6839 15.3701 16.3939 15.1247 16.1176C14.7498 15.6957 14.4035 15.306 14.108 15.3981C13.6117 15.553 13.6267 16.6022 13.6267 16.6022C13.6267 16.6022 13.6306 16.8269 13.5178 16.9459Z" fill="#247500"/>
                                    </svg>
                                </a>  
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full md:hidden sm:hidden block relative border border-gray">
                    <input class="rounded-md bg-light-gray py-[18px] px-[60px] w-full" type="search" placeholder="Поиск...">
                    <img src="<?php echo get_template_directory_uri() . '/src/img/icons/search_gray.svg'; ?>" alt="Search" class="h-6 w-6 absolute top-1/2 left-5 transform -translate-y-1/2"/>
                </div>

                

                <div class="relative w-full z-10 flex justify-between items-center gap-5 border border-gray">
                    <div class="container__special flex justify-between">                     
                        <div class="flex gap-[20px] items-center md:w-auto w-[200px]" style="width: -webkit-fill-available;">
                            <a href="/" class="md:block sm:block hidden">
                               <img class="object-fill" src="<?php echo get_template_directory_uri() . '/src/img/logo.jpg'; ?>" alt="" >                           
                            </a>
                            <a href="/?page_id=58" class="bg-green py-[18px] px-[50px] flex gap-[8px] btn__menu">
                                <img class="catalog-button-img-2"
                                    src="<?php echo get_template_directory_uri() . '/src/img/icons/catelog_white.svg'; ?>" width="20"
                                    height="20" alt="">
                                <span class="text-white">Каталог</span>
                            </a>
                            <div class="md:flex sm:flex hidden items-center">
                                <div class="relative flex justify-evenly">
                                    <div>
                                        <input class="rounded-md bg-light-gray py-[18px] px-[30px] hidden esm:hidden sm:flex" type="search" placeholder="Поиск по товарам...">
                                    </div>
                                    <div>
                                        <img src="<?php echo get_template_directory_uri() . '/src/img/icons/search_gray.svg'; ?>" alt="Search" class="h-6 w-6 absolute top-1/2 left-0 transform -translate-y-1/2"/>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center gap-[20px] border-l border-gray">
                            <div class="md:block sm:block hidden ml-[30px]">
                                <ul class="flex items-center gap-[40px]">
                                    <li><a href="/?page_id=17" class="link_menu text-dark-green">Новости</a></li>
                                    <li class="w-max"><a href="/?page_id=13" class="link_menu text-dark-green">О компании</a></li>
                                    <li><a href="/?page_id=15" class="link_menu text-dark-green">Контакты</a></li>
                                </ul>
                            </div>

                            <div class="flex">
                                <a href="?page_id=59">
                                    <svg width="55" height="60" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg" class=" border-l border-gray">
                                        <g clip-path="url(#clip0_200_307)">
                                            <path d="M25.4998 35.3334C25.9601 35.3334 26.3332 34.9603 26.3332 34.5C26.3332 34.0398 25.9601 33.6667 25.4998 33.6667C25.0396 33.6667 24.6665 34.0398 24.6665 34.5C24.6665 34.9603 25.0396 35.3334 25.4998 35.3334Z" stroke="#247500" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M34.6668 35.3334C35.1271 35.3334 35.5002 34.9603 35.5002 34.5C35.5002 34.0398 35.1271 33.6667 34.6668 33.6667C34.2066 33.6667 33.8335 34.0398 33.8335 34.5C33.8335 34.9603 34.2066 35.3334 34.6668 35.3334Z" stroke="#247500" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M18.8335 17.8333H22.1668L24.4002 28.9916C24.4764 29.3753 24.6851 29.7199 24.9898 29.9652C25.2945 30.2105 25.6757 30.3408 26.0668 30.3333H34.1668C34.5579 30.3408 34.9392 30.2105 35.2439 29.9652C35.5486 29.7199 35.7573 29.3753 35.8335 28.9916L37.1668 22H23.0002" stroke="#247500" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_200_307">
                                            <rect width="20" height="20" fill="white" transform="translate(18 17)"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                </a>

                                <button class="btn_lk">
                                    <svg width="55" height="60" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg" class="border-r border-l border-gray">
                                        <g clip-path="url(#clip0_200_312)">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M28 19.375C29.45 19.375 30.625 20.55 30.625 22C30.625 23.45 29.45 24.625 28 24.625C26.55 24.625 25.375 23.45 25.375 22C25.375 20.55 26.55 19.375 28 19.375ZM28 30.625C31.7125 30.625 35.625 32.45 35.625 33.25V34.625H20.375V33.25C20.375 32.45 24.2875 30.625 28 30.625ZM28 17C25.2375 17 23 19.2375 23 22C23 24.7625 25.2375 27 28 27C30.7625 27 33 24.7625 33 22C33 19.2375 30.7625 17 28 17ZM28 28.25C24.6625 28.25 18 29.925 18 33.25V35.75C18 36.4375 18.5625 37 19.25 37H36.75C37.4375 37 38 36.4375 38 35.75V33.25C38 29.925 31.3375 28.25 28 28.25Z" fill="#247500"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_200_312">
                                                <rect width="20" height="20" fill="white" transform="translate(18 17)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <div class="modal_lk" style="box-shadow: 0px 4px 17px 0px rgba(0, 0, 0, 0.1);">
                                        <ul class="modal_list">
                                            <a href="popup1" class="text-black text-base hover:text-green transition-all popup-link">Войти</a>
                                            <a href="popup2" class="text-black text-base hover:text-green transition-all popup-link">Зарегистрироваться</a>
                                        </ul>
                                    </div>
                                </button>

                               
                                    <div class="btn__menu--mobile items-center gap-10 md:hidden flex clip">
                                        <button class="flex items-center gap-2 pl-10 pr-2 py-1">
                                            <svg class="h-3 w-3" viewBox="0 0 64 48">
                                                <path d="M19,15 L45,15 C70,15 58,-2 49.0177126,7 L19,37"></path>
                                                <path d="M19,24 L45,24 C61.2371586,24 57,49 41,33 L32,24"></path>
                                                <path d="M45,33 L19,33 C-8,33 6,-2 22,14 L45,37"></path>
                                            </svg>
                                        </button>   
                                    </div>
                               
                                    
                                    
                            </div>
                        </div>

                        <div class="mobile-menu w-full">
                            <ul class="text-dark-green text-base ">
                                <li class="pb-[15px]">
                                    <a href="/">
                                        <img class="w-[124px] h-[60px]" src="<?php echo get_template_directory_uri() . '/src/img/logo.jpg'; ?>" alt="Logo">
                                    </a>
                                </li>
                                <li class="pb-[15px]"><a href="/?page_id=58" class="link_menu text-dark-green text-[16px]">Каталог</a></li>
                                <li class="pb-[15px]"><a href="/?page_id=13" class="link_menu text-dark-green text-[16px]">О компании</a></li>
                                <li class="pb-[15px]"><a href="/?page_id=17" class="link_menu text-dark-green text-[16px]">Новости</a></li>
                                <li class="pb-[15px]"><a href="/?page_id=15" class="link_menu text-dark-green text-[16px]">Контакты</a></li>

                                <li class="text-dark-green text-[16px] pb-[15px]">Пн — СБ с 10:00 до 18:00</li>
                                <li class="pb-[15px]"><a href="+79841922217" class="text-dark-green text-[16px]">+7 (984) 192‒22‒17</a></li>

                                <div class="flex flex-col pb-[15px]">
                                    <p class="text-[16px] text-dark-green pb-[15px]">
                                        Мы в соцсетях
                                    </p>
                                    <div class="flex gap-[10px]">
                                        <svg id="tg" width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_225_1449)">
                                            <rect width="35" height="35" rx="17.5" fill="white"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 17.5C0 27.165 7.83504 35 17.5 35C27.165 35 35 27.165 35 17.5C35 7.83504 27.165 0 17.5 0C7.83504 0 0 7.83504 0 17.5ZM14.2917 24.5208L14.5894 20.06L22.704 12.7368C23.0601 12.4207 22.6263 12.2665 22.1535 12.5532L12.1387 18.8715L7.8128 17.5213C6.87859 17.2353 6.87189 16.5933 8.02251 16.1318L24.8794 9.63191C25.6493 9.28234 26.3924 9.81682 26.0985 10.9952L23.2278 24.5231C23.0273 25.4844 22.4464 25.7143 21.6417 25.2703L17.2686 22.0394L15.1667 24.0833C15.16 24.0898 15.1535 24.0962 15.1469 24.1026C14.9118 24.3315 14.7173 24.5208 14.2917 24.5208Z" fill="#0D2B00"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_225_1449">
                                            <rect width="35" height="35" rx="17.5" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
            
                                        <svg id="vk" width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.5 0C7.83504 0 0 7.83504 0 17.5C0 27.165 7.83504 35 17.5 35C27.165 35 35 27.165 35 17.5C35 7.83504 27.165 0 17.5 0ZM18.9249 23.0243C18.7523 23.2062 18.4155 23.243 18.4155 23.243H17.2998C17.2998 23.243 14.8383 23.3882 12.67 21.1728C10.3054 18.7558 8.21734 13.9603 8.21734 13.9603C8.21734 13.9603 8.09689 13.6457 8.22741 13.4942C8.37441 13.3231 8.77523 13.3123 8.77523 13.3123L11.442 13.2953C11.442 13.2953 11.6931 13.3357 11.8729 13.4656C12.0218 13.5731 12.1049 13.773 12.1049 13.773C12.1049 13.773 12.5358 14.8431 13.1064 15.8109C14.2212 17.701 14.7397 18.1141 15.1177 17.9115C15.6692 17.6167 15.5039 15.24 15.5039 15.24C15.5039 15.24 15.514 14.3779 15.2264 13.9934C15.0036 13.6959 14.5836 13.6089 14.3983 13.5848C14.2476 13.5651 14.4942 13.2227 14.8137 13.0695C15.2939 12.8392 16.1412 12.8258 17.1427 12.8356C17.9234 12.8436 18.1479 12.8912 18.4529 12.9637C19.1606 13.1313 19.1385 13.6686 19.0908 14.8281C19.0765 15.1749 19.06 15.5773 19.06 16.0421C19.06 16.1466 19.0569 16.2579 19.0537 16.3725C19.0372 16.9665 19.0182 17.6467 19.417 17.8999C19.6215 18.0289 20.1209 17.9188 21.3708 15.836C21.9633 14.8484 22.407 13.6878 22.407 13.6878C22.407 13.6878 22.5047 13.4808 22.6554 13.3921C22.8096 13.3016 23.0178 13.3294 23.0178 13.3294L25.8243 13.3123C25.8243 13.3123 26.668 13.2129 26.8039 13.5875C26.9473 13.9791 26.489 14.895 25.3423 16.3952C24.2545 17.8187 23.7252 18.3428 23.7738 18.8063C23.8093 19.145 24.1534 19.4513 24.8137 20.0525C26.192 21.3088 26.5616 21.9697 26.6503 22.1285C26.6577 22.1417 26.6631 22.1514 26.667 22.1577C27.2851 23.1641 25.9814 23.243 25.9814 23.243L23.488 23.277C23.488 23.277 22.953 23.381 22.2482 22.906C21.8789 22.6574 21.5181 22.2514 21.1746 21.8646C20.6497 21.274 20.165 20.7285 19.7512 20.8573C19.0563 21.0742 19.0773 22.5431 19.0773 22.5431C19.0773 22.5431 19.0828 22.8576 18.9249 23.0243Z" fill="#0D2B00"/>
                                        </svg>
                                        
                                        <svg id="youtube" width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_225_1390)">
                                            <path d="M0.000488281 17.5C0.000488281 7.83504 7.83553 0 17.5005 0C27.1654 0 35.0005 7.83504 35.0005 17.5C35.0005 27.165 27.1654 35 17.5005 35C7.83553 35 0.000488281 27.165 0.000488281 17.5Z" fill="#0D2B00"/>
                                            <path d="M26.4436 12.179C26.2289 11.3543 25.5963 10.7049 24.7932 10.4845C23.3376 10.084 17.5003 10.084 17.5003 10.084C17.5003 10.084 11.6631 10.084 10.2074 10.4845C9.40417 10.7049 8.77162 11.3543 8.55695 12.179C8.16699 13.6737 8.16699 16.7923 8.16699 16.7923C8.16699 16.7923 8.16699 19.9108 8.55695 21.4056C8.77162 22.2303 9.40417 22.8797 10.2074 23.1002C11.6631 23.5007 17.5003 23.5006 17.5003 23.5006C17.5003 23.5006 23.3376 23.5007 24.7932 23.1002C25.5963 22.8797 26.2289 22.2303 26.4436 21.4056C26.8337 19.9108 26.8337 16.7923 26.8337 16.7923C26.8337 16.7923 26.8337 13.6737 26.4436 12.179Z" fill="white"/>
                                            <path d="M15.7505 20.0003V14.167L20.4172 17.0837L15.7505 20.0003Z" fill="#0D2B00"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_225_1390">
                                            <rect width="35" height="35" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>       
                                    </div>
                                </div>


                                <li class="text-dark-green text-[16px] pb-[15px]">По всем вопросам писать на:</li>
                                <li><a href="mailto:jdaoil@mail.ru" class="text-dark-green text-[16px] pb-[15px]">jdaoil@mail.ru</a></li>


                            </ul>                  
                        </div>

                    </div>

                    
                </div>

            </div>
        </header>