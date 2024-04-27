let mix = require('laravel-mix');

mix.js('resources/js/app.js', 'js')
    .sass('resources/sass/app.scss', 'css');

mix.browserSync({
    host: 'localhost',
    proxy: 'localhost',
    port: 3000,
    open: false,
    ui: false
});