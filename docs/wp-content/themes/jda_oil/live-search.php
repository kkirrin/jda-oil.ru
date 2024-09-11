	<?php
    /*
    Template Name: тестовая
    */
    ?>




    <?php

    // Блок с живым поиском
    $page_content = '';
    $page_content .= '<div class="live_search">';
    $page_content .= '<div style="width: 100% !important;">';
    $page_content .= '  <label class="input">';
    $page_content .= '  <input class="search w-full" type="text" name="products" value="" placeholder="Что вы ищете?" autocomplete="off" />';
    $page_content .= '  <input class="value" type="hidden" name="product[]" value="0" />';
    $page_content .= '  <input type="hidden" name="id[]" value="0" />';
    $page_content .= '  <input type="hidden" name="type[]" value="" />';
    $page_content .= '  </label>';
    $page_content .= '</div>';

    $page_content .= '<div class="flex">'; 
    $page_content .= '  <button class="search_button"><img src="'. get_template_directory_uri() . '/src/img/icons/search_gray.svg" alt="Поиск" /></button>';
    $page_content .= '</div>';
    // Блок для результатов поиска
    $page_content .= '<div class="search_list none" style="display:none;"></div>';
    $page_content .= '</div>';

    echo $page_content;


    ?>


