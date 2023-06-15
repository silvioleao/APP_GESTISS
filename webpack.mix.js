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

mix.js(`${JS_PATH}/app.js`, `${JS_PUBLIC}/app.min.js`)
    .js(`${JS_PATH}/toast.js`, `${JS_PUBLIC}/toast.min.js`)
    .scripts(`${JS_PATH}/pages/painel.js`, `${JS_PUBLIC}/paginas/painel.min.js`)
    .scripts(
        `${JS_PATH}/pages/atendimentos.js`,
        `${JS_PUBLIC}/paginas/atendimento.min.js`
    )
    .scripts(
        `${JS_PATH}/pages/atendimento_detalhe.js`,
        `${JS_PUBLIC}/paginas/atendimento_detalhe.min.js`
    )
    .scripts(
        `${JS_PATH}/pages/prescricoes.js`,
        `${JS_PUBLIC}/paginas/prescricoes.min.js`
    )

    .sass("resources/scss/main.scss", "public/css/app.min.css")
    .css("resources/css/fontawesome.css", "public/css/fontawesome.min.css")
    .version();
