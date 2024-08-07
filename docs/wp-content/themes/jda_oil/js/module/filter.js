
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

window.addEventListener('DOMContentLoaded', () => {
    // php_data - из файла functions через wp_localize_script
    
    // document.getElementsByName('oil_search')[0].addEventListener('click', function(e) {
    jQuery('button[name="oil_search"]').on('click', function(e) {
        e.preventDefault();
        
        jQuery.ajax({
            url: '/wp-admin/admin-ajax.php',
            type: 'POST',
            data: {
                action: 'call_parser',
            },
            success: function(response) {

                json_data = JSON.parse(response);
                const this_submit = jQuery(e.currentTarget);
                const this_form = this_submit.parents('form').eq(0);
                const form_elements = this_form.find('input, select');
                let filter_options = {};
                let oils = [];

                form_elements.each((i, form_element) => {
                    const form_item = jQuery(form_element);
                    if(form_item.val() != '') {
                        filter_options[form_item.attr('name')] = form_item.val();
                    }
                })

                const filter_data = get_filtered_data(json_data, filter_options);
                
                filter_data.forEach(function(item) {
                    if(oils.indexOf(item['recommend_oil']) === -1) {
                        oils.push(item['recommend_oil']);
                        this_form.append('<input type="hidden" name="recommend_oil[]" value="'+ String(item['recommend_oil']) +'">');
                    }
                });                
            this_form.submit();
             }
        })

      

        

    });
});