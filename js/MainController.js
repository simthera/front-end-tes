var app = angular.module('myApp', []);
app.controller('MainController', ['$scope',function($scope){
    $scope.title = 'Main menu controller';
}]);