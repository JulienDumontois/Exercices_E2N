app = angular.module('app', []);
app.controller('CommentsCtrl', function($scope, $http, $filter){
    
$scope.comments = [];
$scope.date = $filter('date')('898974568', 'medium');
$scope.search = {};

$http.get('http://jsonplaceholder.typicode.com/comments').then(function(response){
    $scope.comments = response.data;
});
});