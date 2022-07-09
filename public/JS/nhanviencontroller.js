var app = angular.module('myapp', ['angularUtils.directives.dirPagination']); //tao 1 module
app.controller('nhanviencontroller', function($scope, $http) { //tao 1 controller
    $scope.timkiem = "";
    $scope.serial = 1
    $scope.itemPerPage = 5;
    $scope.indexCount = function(newPageNumber) {
        $scope.serial = newPageNumber * $scope.itemPerPage - ($scope.itemPerPage - 1);
    }
    $http({
        method: "GET",
        url: "http://localhost:8000/api/nhanviens"
    }).then(function(response) {
        console.log(response.data);
        $scope.nhanviens = response.data;
    });
    $scope.showmodal = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Add new nhanvien";
            if ($scope.nhanvien) {
                $scope.nhanvien.tennv = "";
                $scope.nhanvien.gioi_tinh = "";
                $scope.nhanvien.ngay_sinh = "";
                $scope.nhanvien.dia_chi = "";
                $scope.nhanvien.sdt = "";
                $scope.nhanvien.email = "";
            }

        } else {
            $scope.modalTitle = "Edit nhanvien";
            $http({
                method: "GET",
                url: "http://localhost:8000/api/nhanviens/" + id
            }).then(function(response) {
                $scope.nhanvien = response.data;
            });
        }
        $('#modelId').modal('show');
    }
    $scope.deleteClick = function(id) {
        var hoi = confirm("Ban co muon xoa that khong");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://localhost:8000/api/nhanviens/" + id
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
                url: "http://localhost:8000/api/nhanviens",
                data: $scope.nhanvien,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        } else {
            $http({
                method: "PUT",
                url: "http://localhost:8000/api/nhanviens/" + $scope.id,
                data: $scope.nhanvien,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        }
    }
});