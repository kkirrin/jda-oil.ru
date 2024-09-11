<?php

    add_action('wp_ajax_call_parser', 'parseFile');
    add_action('wp_ajax_nopriv_call_parser', 'parseFile');


    function parseFile() {
        $path_to_file = 'RED_BOOK.csv';
        $path_to_log = 'logs/jda_parser_log.txt';

        // Проверка существования файла
        if(file_exists($path_to_file)) {
            // Переменная для ключей данных
            $keys = array(
                'maker',
                'car_name',
                'grade',
                'drive_system',
                'year',
                'liter',
                'engine',
                'recommend_oil',
                'transmission_type',
                'lubricant_capacity',
                'filter_capacity',
                'fluid',
                'capacity',
            );
            // Паременная для сохранения данных
            $data = array();

            // Получить содержимое файла
            $file = file_get_contents($path_to_file);

            // Проверка на наличие BOM метки и её удаление при наличии
            //      65279 - UTF-8
            if(in_array(mb_ord(mb_substr($file, 0, 1)), array(65279))) {
                $file = mb_substr($file, 1);
            }
            
            // Замена переносов строки на '||'
            $lines = preg_replace('/\n\r|\n/m', '||', $file);
            // Удаление возврата каретки в конце строк
            $lines = preg_replace('/\r/m', '', $lines);
            // Разбиение содержимого на строки по символу '||', находящeмуся вне кавычек
            $lines = preg_split('/(?=(?:[^"]*"[^"]*")*[^"]*$)(?:\|\|)/', $lines);
            
            // Перебор линий для обработки
            foreach($lines as $line) {
                // Разбиение содержимого строки по символу ';' (или ',' в зависимости от шаблона файла), находящeмуся вне кавычек
                $explode_line = preg_split('/(?=(?:[^"]*"[^"]*")*[^"]*$)(?:;)/', $line);
                if(count($explode_line) === 1) {
                    $explode_line = preg_split('/(?=(?:[^"]*"[^"]*")*[^"]*$)(?:,)/', $line);
                }

                // Пропуск пустых строк и заголовков
                if(isset($explode_line[0]) && !in_array($explode_line[0], array('', 'MAKER'))) {
                    $pre_data = array();
                    foreach($explode_line as $key => $cell) {
                        if(isset($keys[$key])) {
                            if($keys[$key] == 'year') {
                                $years = explode('~', $cell);
                                $pre_data['year_from'] = $years[0];
                                $pre_data['year_to'] = isset($years[1]) ? $years[1] : null;
                            }
                            else {
                                $pre_data[$keys[$key]] = $cell;
                            }
                        }
                    }
                    $data[] = $pre_data;
                }
            }
            
            // echo '<pre>'; var_dump($data[0]); echo '</pre>';
            
            // Логирование успешной обработки данных
            file_put_contents($path_to_log, '['. date('Y-m-d H:i:s') .'] Success : Parser is success'. PHP_EOL, FILE_APPEND);
            return $data;
        }
        else {
            // Логирование ошибки, если файла не существует
            file_put_contents($path_to_log, '['. date('Y-m-d H:i:s') .'] Error : File '. $path_to_file .' is not exist'. PHP_EOL, FILE_APPEND);
            return false;
        }
    }

?>