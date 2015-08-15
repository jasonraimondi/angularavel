(function() {

    'use strict';

    angular
        .module('testAngularApp')
        .controller('mySecondController', functionName);

    function functionName($scope, $http) {

        var url = '/api/v1/projects';

        $http.get(url).success(function(data) {
            $scope.projects = data;
        });

        $scope.addProject = function(project) {

            var project = {
                title: $scope.projectTitle,
                description: $scope.projectDescription
            };

            $scope.projects.push(project);

            $http.post(url, project);

        };

    }


})();