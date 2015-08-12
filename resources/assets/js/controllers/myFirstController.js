(function() {

  'use strict';

  angular
    .module('testAngularApp')
    .controller('myFirstController', functionName);

    function functionName($scope) {

        $scope.groupofthings = [
            {
                'name': 'John Doe',
                'email': 'john@doe.com'
            },
            {
                'name': 'Jason Raimondi',
                'email': 'jason@raimondi.com'
            },
            {
                'name': 'Kim Calderone',
                'email': 'kim@calderone.com'
            },
            {
                'name': 'Edward Carlisle',
                'email': 'edward@carlisle.com'
            }
        ];

        $scope.something = 'Something Something';

    }

})();
