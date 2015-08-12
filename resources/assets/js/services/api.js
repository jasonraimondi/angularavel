(function() {

  'use strict';

  angular
    .module('testAngularApp', [
        'ngResource'
    ])
    .factory('api', functionName);

    function functionName($resource) {

        var results = $resource('data/time.json');

        console.log(results);

        return results;

    }

})();
