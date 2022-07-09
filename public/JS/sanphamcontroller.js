var app = angular.module('myapp', ['angularUtils.directives.dirPagination']); //tao 1 module
app.controller('sanphamcontroller', function($scope, $http) { //tao 1 controller
    $scope.timkiem = "";
    $scope.serial = 1
    $scope.itemPerPage = 8;
    $scope.indexCount = function(newPageNumber) {
        $scope.serial = newPageNumber * $scope.itemPerPage - ($scope.itemPerPage - 1);
    }

    $scope.itemPerPages = 4;
    $scope.itemPerPaget = 9;
    // $scope.indexCounts = function(newPageNumber) {
    //     $scope.serial = newPageNumber * $scope.itemPerPage - ($scope.itemPerPage - 1);
    // }
    $http({
        method: "GET",
        url: "http://localhost:2346/api/Product"
    }).then(function(response) {
        console.log(response.data);
        $scope.products = response.data;
    });
    $http({
        method: "GET",
        url: "http://localhost:2346/api/Dong"
    }).then(function(response) {
        console.log(response.data);
        $scope.dongs = response.data;
    });
    $http({
        method: "GET",
        url: "http://localhost:2346/api/NhaCC"
    }).then(function(response) {
        console.log(response.data);
        $scope.nhacungcaps = response.data;
    });
    $http({
        method: "GET",
        url: "http://localhost:2346/api/ThuongHieu"
    }).then(function(response) {
        console.log(response.data);
        $scope.thuonghieus = response.data;
    });


    //lấy sản phẩm theo th
    $http({
        method: "get",
        url: "http://localhost:8000/api/sanpham/getSPThuongHieu/" + localStorage.getItem("thieu")

    }).then(function(d) {
        $scope.productTH = d.data;
        console.log($scope.productTH);
    }, err => console.log(err));

    $scope.saveTH = function(dongsp) {
        localStorage.setItem("thieu", dongsp);
    }

    //lấy sản phẩm theo dòng
    $http({
        method: "get",
        url: "http://localhost:8000/api/sanpham/getSPDong/" + localStorage.getItem("dong")

    }).then(function(d) {
        $scope.productDong = d.data;
        console.log($scope.productDong);
    }, err => console.log(err));

    $scope.saveDong = function(dong) {
        localStorage.setItem("dong", dong);
    }



    //lấy tt theo dòng
    $http({
        method: "get",
        url: "http://localhost:8000/api/sanpham/listDong/" + localStorage.getItem("dong"),
        params: {
            ProductName: localStorage.getItem("id_dong")
        }

    }).then(function(d) {
        $scope.productD = d.data;
        console.log($scope.productD);
    }, err => console.log(err));

    //lấy tt theo tH
    $http({
        method: "get",
        url: "http://localhost:8000/api/sanpham/listTH/" + localStorage.getItem("thieu")

    }).then(function(d) {
        $scope.productT = d.data;
        console.log($scope.productT);
    }, err => console.log(err));

    // lấy sản phẩm mới

    $http({
        method: "GET",
        url: "http://localhost:8000/api/sanpham/listSPMoi",
    }).then(function(d) {
        $scope.productNew = d.data;
        console.log($scope.productNew);
    }, err => console.log(err));

    //lấy sản phẩm bán chạy
    $http({
        method: "get",
        url: "http://localhost:8000/api/sanpham/listSPBanChay",
    }).then(function(d) {
        $scope.product1 = d.data;
        console.log($scope.product1);
    }, err => console.log(err));

    //lấy ds blog
    $http({
        method: "GET",
        url: "http://localhost:8000/api/blogs"
    }).then(function(response) {
        console.log(response.data);
        $scope.blogs = response.data;
    });
    //
    $scope.showmodal1 = function(id) {
        $scope.id = id;
        $scope.modalTitle = "Thông tin sản phẩm";
        $http({
            method: "GET",
            url: "http://localhost:2346/api/Product/" + id
        }).then(function(response) {
            $scope.product = response.data;
            $scope.product.id_dong = $scope.product.id_dong + '';
            $scope.product.id_thuonghieu = $scope.product.id_thuonghieu + '';
            $scope.product.id_ncc = $scope.product.id_ncc + '';
        });
        $('#modelId').modal('show');
    };
    $scope.showmodal = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Thêm sản phẩm";
            if ($scope.product) {
                $scope.product.ten_sp = "";
                $scope.product.id_dong = "";
                $scope.product.id_thuonghieu = "";
                $scope.product.id_ncc = "";
                $scope.product.gia_ban = "";
                $scope.product.kieu_dang = "";
                $scope.product.dung_luong = "";
                $scope.product.mau_sac = "";
                $scope.product.mui_huong = "";
                $scope.product.anh = "";
                // $scope.product.anh1 = "";
                // $scope.product.anh2 = "";
                $scope.product.mo_ta = "";
            }

        } else {
            $scope.modalTitle = "Sửa sản phẩm";
            $http({
                method: "GET",
                url: "http://localhost:2346/api/Product/" + id
            }).then(function(response) {
                $scope.product = response.data;
                $scope.product.id_dong = $scope.product.id_dong + '';
                $scope.product.id_thuonghieu = $scope.product.id_thuonghieu + '';
                $scope.product.id_ncc = $scope.product.id_ncc + '';
            });
        }
        $('#modelId').modal('show');
    }

    $scope.deleteClick = function(id) {
        var hoi = confirm("Ban co muon xoa that khong");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://localhost:2346/api/Product/" + id
            }).then(function(response) {
                $scope.message = response.data;
                location.reload();
            });
        }
    }
    $scope.saveData = function() {
        if ($scope.id == 0) { //dang them moi sp
            $scope.product.anh = document.getElementById("img").innerHTML;
            // $scope.product.anh1 = document.getElementById("img1").innerHTML;
            // $scope.product.anh2 = document.getElementById("img2").innerHTML;
            $http({
                method: "POST",
                url: "http://localhost:2346/api/Product",
                data: $scope.product,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        } else { //sua san pham
            $scope.product.anh = document.getElementById("img").innerHTML;
            // $scope.product.anh1 = document.getElementById("img1").innerHTML;
            // $scope.product.anh2 = document.getElementById("img2").innerHTML;
            $http({
                method: "PUT",
                url: "http://localhost:2346/api/Product/" + $scope.id,
                data: $scope.product,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                $scope.product.id_dong = $scope.id_dong;
                $scope.product.id_thuonghieu = $scope.id_thuonghieu;
                $scope.product.id_ncc = $scope.id_ncc;
                console.log(response.data);
                location.reload();

            });
        }
    };

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
            $scope.kh = response.data.usersname;
            console.log($scope.kh);
            $scope.dangnhap = $scope.kh;
            $scope.test = true;
        });
    }
    //Đăng xuất
    $scope.dangxuat = function() {
        sessionStorage.removeItem("kh");
        location.reload();
    };


    //chi tiết
    const id = localStorage.getItem('chosenId');

    $scope.openDetails = (id) => {
        // console.log(id)
        localStorage.setItem('chosenId', id);

        // window.open('/detail');
    };

    $http({
        method: "get",
        url: "http://localhost:8000/api/products/" + id,
        params: {
            ProductName: localStorage.getItem("ten_sp")
        }
    }).then(function(response) {
        $scope.product = response.data;

        console.log(response.data);

    }, err => console.log(err));

    $scope.addToCart = function() {

        let item = {};
        item.id = $scope.product.id;
        item.name = $scope.product.ten_sp;

        item.unit_price = $scope.product.gia;
        item.quantity = 1;
        item.image = $scope.product.anh;

        // console.log(item);

        var list = JSON.parse(localStorage.getItem('cart')) || [];
        if (list.length === 0) {
            list = [item];
        } else {
            let ok = true;
            for (let x of list) {
                if (x.id == item.id) {
                    x.quantity += item.quantity;
                    ok = false;
                    break;
                }
            }
            if (ok) {
                list.push(item);
            }
        }
        localStorage.setItem('cart', JSON.stringify(list));
        alert("Đã thêm giỏ hàng thành công");
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

    $scope.Tang = function(sp) {
        var index = $scope.cart.indexOf(sp);
        if (index >= 0) {
            $scope.cart[index].quantity += 1;
        }
        reCaculatioTotalPrice()

        localStorage.setItem('cart', JSON.stringify($scope.cart));
    }

    $scope.Giam = function(sp) {
        var index = $scope.cart.indexOf(sp);
        if (index >= 0 && $scope.cart[index].quantity >= 2) {
            $scope.cart[index].quantity -= 1;
        }
        reCaculatioTotalPrice()

        localStorage.setItem('cart', JSON.stringify($scope.cart));
    }

});