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

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .styles([
        'public/assets/vendors/iconfonts/mdi/css/materialdesignicons.css',
        'public/assets/vendors/iconfonts/ionicons/css/ionicons.css',
        'public/assets/vendors/iconfonts/typicons/src/font/typicons.css',
        'public/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css',
        'public/assets/vendors/css/vendor.bundle.base.css',
        'public/assets/vendors/css/vendor.bundle.addons.css',
        'public/assets/css/shared/style.css',
        'public/assets/css/demo_1/style.css',
    ],'public/admin/css/library.min.css')
    .copyDirectory('public/assets/images','public/images')
    .scripts([
        'public/assets/vendors/js/vendor.bundle.base.js',
        'public/assets/vendors/js/vendor.bundle.addons.js',
        'public/assets/js/shared/off-canvas.js',
        'public/assets/js/shared/misc.js',
        'public/assets/js/demo_1/dashboard.js'
    ],'public/admin/js/library.min.js').version();
