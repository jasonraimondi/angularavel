(function() {

  'use strict';

  angular
    .module('testAngularApp', [
      'ngRoute'
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
                    redirectTo: '/'
                });
    }]);

})();
