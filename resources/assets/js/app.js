var angular = require('angular');
var angularRoute = require('angular-route');

(function() {

	'use strict';

	angular
		.module('testAngularApp', [
			'ngRoute',
		])
		.config(['$routeProvider',
			function($routeProvider) {
				$routeProvider
					.when('/list', {
						templateUrl: 'partials/list.html',
						controller: 'myFirstController'
					})
					.when('/api', {
						templateUrl: 'partials/api.html',
						controller: 'mySecondController'
					})
					.otherwise({
						redirectTo: '/list'
					});
			}
		]);

})();

var myFirstController = require('./controllers/myFirstController');
var mySecondController = require('./controllers/mySecondController');