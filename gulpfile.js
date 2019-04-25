const elixir = require('laravel-elixir');

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

elixir(mix => {
    mix.sass('app.scss');
    mix.copy('resources/assets/vendor/bootstrap/fonts', 'public/fonts');
    mix.copy('resources/assets/vendor/font-awesome/fonts', 'public/fonts');
    mix.copy('resources/assets/vendor/plugins/footable/fonts', 'public/css/fonts');
    mix.copy('resources/assets/vendor/images', 'public/img');
    mix.copy('resources/assets/vendor/images/css', 'public/css');
    mix.styles([
        'resources/assets/vendor/bootstrap/css/bootstrap.css',
        'resources/assets/vendor/animate/animate.css',
        'resources/assets/vendor/font-awesome/css/font-awesome.css',
        'resources/assets/vendor/plugins/iCheck/custom.css',
        'resources/assets/vendor/plugins/steps/jquery.steps.css',
        'resources/assets/vendor/plugins/blueimp/css/blueimp-gallery.min.css',
        'resources/assets/vendor/plugins/footable/footable.core.css',
        'resources/assets/vendor/plugins/fullcalendar/fullcalendar.css',
        'resources/assets/vendor/plugins/dataTables/datatables.min.css',
        'resources/assets/vendor/plugins/toastr/toastr.min.css',
    ], 'public/css/vendor.css', './');
    mix.scripts([
		'resources/assets/vendor/plugins/fullcalendar/moment.min.js',
		'resources/assets/vendor/jquery/jquery-3.1.1.min.js',
        'resources/assets/vendor/bootstrap/js/bootstrap.js',
        'resources/assets/vendor/metisMenu/jquery.metisMenu.js',
        'resources/assets/vendor/slimscroll/jquery.slimscroll.min.js',
        'resources/assets/vendor/pace/pace.min.js',
		'resources/assets/vendor/plugins/steps/jquery.steps.min.js',
		'resources/assets/vendor/plugins/validate/jquery.validate.min.js',
		'resources/assets/vendor/plugins/blueimp/jquery.blueimp-gallery.min.js',
		'resources/assets/vendor/plugins/footable/footable.all.min.js',
		'resources/assets/vendor/plugins/jquery-ui/jquery-ui.min.js',
		'resources/assets/vendor/plugins/iCheck/icheck.min.js',
		'resources/assets/vendor/plugins/fullcalendar/fullcalendar.min.js',
		'resources/assets/vendor/plugins/toastr/toastr.min.js',
		'resources/assets/vendor/plugins/dataTables/datatables.min.js',
		'resources/assets/vendor/plugins/touchpunch/jquery.ui.touch-punch.min.js',
		'resources/assets/js/app.js',
		], 'public/js/app.js', './');

});
