const mix = require('laravel-mix');
require('laravel-mix-imgmin');

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
    .vue()
    .sass('resources/sass/app.scss', 'public/css')
    .copyDirectory('resources/assets/svg', 'public/assets/svg')
    .imgmin({ input: 'resources/assets/img', output: 'assets/img', tinyPngKey: 'WPKHDxYT4j4klWXgWxQ5mwBLC1DCQrMl' });

if (mix.inProduction()) {
    mix.version();
}
