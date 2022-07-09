<!doctype html>
<html class="no-js" lang="en" ng-app="myapp" ng-controller="hdnhapcontroller">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Melani</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/akkhor/img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="/akkhor/css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="/akkhor/css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/pagination/bootstrap.min.css">

    <link rel="stylesheet" href="/akkhor/css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="/akkhor/css/all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="/akkhor/fonts/flaticon.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="/akkhor/css/animate.min.css">
    <!-- Data Table CSS -->
    <link rel="stylesheet" href="/akkhor/css/jquery.dataTables.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/akkhor/style.css">
    <!-- Modernize js -->
    <script src="/akkhor/js/modernizr-3.6.0.min.js"></script>
</head>
<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
        <!-- Header Menu Area Start Here -->
       @include('includes.1')
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            @include('includes.2')

            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h2>QUẢN LÝ HÓA ĐƠN NHẬP</h2>                  
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Student Table Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
<div class="item-title">
                                <h3 >Danh sách hóa đơn nhập</h3>                               
                            </div>
                            
                        </div>
                        <form class="mg-b-20">
                            <div class="row gutters-8">
                                <div class="col-3-xxxl col-xl-3 col-lg-4 col-12 form-group" style="top:7px;">
                                    <label for="search" style="float:left; margin-right:10px;" >items per page:</label>
                                    <input type="number" style="width: 70px;height:35px " min="1" max="100" class="form-control" ng-model="itemPerPage">

                                </div> 
                                <div class="col-4-xxxl col-xl-3 col-lg-4 col-12 form-group" >
                                    <input type="text" ng-model="timkiem"  placeholder="Nhập tên cần tìm ..."  class="form-control">
                                    
                                </div>
                                <div class="col-1-xxxl col-xl-3 col-lg-4 col-12 form-group" style="left:30%;">
                                <button type="submit" class="fw-btn-fill btn-gradient-yellow"ng-click="showmodal(0)" style="width: 120px; height:40px"><i class="fa fa-plus"> ADD NEW</i></button>
                                </div>
                            </div>
                        </form>
                      
                        <div class="table-responsive">
                            <table class="table table-border text-nowrap">
                            <thead>
                                    <tr>
                                        <th>TT</th>
                                        <th>Tên nhà cung cấp</th>
                                        <th>Tên nhân viên</th>
                                        <th>Ngày nhập</th>
                                        <th>Tổng tiền</th>
                                        <th>Hình thức thanh toán</th>
                                        
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr dir-paginate="hd in hdnhaps|filter: timkiem |itemsPerPage:itemPerPage">
                                        <td>@{{$index+serial}}</td>
                                        <td ng-click="Billsdetail(hd.id)">@{{hd.ncc.ten_ncc}}</td>
                                        <td>@{{hd.nv.tennv}}</td>
                                        <td>@{{hd.ngay_nhap}}</td>
                                        <td>@{{hd.tong_tien}}</td>
                                        <td>@{{hd.ht_thanh_toan}}</td>
                                        <td><button class="btn btn-info fa fa-pen" ng-click="showmodal(hd.id)">&nbsp;</button></td>
                                        <td><button class="btn btn-danger fa fa-trash" ng-click="deleteClick(hd.id)">&nbsp;</button></td>
                                    </tr>
                                </tbody>  
                            </table>
                            <div class="pagination justify-content-center">
                        
                                <dir-pagination-controls max-size="3" direction-links="true" boundary-links="true" on-page-change='indexCount(newPageNumber)'>
                                    
                                </dir-pagination-controls> 

                            </div>

                        </div>
                    </div>
                </div>
                <!-- Student Table Area End Here -->
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
                            <div class="container-fluid" >
                                    <div class="form-group">
                                        <div ng-model="hdnhap"  > 
                                            <label for="name">Nhà cung cấp</label>
                                            <select class="form-control" ng-model='hdnhap.id_ncc' >
                                                <option value="" selected>@{{hdnhap.id_ncc}}</option>
                                                <option ng-repeat="ncc in nhacungcaps" value="@{{ncc.id}}">@{{ncc.ten_ncc}}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="container-fluid" >
                                    <div class="form-group">
                                        <div ng-model="hdnhap"  > 
                                            <label for="name">Nhân viên</label>
                                            <select class="form-control" ng-model='hdnhap.id_nv' >
                                                <option value="" selected>@{{hdnhap.id_nv}}</option>
                                                <option ng-repeat="nv in nhanviens" value="@{{nv.id}}">@{{nv.tennv}}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <div class="form-group">
                                        <label for="name">Ngày nhập:</label>
                                        <div>
                                            <input type="text" class="form-control" ng-model="hdnhap.ngay_nhap">
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <div class="form-group">
                                        <label for="name">Tổng tiền:</label>
                                        <div>
                                            <input type="text" class="form-control" ng-model="hdnhap.tong_tien">
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <div class="form-group">
                                        <label for="name">Hình thức thanh toán:</label>
                                        <div>
                                            <input type="text" class="form-control" ng-model="hdnhap.ht_thanh_toan">
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
                <!-- xem chi tiết -->
                <div class="modal fade" id="modelId1" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content" style="width:200%; margin-left: -150px">
                                <div class="modal-header">
                                        <h5 class="modal-title">@{{modalTitle1}}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <than aria-hidden="true">&times;</than>
                                            </button>
                                    </div>
                            <div class="modal-body">
                                <table class="table table-border text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Ảnh</th>
                                                    <th>Tên Sản Phẩm</th>
                                                    <th>Số lượng</th>
                                                    <th>Đơn giá</th>
                                                    <th>Thành Tiền</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr ng-repeat="sp in CTHDNhap">
                                                    <td class="image-prod" style="width:100px;heigh:120px"><img class="img"  src="/images/@{{sp.anh}}"></img></td>					        
                                                    <td class="product-name">
                                                        <h5>@{{sp.ten_sp}}</h5>
                                                    </td>
                                                    
                                                    <td class="total">@{{sp.so_luong | number : 0}}</td>
                                                    <td class="price">@{{sp.don_gia | number : 0}}đ</td>
                                                    <td class="price" style="color: red">@{{sp.thanh_tien | number : 0}}đ</td>
                                                </tr>
                                            </tbody>  
                                        </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <!-- <button type="button" class="btn btn-primary" ng-click="saveData()">Save</button> -->
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
               <!-- Footer -->
               

            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
    <!-- jquery-->
    <script src="/akkhor/js/jquery-3.3.1.min.js"></script>
    <!-- Plugins js -->
    <script src="/akkhor/js/plugins.js"></script>
    <!-- Popper js -->
    <script src="/akkhor/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="/akkhor/js/bootstrap.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="/akkhor/js/jquery.scrollUp.min.js"></script>
    <!-- Data Table Js -->
    <script src="/akkhor/js/jquery.dataTables.min.js"></script>
    <!-- Custom Js -->
    <script src="/akkhor/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
    <script src="/JS/angular.min.js"></script>
    <script src="/JS/dirPagination.js"></script>
    <script src="/JS/hdnhapcontroller.js"> </script> 
    
</body>
</html>