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
    .sass('resources/sass/app.scss', 'public/css')
    .styles('resources/views/layouts/css/stylos.css','public/css/stylos.css') .version()
    .sass('resources/views/layouts/scss/template.scss','public/scss/template.css') .version()
    .styles('resources/views/layouts/pace-master/themes/green/pace-theme-minimal.css','public/css/green-pace-theme-minimal.css') .version()
    .scripts('resources/views/layouts/pace-master/pace.js','public/js/pace.js') .version()
    .scripts('resources/views/layouts/js/script.js','public/js/script.js')
    .scripts('node_modules/jquery/dist/jquery.js','public/js/jquery.js')
    .scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.js','public/js/bootstrap.bundle.js') .version()
    .sourceMaps();
