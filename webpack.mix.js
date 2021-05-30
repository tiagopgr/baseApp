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

/*
mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
*/

mix.js('resources/js/app.js', 'public/js');
mix.sass('resources/sass/app.scss', 'public/css');
// mix.copy("resources/images/", "public/images/");

mix.copy("./node_modules/@coreui/icons/sprites/", "public/vendors/@coreui/icons/svg/");
mix.copy("./node_modules/sweetalert2/dist/sweetalert2.min.css", "public/vendors/sweetalert2/sweetalert2.min.css");
mix.copy("./node_modules/sweetalert2/dist/sweetalert2.all.min.js", "public/vendors/sweetalert2/sweetalert2.min.js");
