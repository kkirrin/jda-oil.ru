//	Функция предварительных действий в живом поиске, перед отправкой данных на сервер
function live_search(e)
{
    //	Получаем текущее поле поиска, которое получило или потеряло фокус
	this_element	= jQuery(e.currentTarget);
	//	Получаем основной блок текущего живого поиска
    this_parent		= jQuery(this_element.parents('.live_search')[0]);

	//	Проверка, совершено получение фокуса или его потеря
    if(e.type == 'focus' || e.type == 'focusin')
    {
        //	Получаем тип живого поиска
		type		= this_element.attr('name');
		//	Получаем блок выпадающего списка в текущем живом поиске
        list		= this_parent.children('.search_list');

		//	Получаем значение поля поиска текущего живого поиска
        value		= this_element.val();
		//	Добавляем в выпадающий список картинку с загрузкой и отображаем его
        list.empty().append('<div class="download"><div style="height: 30px;"></div></div>').show();
        //	Запуск функции поиска данных через 1 секунду
		delayQuery = setTimeout(get_live_search_list, 1000, type, list, value);

		//	Отслеживание нажатия клавишы клавиатуры
        this_element.off('keyup').on('keyup', function(e)
        {
            if(e.which == 38)
            {//	Действия на нажатие на кнопку 'Up'

            }
            else if(e.which == 40)
            {//	Действия на нажатие на кнопку 'Down'

            }
            else if(e.which == 13)
            {//	Действия на нажатие на кнопку 'Enter'
                sendSearch(e);
            }
            else
            {//	Действия на нажатие на остальные кнопки
                if(typeof live_search_ajax !== 'undefined')
                {
                    //	Убиваем выполнение скрипка поиска и обработки данных на сервере, чтобы предотвратить дублирование запросов
					live_search_ajax.abort();
                }

                if(typeof delayQuery !== "undefined")
                {
                    //	Убиваем отсроченый запуск функции поиска данных
					clearTimeout(delayQuery);
                }

				//	Получаем значение поля поиска текущего живого поиска
                value   = this_element.val();

				//	Добавляем в выпадающий список картинку с загрузкой и отображаем его
                list.empty().append('<div class="download"><div style="height: 30px;"></div></div>').show();
				//	Запуск функции поиска данных через 1 секунду
                delayQuery = setTimeout(get_live_search_list, 1000, type, list, value);
            }
        });
    }
    else if(e.type == 'blur' || e.type == 'focusout')
    {
        //	Проверка на потерю фокуса добавлена на всякий случай, если будет нужно
    }
}

//	Функция отправки данных на сервер и обработка ответа сервера
// function get_live_search_list, live-search.js, 
function get_live_search_list(type, list, value = '')
{
    live_search_ajax = jQuery.ajax({
		//	Путь до файла, который будет обрабатывать ajax-запрос (хранится в переменной, созданной WordPress)
		//	сам скрипт лежит в functions.php
        url         : '/wp-admin/admin-ajax.php',
        type        : 'POST',	//	Метод отправки данных
        //	Данные, отправляемые на сервер
		data        : {
			action: 'live_search',	//	Имя action (Не менять!)
            ajax: type,				//	Тип ajax-запроса (получается из имени поля поиска)
            value: value			//	Содержимое поля поиска
        },
        beforeSend  : function()
        {//	Действия непосредственно перед отправкой ajax-запроса

        },
        success     : function(data)
        {//	Действия при успешном завершении скрипта на сервере
            //	Парсим полученные данные в json-массив
			res = JSON.parse(data);
			
			//	Добавляем пункты выпадающего списка в выпадающий список
			list.empty().append(res['list']);
        },
        error       : function(a, b, c)
        {//	Действия при ошибке во время выполнения скрипта на сервере
            //	Вывод текста ошибки в консоль
			console.log(a.responseText);
        },
        dataType    : 'text',
        response    : 'text'
    });
}

function sendSearch(e) {
        e.preventDefault(); 
        let current = jQuery(e.currentTarget);
        let value = current.parents('.live_search').eq(0).find('.search').val();    
        window.location.href = '/?s=' + encodeURIComponent(value); // Передаем запрос в URL
}

//	Функция обработки клика на пункт из выпадающего списка живого поиска
function set_option(e)
{
	//	Получаем пункт списка, на который кликали
	current_option = jQuery(e.currentTarget);

	//	Получаем поле поиска текущего живого поиска
	input_search = current_option.parent().siblings('label').children('input.search');
	//	Получаем поле, в котором хранится значение выбраного пункта в выпадающем списке
	input_value = current_option.parent().siblings('label').children('input.value');
	//	Получаем поле, в котором хранится тип товара выбраного пункта в выпадающем списке
	input_type = current_option.parent().siblings('label').children('input[name*="type"]');
	//	Получаем поле таблицы, в котором хранится статус текущей позиции в таблице
	status_box = current_option.parents('tr').eq(0).children('.status');

	//	Прописываем текст из выбраного пункта списка в поле поиска
	input_search.val(current_option.attr('data-text'));
	//	Прописываем значение выбраного пункта списка в поле, в котором хранится значение текущего поиска
	input_value.val(current_option.attr('data-value'));
	//	Прописываем тип товара выбраного пункта списка в поле
	input_type.val(current_option.attr('data-product'));

	//	Скываем выподающий список
	jQuery('.search_list').hide();
	//	Меняем статус в поле таблицы на "Активен"
	status_box.children('span').removeClass('negative').addClass('positive').text('Активен');
	//	Запоминаем статус в поле формы
	status_box.children('input[name*="status"]').val('1');
}

jQuery(document).on('ready', function() {
    // Обработка нажатия на кнопку поиска
    jQuery('.search_button').on('click', function(e) {
    //     e.preventDefault(); 
    //     let current = jQuery(e.currentTarget);
    //     let value = current.parents('.live_search').eq(0).find('.search').val(); 
    //     console.log(value)

       
    //         window.location.href = '/?page_id=881&query=' + encodeURIComponent(value); // Передаем запрос в URL
        sendSearch(e);
       
    });
    

    jQuery('body')
        // Отслеживание клика вне блока живого поиска
        .on('click', function(e) {
            // Поиск блока живого поиска среди родителей объекта, по которому совершен клик
            let live_search_box = jQuery(e.target).closest('.live_search');

            if (!live_search_box.length) {
                // Если блока живого поиска нет, значит клик совершен за пределами
                // Скрываем все выпадающие списки всех живых поисков
                jQuery('.search_list').hide();
            }
        })
        // Убиваем отслеживание получения и потери фокуса
        .off('focus blur')
        // Отслеживание получения фокуса в поле живого поиска
        .on('focus', '.live_search input.search', live_search)
        // Отслеживание потери фокуса в поле живого поиска
        .on('blur', '.live_search input.search', live_search)
        // Отслеживание клика на пункт из выпадающего списка живого поиска
        .on('click', '.search_list > .list_option', set_option);
});


