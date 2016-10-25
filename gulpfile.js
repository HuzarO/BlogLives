const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');
require('laravel-elixir-livereload');

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
	mix.copy(['./node_modules/font-awesome/fonts'], './public/fonts/font-awesome')
		.copy(['./node_modules/bootstrap/dist/fonts'], './public/fonts/bootstrap');

    mix.scripts([
        './node_modules/jquery/dist/jquery.min.js',
        './node_modules/bootstrap/dist/js/bootstrap.min.js',
        './node_modules/angular/angular.js',
        './node_modules/angular-ui-router/release/angular-ui-router.min.js',
        './node_modules/angular-bootstrap/ui-bootstrap.min.js',
        './node_modules/angular-bootstrap/ui-bootstrap-tpls.min.js',
        './node_modules/angular-animate/angular-animate.min.js',
        './node_modules/angular-touch/angular-touch.min.js',

        'app.module.js',
        'app.router.js',
    ], './public/js/app.js');

    mix.styles([
        './node_modules/bootstrap/dist/css/bootstrap.min.css',
        './node_modules/font-awesome/css/font-awesome.min.css',

        'animations.css',
        'forms.css',
        'widgets.css',
        'style.css',
        'error-page.css',
    ], './public/css/app.css');

    mix.livereload();
});
