<!doctype html>
<html lang="en" ng-app="myapp" ng-controller="sanphamcontroller">
  <head>
    <title>Quan ly san pham</title>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="/assets/admin/css/styles.css" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body class="sb-nav-fixed">
        <!-- header -->
        @include('includes.header')
        <div id="layoutSidenav">
            <!-- sidebar -->
            @include('includes.sidebar')
            <div id="layoutSidenav_content">
                <!-- content -->
                <h1>Quản lý Sản Phẩm</h1>
    <p><button class="btn btn-primary" ng-click="showmodal(0)"><i class="fa fa-plus"> Create</i></button></p>
    
    <div class="col-xs-4" style="float:right; width: 200px">
        <label for="search" style="float:left;">items per page:</label>
        <input type="number" style="float:right;" min="1" max="100" class="form-control" ng-model="itemPerPage">
    </div>
    <div class="card mb-4">
        <table class="table table-border">
            <thead>
                <tr>
                    <th>TT</th>
                    <th>Ảnh</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Tên Dòng</th>
                    <th>Tên Thương Hiệu</th>
                    <th>Tên Nhà Cung Cấp</th>
                    <th>Giá Bán</th>
                    <th>Kiểu Dáng</th>
                    <th>Dung Tích</th>
                    <th>Màu Sắc</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr dir-paginate="sp in products|filter: timkiem|itemsPerPage:itemPerPage">
                    <td>@{{$index+serial}}</td>
                    <td><img src="/images/@{{sp.anh}}" style='width:100px' alt=""></td>
                    <td>@{{sp.ten_sp}}</td>
                    <td>@{{sp.dong.ten_dong}}</td>
                    <td>@{{sp.th.ten_thuong_hieu}}</td>
                    <td>@{{sp.nhacc.ten_ncc}}</td>
                    <td align="right">@{{sp.gia |number:0}}</td>
                    <td >@{{sp.kieu_dang}}</td>
                    <td>@{{sp.dung_luong}}</td>
                    <td>@{{sp.mau_sac}}</td>
                    <td><button class="btn btn-info fa fa-pencil" ng-click="showmodal(sp.id)">edit</button></td>
                    <td><button class="btn btn-danger fa fa-trash" ng-click="deleteClick(sp.id)">delete</button></td>
                </tr>
            </tbody>  

        </table>
    </div>
    <dir-pagination-controls max-size="10" on-page-change="indexCount(newPageNumber)"
                                            direction-links="true"
                                            boundary-links="true" ></dir-pagination-controls>
    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId">
      Launch
    </button> -->

    <!-- Modal -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                    <div class="modal-header">
                            <h5 class="modal-title">@{{modalTitle}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="form-group">
                            <label for="name">Tên sản phẩm</label>
                            <div>
                                <input type="text" class="form-control" ng-model="product.ten_sp">
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid" >
                        <div class="form-group">
                            <div ng-model="product"  > 
                                <label for="name">Dòng sản phẩm </label>
                                <select class="form-control" ng-model='product.id_dong' >
                                    <option value="" selected>@{{product.id_dong}}</option>
                                    <option ng-repeat="th in dongs" value="@{{th.id}}">@{{th.ten_dong}}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid" >
                        <div class="form-group">
                            <div ng-model="product"  > 
                                <label for="name">Thương hiệu</label>
                                <select class="form-control" ng-model='product.id_thuong_hieu' >
                                    <option value="" selected>@{{product.id_thuong_hieu}}</option>
                                    <option ng-repeat="th in thuonghieus" value="@{{th.id}}">@{{th.ten_thuong_hieu}}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid" >
                        <div class="form-group">
                            <div ng-model="product"  > 
                                <label for="name">Nhà cung cấp</label>
                                <select class="form-control" ng-model='product.id_ncc' >
                                    <option value="" selected>@{{product.id_ncc}}</option>
                                    <option ng-repeat="ncc in nhacungcaps" value="@{{ncc.id}}">@{{ncc.ten_ncc}}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                     
                    <div class="container-fluid">
                        <div class="form-group">
                            <label for="name">Giá Bán</label>
                            <div>
                                <input type="text" class="form-control" ng-model="product.gia">
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="form-group">
                            <label for="name">Kiểu Dáng</label>
                            <div>
                                <input type="text" class="form-control" ng-model="product.kieu_dang">
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="form-group">
                            <label for="name">Dung Tích</label>
                            <div>
                                <input type="text" class="form-control" ng-model="product.dung_luong">
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="form-group">
                            <label for="name">Màu Sắc</label>
                            <div>
                                <input type="text" class="form-control" ng-model="product.mau_sac">
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="form-group">
                            <label for="name">Mùi Hương</label>
                            <div>
                                <input type="text" class="form-control" ng-model="product.mui_huong">
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="form-group">
                            <label for="name">Ảnh</label>
                            <div class="custom-file mb-3">
                                <input type="file" class="custom-file-input" id="customFile" name="filename" ng-model="product.anh">
                                <label class="custom-file-label" class="form-control" id='images' for="customFile" >@{{product.anh}}</label>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="form-group">
                            <label for="name">Mô tả</label>
                            <div>
                                <textarea style="height: 300px" type="text" class="form-control" ng-model="product.mo_ta">@{{product.mo_ta}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                    
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" ng-click="saveData()">Save</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#exampleModal').on('show.bs.modal', event => {
            var button = $(event.relatedTarget);
            var modal = $(this);
            // Use above variables to manipulate the DOM

        });
    </script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="/JS/angular.min.js"></script>
    <script src="/JS/sanphamcontroller.js"></script>
    <script src="/JS/dirPagination.js" type="text/javascript"></script>
                <!-- footer -->
                @include('includes.footer')
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="/assets/admin/js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="/assets/admin/js/datatables-simple-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>

</html>
