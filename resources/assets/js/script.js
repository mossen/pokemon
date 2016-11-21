var app = angular.module('assessmentApp', []);
app.controller('assessmentCtrl', function ($scope, $http) {

    $scope.sendForm = function (event,form){
        event.preventDefault();
        $scope.loading = true;

        var config = {
            headers : {

                'X-Requested-With': 'XMLHttpRequest'
            }
        }

        $http.post('/assessment/public/home', {'url' : $scope.url}, config)
            .success(function (response, status, headers, config) {

                if (response.message == "ERROR")
                {
                    $scope.products= [];
                    $scope.error = true;
                    $scope.loading = false;
                    return;
                }

                $scope.error = false;
                $scope.products = response['product'];
                $scope.loading = false;
            })
            .error(function (data, status, header, config) {
                $scope.status = status;
            });

    };

});



