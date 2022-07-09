var app = angular.module('myapp', ['angularUtils.directives.dirPagination']); //tao 1 module
app.controller('hdbancontroller', function($scope, $http) { //tao 1 controller
    $scope.timkiem = "";
    $scope.serial = 1
    $scope.itemPerPage = 5;
    $scope.indexCount = function(newPageNumber) {
        $scope.serial = newPageNumber * $scope.itemPerPage - ($scope.itemPerPage - 1);
    }
    $http({
        method: "GET",
        url: "http://localhost:8000/api/hdbans"
    }).then(function(response) {
        console.log(response.data);
        $scope.hdbans = response.data;
    });
    $http({
        method: "GET",
        url: "http://localhost:8000/api/khachhangs"
    }).then(function(response) {
        console.log(response.data);
        $scope.khachhangs = response.data;
    });

    $scope.showmodal = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Add new hdban";
            if ($scope.hdban) {
                $scope.hdban.id_kh = "";
                $scope.hdban.dia_chi_nhan = "";
                $scope.hdban.ngay_dat = "";
                $scope.hdban.tong_tien = "";
                $scope.hdban.ghi_chu = "";
                $scope.hdban.ht_thanh_toan = "";

            }

        } else {
            $scope.modalTitle = "Edit hdban";
            $http({
                method: "GET",
                url: "http://localhost:8000/api/hdbans/" + id
            }).then(function(response) {
                $scope.hdban = response.data;
                $scope.hdban.id_kh = $scope.hdban.id_kh + '';

            });
        }
        $('#modelId').modal('show');
    }
    $scope.deleteClick = function(id) {
        var hoi = confirm("Ban co muon xoa that khong");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://localhost:8000/api/hdbans/" + id
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
                url: "http://localhost:8000/api/hdbans",
                data: $scope.hdban,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        } else {
            $http({
                method: "PUT",
                url: "http://localhost:8000/api/hdbans/" + $scope.id,
                data: $scope.hdban,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        }
    }

    const id = localStorage.getItem('chosenId');
    //Lấy chi tiết hóa đơn
    $scope.Billsdetail = function(id) {
        $scope.id = id;
        $scope.modalTitle1 = "Chi tiết đơn hàng";
        $http({
            method: "get",
            url: "http://localhost:8000/api/hdbans/LayCTHDBan/" + id,
            params: {
                MaHD: localStorage.getItem("id_hdb")
            }

        }).then(function(response) {
            $scope.CTHDBan = response.data;
            console.log(response.data);
        }, err => console.log(err));
        $('#modelId1').modal('show');
    }
});