var app = angular.module('myapp', ['angularUtils.directives.dirPagination']); //tao 1 module
app.controller('nhacungcapcontroller', function($scope, $http) { //tao 1 controller
    $scope.timkiem = "";
    $scope.serial = 1
    $scope.itemPerPage = 5;
    $scope.indexCount = function(newPageNumber) {
        $scope.serial = newPageNumber * $scope.itemPerPage - ($scope.itemPerPage - 1);
    }
    $http({
        method: "GET",
        url: "http://localhost:8000/api/nhacungcaps"
    }).then(function(response) {
        console.log(response.data);
        $scope.nhacungcaps = response.data;
    });
    $scope.showmodal = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Add new nhacungcap";
            if ($scope.nhacungcap) {
                $scope.nhacungcap.ten_ncc = "";
                $scope.nhacungcap.dia_chi = "";
                $scope.nhacungcap.sdt = "";
                $scope.nhacungcap.email = "";
            }

        } else {
            $scope.modalTitle = "Edit nhacungcap";
            $http({
                method: "GET",
                url: "http://localhost:8000/api/nhacungcaps/" + id
            }).then(function(response) {
                $scope.nhacungcap = response.data;
            });
        }
        $('#modelId').modal('show');
    }
    $scope.deleteClick = function(id) {
        var hoi = confirm("Ban co muon xoa that khong");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://localhost:8000/api/nhacungcaps/" + id
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
                url: "http://localhost:8000/api/nhacungcaps",
                data: $scope.nhacungcap,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        } else {
            $http({
                method: "PUT",
                url: "http://localhost:8000/api/nhacungcaps/" + $scope.id,
                data: $scope.nhacungcap,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        }
    }
});