  app = angular.module('app',[]);
            app.controller('test', function($scope,$window){
                  $scope.doWrite = function(){
                       $window.alert('Noooooooon');
                  };
            });
