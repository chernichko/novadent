const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/admin/sb-admin.js', 'public/js/admin')
   .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/admin/sb-admin.scss', 'public/css/admin');

// mix.copy('./node_modules/ckeditor', 'public/js/ckeditor');//переделать импортантом