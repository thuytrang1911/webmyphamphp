app.controller('logincontroller', function($scope, $http) {
    $http({
        method: "GET",
        url: "http://localhost:8000/api/userss/"
    }).then(function(response) {
        $scope.users = response.data;
    });
    $scope.check = function(username, userpassword) {
        var check = false;
        for (var i = 0; i < $scope.users.length; i++) {
            if ($scope.users[i].users_name == username && $scope.users[i].password == userpassword) {
                sessionStorage.setItem('login', $scope.users[i].id);
                window.location.pathname = '/';
                check = true;
                break;
            }
        }
        if (check) {

            window.location.pathname = '/';
            alert('đăng nhập thành công!');
        } else
            alert('Tài khoản hoặc mật khẩu không chính xác');
    }
    $scope.clickAvatar = function() {
        if (sessionStorage.getItem('login') != null) {
            window.location.pathname = "/";
        } else {
            window.location.pathname = "/login";
        }
    }
});