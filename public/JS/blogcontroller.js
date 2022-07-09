var app = angular.module('myapp', ['angularUtils.directives.dirPagination']); //tao 1 module
app.controller('blogcontroller', function($scope, $http) { //tao 1 controller
    $scope.timkiem = "";
    $scope.serial = 1
    $scope.itemPerPage = 5;
    $scope.indexCount = function(newPageNumber) {
        $scope.serial = newPageNumber * $scope.itemPerPage - ($scope.itemPerPage - 1);
    }
    $http({
        method: "GET",
        url: "http://localhost:8000/api/blogs"
    }).then(function(response) {
        console.log(response.data);
        $scope.blogs = response.data;
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
            $scope.modalTitle = "Add new blog";
            if ($scope.blog) {
                $scope.blog.tieu_de = "";
                $scope.blog.noi_dung = "";
                $scope.blog.anh = "";
                $scope.blog.id_nv = "";

            }

        } else {
            $scope.modalTitle = "Edit blog";
            $http({
                method: "GET",
                url: "http://localhost:8000/api/blogs/" + id
            }).then(function(response) {
                $scope.blog = response.data;
                $scope.blog.id_nv = $scope.blog.id_nv + '';
            });
        }
        $('#modelId').modal('show');
    }
    $scope.deleteClick = function(id) {
        var hoi = confirm("Ban co muon xoa that khong");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://localhost:8000/api/blogs/" + id
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
                url: "http://localhost:8000/api/blogs",
                data: $scope.blog,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        } else {
            $http({
                method: "PUT",
                url: "http://localhost:8000/api/blogs/" + $scope.id,
                data: $scope.blog,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        }
    };
    const id = localStorage.getItem('chosenId');

    $scope.openDetails = (id) => {
        // console.log(id)
        localStorage.setItem('chosenId', id);
        // window.open('/detail');
    }

    $http({
        method: "get",
        url: "http://localhost:8000/api/blogs/" + id,
        params: {
            ProductName: localStorage.getItem("tieu_de")
        }
    }).then(function(response) {
        $scope.blog1 = response.data;
        console.log(response.data);
    }, err => console.log(err));
});