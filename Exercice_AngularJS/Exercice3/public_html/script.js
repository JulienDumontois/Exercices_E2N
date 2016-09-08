app = angular.module('app', []);
                app.controller('appCtrl', ['$scope', function ($scope) {
                        $scope.rgxPhone = /^(([0-9]{2})[-. ]?){5}$/;
                        $scope.rgxName = /^([a-zA-Z])+$/;
                        $scope.messages = [];
                        $scope.addMessage = function (message) {
                            $scope.messages.push(angular.copy(message));
                        };
                    }]);