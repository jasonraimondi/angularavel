var angular = require('angular');
var angularRoute = require('angular-route');
var angularResource = require('angular-resource');

(function() {

    'use strict';

    console.log('We made it this far at least.');

    angular
    .module('testAngularApp', [
        'ngRoute',
        'ngResource'
    ]);

})();

var routes = require('./config/routes');
// var api = require('./services/api');
var myFirstController = require('./controllers/myFirstController');
// var mySecondController = require('./controllers/mySecondController');