<!doctype html>
<html lang="en" ng-app="myapp" ng-controller="nhanviencontroller">
  <head>
    <title>Quản lý nhân viên</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="/assets/admin/css/styles.css" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
  <body  class="sb-nav-fixed">
     @include('includes.header');
    <div id="layoutSidenav">
        @include('includes.sidebar');
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">

                        <h1 class="mt-4">Quản Lý Nhân Viên</h1>
                        <p><button class="btn btn-primary" style=" margin-left:85%" ng-click="showmodal(0)"><i class="fa fa-plus"> Add new brand</i></button></p>
                        
                        
                        <div class="card mb-4" >
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Danh sách nhân viên
                            </div>
                            <table class="table table-border">
                                <thead>
                                    <tr>
                                        <th>TT</th>
                                        <th>Tên nhân viên</th>
                                        <th>Giới tính</th>
                                        <th>Ngày sinh</th>
                                        <th>Địa chỉ</th>
                                        <th>Sđt</th>
                                        <th>Email</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr dir-paginate="th in nhanviens|filter: timkiem |itemsPerPage:itemPerPage">
                                        <td>@{{$index+serial}}</td>
                                        <td>@{{th.tennv}}</td>
                                        <td>@{{th.gioi_tinh}}</td>
                                        <td>@{{th.ngay_sinh}}</td>
                                        <td>@{{th.dia_chi}}</td>
                                        <td>@{{th.sdt}}</td>
                                        <td>@{{th.email}}</td>
                                        
                                        <td><button class="btn btn-info fa fa-pencil" ng-click="showmodal(th.id)">&nbsp;</button></td>
                                        <td><button class="btn btn-danger fa fa-trash" ng-click="deleteClick(th.id)">&nbsp;</button></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="pagination justify-content-center">
                            
                                <dir-pagination-controls   max-size="3" direction-links="true" boundary-links="true" on-page-change='indexCount(newPageNumber)'>
</dir-pagination-controls> 
                            </div>
                        </div>
                    </div>
                </main>

                <!-- Modal -->
                <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                                <div class="modal-header">
                                        <h5 class="modal-title">@{{modalTitle}}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <than aria-hidden="true">&times;</than>
                                            </button>
                                    </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="form-group">
                                        <label for="name">Tên nhân viên:</label>
                                        <div>
                                            <input type="text" class="form-control" ng-model="nhanvien.tennv">
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <div class="form-group">
                                        <label for="name">Giới tính:</label>
                                        <div>
                                            <input type="text" class="form-control" ng-model="nhanvien.gioi_tinh">
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <div class="form-group">
                                        <label for="name">Ngày sinh:</label>
                                        <div>
                                            <input type="text" class="form-control" ng-model="nhanvien.ngay_sinh">
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <div class="form-group">
                                        <label for="name">Địa chỉ:</label>
                                        <div>
                                            <input type="text" class="form-control" ng-model="nhanvien.dia_chi">
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <div class="form-group">
                                        <label for="name">Sđt:</label>
                                        <div>
                                            <input type="text" class="form-control" ng-model="nhanvien.sdt">
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <div class="form-group">
                                        <label for="name">Email:</label>
                                        <div>
                                            <input type="text" class="form-control" ng-model="nhanvien.email">
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
                <script src="/JS/dirPagination.js"></script>

                <script src="/JS/nhanviencontroller.js"> </script>
                             <!-- footer -->
             @include('includes.footer');
 
            </div>
    </div>
   
</body>
</html>