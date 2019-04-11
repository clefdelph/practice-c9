angular.module('myapp', [])
    .controller('MainController', ['$scope', function($scope) {
        $scope.users = [
            {"name":"delph", "score":52.22},
            {"name":"clef", "score":38.22},
            {"name":"cle", "score":11.11},
            {"name":"quater", "score":26.98},
            {"name":"quaver", "score":46.34}
        ];
        $scope.today = new Date();
    }])
    .controller('UserItemController', ['$scope', function($scope) {
        $scope.increment = function() {
            $scope.user.score++;
        };
         $scope.decrement = function() {
            $scope.user.score--;
        };
        
    }]);