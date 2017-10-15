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
    'bower_components/modernizr/modernizr.js',
    'bower_components/flexslider/jquery.flexslider.js',
    'bower_components/lightgallery/dist/js/lightgallery.min.js',
    'bower_components/smartmenus/dist/jquery.smartmenus.js',
    'src/js/resizeImages.js',
    'src/js/slideshow.js', 
    'src/js/main.js'
], 'public/main.js')
    .less('src/css/main.less', 'src/main.css')
    .styles([
        'bower_components/lightgallery/dist/css/lightgallery.css',
        'src/main.css'
    ], 'public/main.css')
    .sourceMaps();
