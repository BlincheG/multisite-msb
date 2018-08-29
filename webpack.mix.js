let mix = require('laravel-mix');

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

// Sites
mix.js('resources/assets/js/sites/msb1.js', 'public/js/sites')
    .sass('resources/assets/sass/sites/msb1.scss', 'public/css/sites');

// Sites
mix.js('resources/assets/js/sites/msb2.js', 'public/js/sites')
    .sass('resources/assets/sass/sites/msb2.scss', 'public/css/sites');

// Sites
mix.js('resources/assets/js/sites/msb3.js', 'public/js/sites')
    .sass('resources/assets/sass/sites/msb3.scss', 'public/css/sites');

// Sites
mix.js('resources/assets/js/sites/msb4.js', 'public/js/sites')
    .sass('resources/assets/sass/sites/msb4.scss', 'public/css/sites');

mix.js('resources/assets/js/app.js', 'public/js')
    .extract([
        'slick-carousel'
    ])
    .sass('resources/assets/sass/app.scss', 'public/css')
    .copyDirectory('resources/static/images', 'public/images');
