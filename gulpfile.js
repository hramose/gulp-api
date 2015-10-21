var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('/client/**/*.scss', 'public/css/client/app.css')
       .sass('/admin/**/*.scss',  'public/css/admin/app.css');

    mix.scripts('/client/**/*.js', 'public/js/client/all.js')
       .scripts('/admin/**/*.js',  'public/js/admin/all.js');
});
