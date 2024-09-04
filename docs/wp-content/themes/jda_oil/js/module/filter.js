
    function get_filtered_data(filter_data, options) {
        let filtered_data = filter_data;
        
        if(options['marka']) {
            filtered_data = filtered_data.filter(function(current_data) {
            return current_data['maker'].toLowerCase().indexOf(options['marka'].toLowerCase()) !== -1;
        });
    }
    
    if(options['model']) {
        filtered_data = filtered_data.filter(function(current_data) {
            return current_data['car_name'].toLowerCase().indexOf(options['model'].toLowerCase()) !== -1;
        });
    }

    if(options['kuzov']) {
        filtered_data = filtered_data.filter(function(current_data) {
            return current_data['grade'].toLowerCase().indexOf(options['kuzov'].toLowerCase()) !== -1;
        });
    }
    
    if(options['year']) {
        filtered_data = filtered_data.filter(function(current_data) {
            if(current_data['year_to'] == '') {
                let year_from = Number(current_data['year_from'].split('.')[0]);
                return Number(options['year']) >= year_from;
            }
            else if(current_data['year_to'] == null) {
                let year_from = Number(current_data['year_from'].split('.')[0]);
                return Number(options['year']) >= year_from && Number(options['year']) <= year_from;
            }
            else {
                let year_from = Number(current_data['year_from'].split('.')[0]);
                let year_to = Number(current_data['year_to'].split('.')[0]);
                return Number(options['year']) >= year_from && Number(options['year']) <= year_to;
            }
        });
    }
    
    if(options['dvig']) {
        filtered_data = filtered_data.filter(function(current_data) {
            return current_data['engine'].toLowerCase().indexOf(options['dvig'].toLowerCase()) !== -1;
        });
    }
    
    return filtered_data;
}



let data;
window.addEventListener('DOMContentLoaded', () => {

    // Получение селектов и обработка файла
    jQuery.ajax({
        url: '/wp-admin/admin-ajax.php',
        type: 'POST',
        data: {
            action: 'get_data',
        },
        success: function (response) {

            data = JSON.parse(response);
            console.log(data);

            const value_marka = jQuery('#value_marka').text();
            const value_model = jQuery('#value_model').text();
            const value_kuzov = jQuery('#value_kuzov').text();
            const value_year = jQuery('#value_year').text();
            const value_dvig= jQuery('#value_dvig').text();

            let filter_data = data.filter(function (item) {
                
                if (value_marka !== '-') {
                    if (item.maker !== value_marka) {
                        return false;
                    } 
                }

                return true;
                
            });

            filter_data = filter_data.filter(function (item) {
                
                if (value_model != '-') {
                    if (item.car_name !== value_model) {
                        return false;
                    } 
                }
                return true;

                
            });

            filter_data = filter_data.filter(function (item) {
                
                if (value_kuzov !== '-') {
                    if (item.grade !== value_kuzov) {
                        return false;
                    }
                }

                return true;

                
            });

            filter_data = filter_data.filter(function (item) {


                  if (item.year_to === '' || item.year_to === null) {
                          item.year_to = String(new Date().getFullYear()); 
                }
                

                if (value_year !== '-') {
                    if (value_year < item.year_from || value_year > item.year_to) {
                        return false;
                    }
                }

                return true;

                
            });

             filter_data = filter_data.filter(function (item) {
                
                if (value_dvig !== '-') {
                    if (item.engine !== value_dvig) {
                        return false;
                    } 
                 }

                return true;

                
            });

            console.log((jQuery('#motor_value_1')));
            console.log(filter_data.length)
            
            // console.log(jQuery('#motor_value_1').text(filter_data[0].api))
            if ((jQuery('#motor_value_1').length !== 0 || jQuery('#motor_value_1').text() !== '-') && filter_data.length !== 0) {
                    jQuery('#motor_value_1').text(filter_data[0].api);
                    jQuery('#motor_value_2').text(filter_data[0].sae);
                    jQuery('#motor_value_3').text(filter_data[0].filter_capacity);

                
                    jQuery('#liquid_value_1').text(filter_data[0].capacity);
                    jQuery('#liquid_value_2').text(filter_data[0].fluid);
            } 


            // jQuery('#oil_value_1').text(filter_data[0].capacity);
            // jQuery('#oil_value_2').text(filter_data[0].recommend_oil);

            // filter_data = filter_data.filter(function (item) {
            //     <?php if (isset($_POST['model'])) { ?>
            //        if (item.model === "<?php echo isset($_POST['model']); ?>") { 
            //            return true;
            //          } else {
            //            return false;
            //          }
                    
            //     <?php } ?>
            // });

            // filter_data = filter_data.filter(function (item) {
            //     <?php if (isset($_POST['kuzov'])) { ?>
            //        if (item.grade === "<?php echo isset($_POST['kuzov']); ?>") { 
            //            return true;
            //          } else {
            //            return false;
            //          }
                    
            //     <?php } ?>
            // });
            
            // filter_data = filter_data.filter(function (item) {
            //     <?php if (isset($_POST['year'])) { ?>
            //        if ("<?php echo isset($_POST['year']); ?>" >= item.year_from && "<?php echo isset($_POST['year']); ?>" <= item.year_to) { 
            //            return true;
            //          } else {
            //            return false;
            //          }
                    
            //     <?php } ?>
            // });
            
            // filter_data = filter_data.filter(function (item) {
            //     <?php if (isset($_POST['year'])) { ?>
            //        if ("<?php echo isset($_POST['year']); ?>" >= item.year_from && "<?php echo isset($_POST['year']); ?>" <= item.year_to) { 
            //            return true;
            //          } else {
            //            return false;
            //          }
                    
            //     <?php } ?>
            // });

            
            

            let marka_options = [];
            // jQuery('select[name="marka"], select[name="model"], select[name="kuzov"], select[name="year"] ,select[name="dvig"]')
            // let kuzov_options = [];
            // let engine_options = [];

            let marka = '<option value="">Марка</option>';
            // let model = '<option value="">Модель</option>';
            // let kuzov = '<option value="">Номер кузова</option>';
            // let engine = '<option value="">Номер двигателя</option>';

            data.forEach(item => {
                if (marka_options.indexOf(item.maker) === -1) {
                    marka_options.push(item.maker);
                    marka += '<option value="' + item.maker + '">' + item.maker + '</option>;'
                }
                // if (model_options.indexOf(item.car_name) === -1) {
                //     model_options.push(item.car_name);
                //     model += '<option value="' + item.car_name + '">' + item.car_name + '</option>;'
                // }
                // if (kuzov_options.indexOf(item.grade) === -1) {
                //     kuzov_options.push(item.grade);
                //     kuzov += '<option value="' + item.grade + '">' + item.grade + '</option>;'
                // }
                // if (engine_options.indexOf(item.engine) === -1) {
                //     engine_options.push(item.engine);
                //     engine += '<option value="' + item.engine + '">' + item.engine + '</option>;'
                // }
            });           
            
            jQuery('select[name="marka"]').empty().append(marka);
            // jQuery('select[name="model"]').empty().append(model);
            // jQuery('select[name="kuzov"]').empty().append(kuzov);
            // jQuery('select[name="dvig"]').empty().append(engine);
        }
    });

    const selects = jQuery('select[name="marka"], select[name="model"], select[name="kuzov"], select[name="year"] ,select[name="dvig"]');

    selects.on('change', function (e) { 

        const this_select = jQuery(e.currentTarget);

        switch (this_select.attr('name')) {
            case 'marka':
                let model_options = [];
                let model = '<option value="">Модель</option>';

                data.forEach(item => {
                    if (model_options.indexOf(item.car_name) === -1 && item.maker === this_select.val()){
                        model_options.push(item.car_name);
                        model += '<option value="' + item.car_name + '">' + item.car_name + '</option>;'
                    }
                });

                jQuery('select[name="model"]').empty().append(model);
                jQuery('select[name="kuzov"]').empty().append('<option value="">Номер кузова</option>');
                jQuery('select[name="year"]').empty().append('<option value="">Год</option>');
                jQuery('select[name="dvig"]').empty().append('<option value="">Номер двигателя</option>');
                
                break;
                
            case 'model':
                
                let kuzov_options = [];
                let kuzov = '<option value="">Номер кузова</option>';

                data.forEach(item => {
                    if (kuzov_options.indexOf(item.grade) === -1 && item.car_name === this_select.val()) {
                        kuzov_options.push(item.grade);
                        kuzov += '<option value="' + item.grade + '">' + item.grade + '</option>;'
                    }
                });

                jQuery('select[name="kuzov"]').empty().append(kuzov);
                jQuery('select[name="year"]').empty().append('<option value="">Год</option>');
                jQuery('select[name="dvig"]').empty().append('<option value="">Номер двигателя</option>');
                
                break;
                
            case 'kuzov':
    
                let year_min = new Date().getFullYear(); // Текущий год
                let year_max = 1999; // Начальный максимум
                let year = '<option value="">Год</option>'; // Начальная опция

                data.forEach(item => {
    

                    if (item.grade === this_select.val()) {
                        let from = item.year_from.split('.')[0]; // Извлекаем первый год
                        let to = item.year_to !== null ? item.year_to.split('.')[0] : null; // Извлекаем второй год

                        // Обработка минимального года
                        if (Number(from) <= year_min) {
                            year_min = (from.length == 2) ? Number('20' + from) : Number(from);
                        }

                        // Обработка максимального года
                        console.log(to)
                        if (to === null || to === '') { 
                            year_max = new Date().getFullYear(); // Если year_to нет, берем текущий год
                        } else if (Number(to) >= year_max) { 
                            year_max = (to.length == 2) ? Number('20' + to) : Number(to);
                        }   
                    }

                });

                // Генерация опций для селекта
                for (let i = year_max; i >= year_min; i--) {
                    year += '<option value="' + i + '">' + i + '</option>';
                }

                console.log(year_min, year_max)
                // Обновление селектов
                jQuery('select[name="year"]').empty().append(year);
                jQuery('select[name="dvig"]').empty().append('<option value="">Номер двигателя</option>');

                break;
                
            case 'year':
                // Массив для хранения уникальных двигателей
                let dvig_options = [];
                let dvig = '<option value="">Номер двигателя</option>';

                // Получаем выбранный год из селекта и преобразуем в числовое значение
                let selectedYear = Number(this_select.val());

                // Перебираем все элементы массива data
                data.forEach(item => {
                    // Проверяем предыдущие выборы: marka, model, kuzov

                    if (item.year_to === '' || item.year_to === null) {
                          item.year_to = String(new Date().getFullYear()); // Если year_to нет, берем текущий год
                    }

                    const selectedMarka = jQuery('select[name="marka"]').val();
                    const selectedModel = jQuery('select[name="model"]').val();
                    const selectedKuzov = jQuery('select[name="kuzov"]').val();

                    // Проверяем соответствие всем выбранным значениям
                    if (
                        (selectedMarka === '' || item.maker === selectedMarka) &&
                        (selectedModel === '' || item.car_name === selectedModel) &&
                        (selectedKuzov === '' || item.grade === selectedKuzov) &&
                        selectedYear >= Math.floor(Number(item.year_from)) &&
                        selectedYear <= Math.floor(Number(item.year_to))
                    ) {
                        // Если двигатель уникален
                        if (dvig_options.indexOf(item.engine) === -1) {
                            dvig_options.push(item.engine); // Добавляем уникальный двигатель в массив

                            dvig += '<option value="' + item.engine + '">' + item.engine + '</option>'; // Добавляем опцию
                        }
                    }
                });

                    // Обновление селекта с уникальными значениями двигателей
                    jQuery('select[name="dvig"]').empty().append(dvig);
                    break;
            }
        });

    jQuery('button[name="oil_search"]').on('click', function(e) {
        e.preventDefault();
        const this_submit = jQuery(e.currentTarget);
        const this_form = this_submit.parents('form').eq(0);
        const form_elements = this_form.find('select');
        let filter_options = {};
        let oils = [];

        form_elements.each((i, form_element) => {
            const form_item = jQuery(form_element);
            if(form_item.val() != '') {
                filter_options[form_item.attr('name')] = form_item.val();
            }
        })

        const main_data = get_filtered_data(data, filter_options);
        
        // filter_data.forEach(function(item) {
        //     if(oils.indexOf(item['recommend_oil']) === -1) {
        //         oils.push(item['recommend_oil']);
        //         this_form.append('<input type="hidden" name="recommend_oil[]" value="'+ String(item['recommend_oil']) +'">');
        //     }
        // });                
        main_data.forEach(function(item) {
            if(oils.indexOf(item['sae']) === -1) {
                oils.push(item['sae']);
                this_form.append('<input type="hidden" name="sae[]" value="'+ String(item['sae']) +'">');
            }
        });                
        this_form.submit();
    
    });

   

});