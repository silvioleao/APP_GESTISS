const mix = require("laravel-mix");
const JS_PATH = "resources/js";
const JS_PUBLIC = "public/js";

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

mix.autoload({
    jquery: ["$", "jQuery", "window.jQuery"],
});

mix.sass("resources/scss/main.scss", "public/css/app.min.css")
    .js(`${JS_PATH}/app.js`, `${JS_PUBLIC}/app.min.js`)
    .version();
