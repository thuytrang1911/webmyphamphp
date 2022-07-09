var app = angular.module('myapp', []); //tao 1 module
app.controller('dathangcontroller', function($scope, $http, $rootScope) { //tao 1 controller
    //Đăng nhập
    $scope.test = false;
    $scope.kh = "";
    if (sessionStorage.getItem("kh") == null) {
        $scope.dangnhap = "Login";
    } else {
        $http({
            method: "GET",
            url: "http://localhost:8000/api/kh/" + sessionStorage.getItem("kh")
        }).then(function(response) {
            $scope.kh = response.data;
            console.log($scope.kh);
            $scope.dangnhap = $scope.kh.usersname;
            $scope.test = true;
        });
    }
    $scope.LoadCart = function() {
        $scope.cart = JSON.parse(localStorage.getItem('cart'));
    }
    $scope.LoadCart();

    $scope.total1 = 0;

    function reCaculatioTotalPrice() {
        let total1 = 0;
        $scope.cart.forEach(e => {
            total1 += e.unit_price * e.quantity
        });
        $rootScope.total = total1;
    }
    reCaculatioTotalPrice();

    //đặt hàng
    $rootScope.customer = null;
    $scope.id = JSON.parse(sessionStorage.getItem("kh"));

    // lấy thông tin khách hàng
    if ($scope.id) {
        $http({
            method: "GET",
            url: "http://localhost:8000/api/kh/" + $scope.id
        }).then(function(response) {
            $scope.customer = response.data;
            // console.log($scope.customer);
        }, err => console.log(err));
    }

    $scope.dathang = () => {
        const order = {
            id_kh: $scope.id,
            tong_tien: $rootScope.total,
            dia_chi_nhan: $scope.customer.dia_chi,
            details: $scope.cart,
        };

        $http({
            method: "POST",
            url: "http://localhost:8000/api/hdbans/",
            data: order
        }).then(res => {
            localStorage.removeItem('cart');
            location.href = "index"
            alert("Đặt hàng thành công");
        }, err => console.log(err));
    };
    //tính số lượng
    $scope.Sum = function() {
        $scope.cart = JSON.parse(localStorage.getItem('cart'));
        var s = 0;
        if ($scope.cart != null) {
            $scope.cart.forEach(e => {
                s = s + e.quantity;
            });
        } else {
            s = 0;
        }
        return s;
    }
});