<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Company Information
    |--------------------------------------------------------------------------
    |
    | Informasi lengkap perusahaan yang menggunakan aplikasi ini
    |
    */

    'company' => [
        'version' => '3.0',
        'name' => 'checkpoint',
        'website' => 'http://appdesk.tech/',
        'address' => [
            'street1' => 'Jl. Utama Raya',
            'street2' => 'kav 12',
            'city' => 'Jakarta Selatan'
        ],
        'copyright' => '2020 - 2021',
        'dateformat' => 'd-m-Y'
    ],

    /*
    |--------------------------------------------------------------------------
    | Format default Number
    |--------------------------------------------------------------------------
    |
    | Format menggunakan standard indonesia
    | https://carbon.nesbot.com/docs/ ==> Localization
    |
    */
    'number' => [
        'default' => [
            'thousandsign' => ',',
            'decimalsign' => '.',
            'currency' => 'Rp.',
            'closing' => ',-'
        ],
        'system' => [
            'closing' => '', //Replace closing number sign with blank ( urutan array berpengaruh)
            'thousandsign' => '', //Replace thousand sign with blank
            'decimalsign' => '.', //Replace decima sign with (.) sign
            'currency' => '', //Replace currency sign with blank
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Format default tanggal untuk Javascript flatpickr
    |--------------------------------------------------------------------------
    |
    | Format menggunakan isoFormat dari Javascript flatfickr
    | https://flatpickr.js.org/formatting/ ==> Formating Tokens
    |
    */
    'datejs' => [
        'timezone' => 'Asia/Jakarta',
        'locale' => 'id',

        'time' => 'H:i:S',
        'timeampm' => 'G:i:S K',

        'date' => 'd/m/Y',
        'datetime' => 'd/m/Y H:i:S',
        'datetimeampm' => 'd/m/Y G:i:S K',

        'datemonth' => 'd F Y',
        'datetimemonth' => 'd F Y H:i:S',
        'datetimeampmmonth' => 'd F Y G:i:S K',

        'datemonthshort' => 'd-M-Y',
        'datetimemonthshort' => 'd-M-Y H:i:S',
        'datetimeampmmonthshort' => 'd-M-Y G:i:S K',

        'datemonthday' => 'l, d F Y',
        'datetimemonthday' => 'l, d F Y H:i:S',
        'datetimeampmmonthday' => 'l, d F Y G:i:S K',

        'datemonthshortday' => 'D, d-M-Y',
        'datetimemonthshortday' => 'D, d-M-Y H:i:S',
        'datetimeampmmonthshortday' => 'D, d-M-Y G:i:S K',
    ],

    /*
    |--------------------------------------------------------------------------
    | Format default tanggal
    |--------------------------------------------------------------------------
    |
    | Format menggunakan isoFormat dari php Carbon
    | https://carbon.nesbot.com/docs/ ==> Localization
    |
    */
    'date' => [
        'timezone' => 'Asia/Jakarta',
        'locale' => 'id_ID',

        'time' => 'HH:mm:ss',
        'timeampm' => 'hh:mm:ss A',

        'date' => 'DD/MM/YYYY',
        'datetime' => 'DD/MM/YYYY HH:mm:ss',
        'datetimeampm' => 'DD/MM/YYYY hh:mm:ss A',

        'datemonth' => 'DD MMMM YYYY',
        'datetimemonth' => 'DD MMMM YYYY HH:mm:ss',
        'datetimeampmmonth' => 'DD MMMM YYYY hh:mm:ss A',

        'datemonthshort' => 'DD-MMM-YYYY',
        'datetimemonthshort' => 'DD-MMM-YYYY HH:mm:ss',
        'datetimeampmmonthshort' => 'DD-MMM-YYYY hh:mm:ss A',

        'datemonthday' => 'dddd, DD MMMM YYYY',
        'datetimemonthday' => 'dddd, DD MMMM YYYY HH:mm:ss',
        'datetimeampmmonthday' => 'dddd, DD MMMM YYYY hh:mm:ss A',

        'datemonthshortday' => 'dddd, DD-MMM-YYYY',
        'datetimemonthshortday' => 'dddd, DD-MMM-YYYY HH:mm:ss',
        'datetimeampmmonthshortday' => 'dddd, DD-MMM-YYYY hh:mm:ss A',
        
        'iso' => [
            'months' => [
                'Januari' => 'January',
                'Februari' => 'February',
                'Maret' => 'March',
                'April' => 'April',
                'Mei' => 'May',
                'Juni' => 'June',
                'Juli' => 'July',
                'Agustus' => 'August',
                'September' => 'September',
                'Oktober' => 'October',
                'November' => 'November',
                'Desember' => 'December'
            ],
            'short_months' => [
                'Jan' => 'Jan',
                'Feb' => 'Feb',
                'Mar' => 'Mar',
                'Apr' => 'Apr',
                'Mei' => 'May',
                'Jun' => 'Jun',
                'Jul' => 'Jul',
                'Agt' => 'Aug',
                'Sep' => 'Sep',
                'Okt' => 'Oct',
                'Nov' => 'Nov',
                'Des' => 'Dec'
            ],

            'weekdays' => [
                'Minggu' => 'Sunday',
                'Senin' => 'Monday',
                'Selasa' => 'Tuesday',
                'Rabu' => 'Wednesday',
                'Kamis' => 'Thursday',
                'Jumat' => 'Friday',
                'Sabtu' => 'Saturday'
            ],

            'weekdays_short' => [
                'Min' => 'Sun',
                'Sen' => 'Mon',
                'Sel' => 'Tue',
                'Rab' => 'Wed',
                'Kam' => 'Thu',
                'Jum' => 'Fri',
                'Sab' => 'Sat'
            ],

            'weekdays_min' => [
                'Mg' => 'Su',
                'Sn' => 'Mo',
                'Sl' => 'Tu',
                'Rb' => 'We',
                'Km' => 'Th',
                'Jm' => 'Fr',
                'Sb' => 'Sa'
            ],
        
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | UIUX
    |--------------------------------------------------------------------------
    |
    | Config UIUX
    | 
    |
    */
    'uiux' => [
        'blank_image' => 'img/no-image.png',
        'logo' => env('LOGO', 'demo_logo.png'),
        'logo_landscape' => env('LOGO_LANDSCAPE', 'demo_logo_landscape.png'),
        'logo_icon' => env('LOGO_ICON', 'demo_logo_icon.png'),
        'favicon' => env('FAVICON', 'demo_favicon-32x32.png'),
    ],

];
