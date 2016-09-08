app = angular.module('app', []);
            app.directive('validateEmail', function () {
                var REGIS = RegExp('^[0-9a-z._-]+@{1}[0-9a-z.-]{2,}[.]{1}[a-z]{2,5}$','i');
                return {
                    link: function (scope, element) {
                        element.on("keyup", function () {
                            var isMatchRegex = REGIS.test(element.val());
                            if (isMatchRegex && element.hasClass('warning')) {
                                element.removeClass('warning');
                                element.addClass('ok');
                            } else if (isMatchRegex == false && !element.hasClass('warning')) {
                                element.addClass('warning');
                                element.removeClass('ok');
                            }
                        });
                    }
                }
            });
