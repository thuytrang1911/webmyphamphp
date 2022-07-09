var app = angular.module('myapp', ['angularUtils.directives.dirPagination']); //tao 1 module
app.controller('khachhangcontroller', function($scope, $http) { //tao 1 controller
    $scope.timkiem = "";
    $scope.serial = 1
    $scope.itemPerPage = 5;
    $scope.indexCount = function(newPageNumber) {
        $scope.serial = newPageNumber * $scope.itemPerPage - ($scope.itemPerPage - 1);
    }
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
            $scope.modalTitle = "Add new khachhang";
            if ($scope.khachhang) {
                $scope.khachhang.ten_kh = "";
                $scope.khachhang.dia_chi = "";
                $scope.khachhang.sdt = "";
                $scope.khachhang.usersname = "";
                $scope.khachhang.password = "";
            }

        } else {
            $scope.modalTitle = "Edit khachhang";
            $http({
                method: "GET",
                url: "http://localhost:8000/api/khachhangs/" + id
            }).then(function(response) {
                $scope.khachhang = response.data;
            });
        }
        $('#modelId').modal('show');
    }
    $scope.deleteClick = function(id) {
        var hoi = confirm("Ban co muon xoa that khong");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://localhost:8000/api/khachhangs/" + id
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
                url: "http://localhost:8000/api/khachhangs",
                data: $scope.khachhang,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        } else {
            $http({
                method: "PUT",
                url: "http://localhost:8000/api/khachhangs/" + $scope.id,
                data: $scope.khachhang,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        }
    };

});
app.controller("kh", function($scope, $http) {
    $scope.sai = "";
    $scope.kh = {};
    $scope.dangnhap = function(tk, mk) {
            $scope.tk = tk;
            $scope.mk = mk;
            $http({
                method: "GET",
                url: "http://localhost:8000/api/kh1/get/" + $scope.tk + "&" + $scope.mk
            }).then(function(response) {
                sessionStorage.setItem("kh", response.data.id);
                window.location.assign("http://127.0.0.1:8000/index")
            }, function() {
                $scope.sai = "Sai tài khoản hoặc mật khẩu ?";
                $scope.tk = "";
                $scope.mk = "";
            });
        }
        // $scope.mk1 = function(mk, mk2) {
        //     if (mk == mk2) {
        //         $scope.kh.password = mk;
        //     } else {
        //         $scope.sai = "Nhập lại mật khẩu?";
        //     }
        // }
    $scope.luu = function(kh) {
        $http({
            method: "POST",
            url: "http://localhost:8000/api/kh",
            data: kh,
            "content-Type": "application/json"
        }).then(function(response) {
            $scope.message = response.data;
            alert("Đăng ký thành công");
            window.location.assign("http://127.0.0.1:8000/login")
        });
    }
    $scope.dangky = function(tk) {
        $scope.tk = tk;
        if ($scope.tk != null) {
            $http({
                method: "GET",
                url: "http://localhost:8000/api/kh1/get/" + $scope.tk
            }).then(function(response) {
                $scope.sai = "Tài khoản đã tồn tại?";
                $scope.tk = "";
                $scope.mk = "";
            }, function() {
                $scope.kh.password = $scope.mk;
                $scope.kh.usersname = $scope.tk;
                $scope.kh.ten_kh = $scope.ten_kh;
                $scope.kh.dia_chi = $scope.dia_chi;
                $scope.kh.sdt = $scope.sdt;
                console.log($scope.kh);
                $scope.luu($scope.kh);
            });
        } else {
            $scope.sai = "Nhập tài khoản?";
        }
    }
    $scope.sua = function() {
        $scope.sai = "";
    }


});