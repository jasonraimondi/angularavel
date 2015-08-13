(function() {

  'use strict';

  angular
    .module('testAngularApp')
    .controller('mySecondController', functionName);

    function functionName($scope, $http) {


        $http.get('data/projects.json').success(function(data) {

            $scope.projects = data;

        })

    }

})();
