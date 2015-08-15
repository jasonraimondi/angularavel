var paths = {
	'BOWER': './vendor/bower_components/',
	'DESTINATION': './public/assets/',
	'SOURCE': './resources/assets/',
	'NODE': './node_modules/',
	'VIEWS': './resources/views/',
}

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

	mix.sass('style.scss', paths.DESTINATION + 'css/style.css', {
		includePaths: [
			paths.BOWER + 'foundation/scss',
			paths.BOWER + 'select2/src/scss'
		]
	});

	// mix.scripts([
	//     paths.NODE + 'angular/angular.js',
	//     paths.NODE + 'angular-route/angular-route.js',
	//     paths.NODE + 'angular-resource/angular-resource.js',
	// ], paths.DESTINATION + 'js/vendor.js', './');

	// mix.scripts([
	//     paths.SOURCE + 'js/config/routes.js',
	//     paths.SOURCE + 'js/services/api.js',
	//     paths.SOURCE + 'js/controllers/myFirstController.js',
	//     paths.SOURCE + 'js/controllers/mySecondController.js',
	// ], paths.DESTINATION + 'js/app.js', './');

	mix.browserify(paths.SOURCE + 'js/app.js', paths.DESTINATION + 'js/package.js', './');

});