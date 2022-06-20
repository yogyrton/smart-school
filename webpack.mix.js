const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */


mix.styles([
    'resources/css/admin/all.min.css',
    'resources/css/admin/icheck-bootstrap.min.css',
    'resources/css/admin/adminlte.min.css'
], 'public/admin_assets/css/admin.css');

mix.js([
    'resources/js/admin/jquery.min.js',
    'resources/js/admin/bootstrap.bundle.min.js',
    'resources/js/admin/adminlte.min.js',
    'resources/js/admin/demo.js',
], 'public/admin_assets/js/admin.js');

 mix.js('resources/js/app.js', 'public/js')
 .sass('resources/sass/app.sass', 'public/css', []);

