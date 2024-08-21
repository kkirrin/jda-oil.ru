
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

            let marka_options = [];
            let model_options = [];
            let kuzov_options = [];
            let engine_options = [];

            let marka = '<option value="">Марка</option>';
            let model = '<option value="">Модель</option>';
            let kuzov = '<option value="">Номер кузова</option>';
            let engine = '<option value="">Номер двигателя</option>';

            data.forEach(item => {
                if (marka_options.indexOf(item.maker) === -1) {
                    marka_options.push(item.maker);
                    marka += '<option value="' + item.maker + '">' + item.maker + '</option>;'
                }
                if (model_options.indexOf(item.car_name) === -1) {
                    model_options.push(item.car_name);
                    model += '<option value="' + item.car_name + '">' + item.car_name + '</option>;'
                }
                if (kuzov_options.indexOf(item.grade) === -1) {
                    kuzov_options.push(item.grade);
                    kuzov += '<option value="' + item.grade + '">' + item.grade + '</option>;'
                }
                if (engine_options.indexOf(item.engine) === -1) {
                    engine_options.push(item.engine);
                    engine += '<option value="' + item.engine + '">' + item.engine + '</option>;'
                }
            });           
            
            jQuery('select[name="marka"]').empty().append(marka);
            jQuery('select[name="model"]').empty().append(model);
            jQuery('select[name="kuzov"]').empty().append(kuzov);
            jQuery('select[name="dvig"]').empty().append(engine);
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