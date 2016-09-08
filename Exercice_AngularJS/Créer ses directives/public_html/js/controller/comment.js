// AFFICHER L'HEURE
app.directive('time', function(dateFilter, $interval){
    return {
        restrict : 'E',
        template : '{{time}}',
        scope : {},
        link: function(scope, element, attrs){
            scope.time = dateFilter(new Date(), 'hh:mm:ss');
            
            element.on('$destroy', function(){
                $interval.cancel(interval);
            });
            
            interval = $interval(function(){
              scope.time = dateFilter(new Date(), 'hh:mm:ss');  
            },1000);
        }
    };
});

// AFFICHER PICKADATE
app.directive('datepicker', function(){
    return {
        restrict: 'C',
        scope: {
                options : '=datepickerOptions'
            },
        link: function(scope, element, attrs){
            $(element).pickadate(scope.options);
        }
    }
});

app.directive('ngTabs',function(){
    return {
            restrict: 'E',
            transclude: true,
            templateUrl: 'Directive/tabs.html',
            scope: {},
            controller: function($scope){
                $scope.tabs = [];
                $scope.select = function(tab){
                    angular.forEach($scope.tabs, function(t){
                        t.selected = false;
                    })
                    tab.selected = true;
                }
                this.add = function(tab){
                   $scope.tabs.push(tab);
                }
            }
    }
});

app.directive('ngTab',function(){
    return {
            restrict: 'E',
            transclude: true,
            templateUrl: 'Directive/tab.html',
            scope: {
                title: '@'
            },
           require: '^ngTabs',
           link: function(scope, element, attrs, tabsCtrl){
               scope.selected = false;
             tabsCtrl.add(scope);
               }                 
               } 
})
