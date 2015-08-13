(function() {

  'use strict';

  angular
    .module('testAngularApp')
    .controller('mySecondController', functionName);

    function functionName($scope, $http) {

        console.log('hi');

        $http.get('data/time.json').success(function(data) {

            console.log(data);

            $scope.phones = data;

        })

    }

})();
