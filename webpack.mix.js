const mix = require('laravel-mix');
require('laravel-mix-purgecss');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css');

mix.setPublicPath('public');
mix.setResourceRoot('../');

mix.js('resources/js/admin.js', 'public/js')
   // .js('resources/js/app.js', 'public/js')
   .extract(['jquery', 'overlayscrollbars', 'popper.js', 'bootstrap'])
   .sass('resources/sass/admin.scss', 'public/css')
   .sass('resources/sass/app.scss', 'public/css')
   .copyDirectory('resources/assets/img', 'public/img')
   .styles([
    'resources/css/main.css'
   ], 'public/css/main.css')
   .styles([
    'resources/plugins/chart/Chart.min.css',
    'resources/plugins/flatpickr/flatpickr.css',
    'resources/plugins/select2/select2.min.css',
   ], 'public/css/plugins.css')
   .scripts([
      'resources/plugins/chart/Chart.min.js',
      'resources/plugins/flatpickr/flatpickr.js',
      'resources/plugins/flatpickr/lang/id.js',
      'resources/plugins/ckeditor/ckeditor.js',
      'resources/plugins/select2/select2.min.js',
      'resources/plugins/TableFilter/TableFilter.js',
      'resources/plugins/TableToExcel/TableToExcel.js',
      'resources/plugins/jspdf/jspdf.js',
      'resources/plugins/jspdf/jspdf.plugin.autotable.js',
      'resources/plugins/jspdf/TableToPdf.js',
      'resources/plugins/xlsx/xlsx.min.js'
   ], 'public/js/plugins.js')
   .scripts([
      'resources/js/main.js'
   ], 'public/js/main.js');
