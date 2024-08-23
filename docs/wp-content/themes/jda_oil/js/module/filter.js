
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
                 
                let year_min = new Date().getFullYear();
                let year_max = 1999;
                let year = '<option value="">Год</option>';

                data.forEach(item => {

                    let from = item.year_from.split('.')[0];
                    let to = item.year_to !== null ? item.year_to.split('.')[0] : item.year_to;

                    if (Number(from) <= year_min) { 
                        if (from.length == 2) {
                            // year_min = Number('20' + from);
                        } else {
                            year_min = Number(from);
                        }
                    }
                    if (Number(to) == '') {
                        year_max = new Date().getFullYear();
                    }
                    else if (item.year_to !== null && Number(to) >= year_max) { 
                        if (to.length == 2) {
                            // year_max = Number('20' + to);
                        } else {
                            year_max = Number(to);
                        }
                    }

                });

                    for (let i = year_max; i >= year_min; i--) {
                        year += '<option value="' + i + '">' + i + '</option>';
                    }

                    console.log(year_min, year_max);

                    
                    jQuery('select[name="year"]').empty().append(year);
                    jQuery('select[name="dvig"]').empty().append('<option value="">Номер двигателя</option>');
                
                break;
                
            case 'year':
                    let dvig_options = [];
                    let dvig = '<option value="">Номер двигателя</option>';

                    data.forEach(item => {
                        if (dvig_options.indexOf(item.engine) === -1 && item.year_from >= this_select.val() && item.year_to <= this_select.val()) {
                            dvig_options.push(item.engine);
                            dvig += '<option value="' + item.engine + '">' + item.engine + '</option>;'
                        }
                    });

                    jQuery('select[name="dvig"]').empty().append(dvig);
                break;
                
        }
    })

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

        const filter_data = get_filtered_data(data, filter_options);
        
        filter_data.forEach(function(item) {
            if(oils.indexOf(item['recommend_oil']) === -1) {
                oils.push(item['recommend_oil']);
                this_form.append('<input type="hidden" name="recommend_oil[]" value="'+ String(item['recommend_oil']) +'">');
            }
        });                
        this_form.submit();
    
    });

   

});