let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application, as well as bundling up your JS files.
 |
 */

mix.scripts([
    'node_modules/jquery/dist/jquery.js',
    'node_modules/flexslider/jquery.flexslider-min.js',
    'node_modules/lightgallery/dist/js/lightgallery.min.js',
    'node_modules/smartmenus/dist/jquery.smartmenus.min.js',
    'src/js/resizeImages.js',
    'src/js/slideshow.js', 
    'src/js/main.js'
], 'public/main.js')
    .less('src/css/main.less', 'public/main.css')
    .sourceMaps();
