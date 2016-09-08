//CONFIGURATION GLOBALE
var app = angular.module('MonApp', ['ngRoute']);
app.config(function ($routeProvider) {
    $routeProvider
            .when('/', {templateUrl: 'home.html', controller: 'PostsCtrl'})
            .when('/comments/:id', {templateUrl: 'comments.html',
                controller: 'CommentsCtrl'})
            .otherwise({redirectTo: '/'});
});

