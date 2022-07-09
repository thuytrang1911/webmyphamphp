var app = angular.module('myapp', ['angularUtils.directives.dirPagination']); //tao 1 module
app.controller('dongsanphamcontroller', function($scope, $http) { //tao 1 controller
    $scope.timkiem = "";
    $scope.serial = 1
    $scope.itemPerPage = 5;
    $scope.indexCount = function(newPageNumber) {
        $scope.serial = newPageNumber * $scope.itemPerPage - ($scope.itemPerPage - 1);
    }
    $http({
        method: "GET",
        url: "http://localhost:2346/api/Dong"
    }).then(function(response) {
        console.log(response.data);
        $scope.dongs = response.data;
    });
    $scope.showmodal = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Add new dong";
            if ($scope.dong) {
                $scope.dong.ten_dong = "";

            }

        } else {
            $scope.modalTitle = "Edit dong";
            $http({
                method: "GET",
                url: "http://localhost:2346/api/Dong/" + id
            }).then(function(response) {
                $scope.dong = response.data;
            });
        }
        $('#modelId').modal('show');
    }
    $scope.deleteClick = function(id) {
        var hoi = confirm("Ban co muon xoa that khong");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://localhost:2346/api/Dong/" + id
            }).then(function(response) {
                $scope.message = response.data;
                location.reload();
            });
        }
    }
    $scope.saveData = function() {
        if ($scope.id == 0) {
            $http({
                method: "POST",
                url: "http://localhost:2346/api/Dong",
                data: $scope.dong,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        } else {
            $http({
                method: "PUT",
                url: "http://localhost:2346/api/Dong/" + $scope.id,
                data: $scope.dong,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        }
    }
});