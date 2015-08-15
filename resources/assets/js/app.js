var angular = require('angular');
var angularRoute = require('angular-route');

(function() {

	'use strict';

	angular
		.module('testAngularApp', [
			'ngRoute',
		])
        .constant("CSRF_TOKEN", '{{ csrf_token() }}')
		.config(['$routeProvider',
			function($routeProvider) {
				$routeProvider
                    .when('/projects/create', {
                        templateUrl: 'partials/projects/create.html',
                        controller: 'myFirstController'
                    })
					.when('/list', {
						templateUrl: 'partials/list.html',
						controller: 'myFirstController'
					})
					.when('/api', {
						templateUrl: 'partials/api.html',
						controller: 'mySecondController'
					})
					.otherwise({
						redirectTo: '/projects/create'
					});
			}
		]);

})();

var myFirstController = require('./controllers/myFirstController');
var mySecondController = require('./controllers/mySecondController');