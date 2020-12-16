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

/** app.jsでbundleしてみる */
mix.js('resources/js/app.js', 'public/js')
    .sass('resources/css/animate.css', 'public/css')
    .sass('resources/css/bootstrap.css', 'public/css')
    .sass('resources/css/flexslider.css', 'public/css')
    .sass('resources/css/icomoon.css', 'public/css')
    .sass('resources/css/style.css', 'public/css');
    /** cssをwebpack上でbundleしてみる */
    // .styles([
    // 'resources/css/icomoon.css',
    // 'resources/css/bootstrap.css',
    // 'resources/css/animate.css',
    // 'resources/css/flexslider.css',
    // 'resources/css/style.css'],'public/css/app.css');
