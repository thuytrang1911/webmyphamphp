<!DOCTYPE html>
<html lang="en" ng-app="myapp" ng-controller="kh">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="/Admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/Admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary" style="background-image: url('/image/nen.png')">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center" >

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block "><i style="font-size: 250px; color:#79bdcf; padding: 100px" class="fas fa-user"></i></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4" style="color:#1eaef5">ĐĂNG NHẬP</h1>
                                    </div>
                                    <p style="color:red; margin-left:10px;">@{{sai}}</p>
                                    <form class="user">
                                        <div class="form-group">
                                            <h7 style="color: black">Tên tài khoản</h7>
                                            <input type="text" ng-model="tk" ng-click="sua()" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Nhập tài khoản">
                                        </div>
                                        <div class="form-group">
                                            <h7 style="color: black">Mật khẩu</h7>
                                            <input type="password" ng-model="mk" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Nhập mật khẩu">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Nhớ mật khẩu</label>
                                            </div>
                                        </div>
                                        <a href="#" ng-click="dangnhap(tk,mk)" class="btn btn-primary btn-user btn-block">
                                            Đăng nhập
                                        </a>
                                        <!-- <hr>
                                        <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Đăng nhập với Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Đăng nhập với Facebook
                                        </a> -->
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Quên mật khẩu ?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="/dangky">Đăng ký!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="/Admin/vendor/jquery/jquery.min.js"></script>
    <script src="/Admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/Admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/Admin/js/sb-admin-2.min.js"></script>
    <script src="/JS/angular.min.js"></script>
      <script src="/JS/dirPagination.js"></script>
      <script src="/JS/khachhangcontroller.js"> </script> 
   
</body>

</html>
