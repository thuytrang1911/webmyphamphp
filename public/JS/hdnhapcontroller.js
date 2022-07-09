var app = angular.module('myapp', ['angularUtils.directives.dirPagination']); //tao 1 module
app.controller('hdnhapcontroller', function($scope, $http) { //tao 1 controller
    $scope.timkiem = "";
    $scope.serial = 1
    $scope.itemPerPage = 5;
    $scope.indexCount = function(newPageNumber) {
        $scope.serial = newPageNumber * $scope.itemPerPage - ($scope.itemPerPage - 1);
    }
    $http({
        method: "GET",
        url: "http://localhost:8000/api/hdnhaps"
    }).then(function(response) {
        console.log(response.data);
        $scope.hdnhaps = response.data;
    });
    $http({
        method: "GET",
        url: "http://localhost:8000/api/nhacungcaps"
    }).then(function(response) {
        console.log(response.data);
        $scope.nhacungcaps = response.data;
    });
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
            $scope.modalTitle = "Add new hdnhap";
            if ($scope.hdnhap) {
                $scope.hdnhap.id_ncc = "";
                $scope.hdnhap.id_nv = "";
                $scope.hdnhap.ngay_nhap = "";
                $scope.hdnhap.tong_tien = "";
                $scope.hdnhap.ht_thanh_toan = "";
                $scope.hdnhap.note = "";
            }

        } else {
            $scope.modalTitle = "Edit hdnhap";
            $http({
                method: "GET",
                url: "http://localhost:8000/api/hdnhaps/" + id
            }).then(function(response) {
                $scope.hdnhap = response.data;
                $scope.hdnhap.id_ncc = $scope.hdnhap.id_ncc + '';
                $scope.hdnhap.id_nv = $scope.hdnhap.id_nv + '';
            });
        }
        $('#modelId').modal('show');
    }
    $scope.deleteClick = function(id) {
        var hoi = confirm("Ban co muon xoa that khong");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://localhost:8000/api/hdnhaps/" + id
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
                url: "http://localhost:8000/api/hdnhaps",
                data: $scope.hdnhap,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        } else {
            $http({
                method: "PUT",
                url: "http://localhost:8000/api/hdnhaps/" + $scope.id,
                data: $scope.hdnhap,
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
        $scope.modalTitle1 = "Chi tiết đơn nhập";
        $http({
            method: "get",
            url: "http://localhost:8000/api/hdnhaps/LayCTHDNhap/" + id,
            params: {
                MaHD: localStorage.getItem("id_hdn")
            }

        }).then(function(response) {
            $scope.CTHDNhap = response.data;
            console.log(response.data);
        }, err => console.log(err));
        $('#modelId1').modal('show');
    }
});