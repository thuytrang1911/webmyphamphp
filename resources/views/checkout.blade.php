<!doctype html>
<html lang="en" ng-app="myapp" ng-controller="dathangcontroller">
@include('includes.head')
<body id="cart" class="lang-en country-us currency-usd layout-full-width page-cart tax-display-disabled cart-empty sub-page">
    <main>
        <!-- header           -->
	    @include('includes.header1')
        <aside id="notifications">
            <div class="container"> </div>
        </aside>
        <div id="wrapper">
            <div class="container">
                <div class="breadcrumb-name">
                </div>
            </div>
            <div class="inner-wrapper container">
                <div class="row">
                    <div id="content-wrapper" class="col-xs-12 col-sm-12 col-md-12">
                        <section id="main">
                            <div class="cart-grid row">

                                <!-- Left Block: cart product informations & shpping -->
                                <div class="cart-grid-body col-xs-12 col-lg-8">

                                    <!-- cart products detailed -->
                                    <div class="card cart-container">
                                        <div class="card-block">
                                            <h1 class="h1">Thông tin khách hàng</h1>
                                        </div>
                                        <hr>
                                        <div class="container-fluid col-xs-6 col-sm-6 ">
                                            <div class="form-group">
                                                <label for="name">Tên khách hàng <span>*</span></label>
                                                <div>
                                                    <input type="text" class="form-control" ng-model="customer.ten_kh">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container-fluid col-xs-6 col-sm-6 ">
                                            <div class="form-group">
                                                <label for="name">SDT</label>
                                                <div>
                                                    <input type="text" class="form-control" ng-model="customer.sdt">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container-fluid col-xs-12 col-sm-12 ">
                                            <div class="form-group">
                                                <label for="name">Địa chỉ</label>
                                                <div>
                                                    <input type="text" class="form-control" ng-model="customer.dia_chi">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cart-overview js-cart" >
                                            <span class="cart-items">Thông tin của bạn</span>
                                        </div>

                                    </div>
                                    
                                    <div>

                                    </div>
                                </div>
                                <div class="cart-grid-body col-xs-12 col-lg-8">

                                    <!-- cart products detailed -->
                                    <div class="card cart-container">
                                        <div class="card-block">
                                            <h1 class="h1">Sản phẩm</h1>
                                        </div>
                                        <hr>
                                        <div class="cart-overview js-cart" >
                                        <table class="table table-border text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Ảnh</th>
                                                    <th>Tên Sản Phẩm</th>
                                                    
                                                    <th>Giá Bán</th>
                                                    <th>Số lượng</th>
                                                    
                                                    <th>Thành tiền</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr ng-repeat="sp in cart track by $index">
                                                    <td class="image-prod"><img class="img" style="width:100px;heigh:100px" src="/images/@{{sp.image}}"></img></td>					        
                                                    <td class="product-name" >
                                                        <h5>@{{sp.name}}</h5>
                                                    </td>
                                                    <td class="price">@{{sp.unit_price | number : 0}}</td>
                                                    
                                                    <td class="quantity">
                                                        <div class="input-group mb-3">
                                                                           
                                                            <input type="text" value="@{{sp.quantity}}"  style="width: 50px; text-align: center; font-size: 15px; font-weight: 400; height: 40px; border:none">
                                                            
                                                        </div>
                                                    </td>
                                                    <td class="total">@{{sp.quantity * sp.unit_price | number : 0}}</td>
                                                    <!-- <td class="product-remove">
                                                        <a href=""><i class="fa fa-times-circle"
                                                                ng-click="Xoa(sp)" aria-hidden="true"></i></a>
                                                    </td> -->
                                                </tr>
                                            </tbody>  
                                        </table>
                                        </div>
                                    </div>
                                    <a class="label" href="index">
                                        <i class="material-icons"></i>Continue shopping
                                    </a>


                                    <!-- shipping informations -->
                                </div>

                                <!-- Right Block: cart subtotal & cart total -->
                                <div class="cart-grid-right col-xs-12 col-lg-4">
                                    <div class="card cart-summary" style="padding:20px 0 0 20px;">
                                        <h3>Hình thức thanh toán</h3>
                                        <br />
                                            <ul class="form-list">
                                                <li>
                                                    <div>

                                                        <input type="radio" name="payment" id="payment1" />
                                                        <label for="login-email">Thanh toán khi nhận hàng</label>

                                                    </div>
                                                </li>
                                                <br />
                                                <li>
                                                    <div >
                                                        <input type="radio" name="payment" id="payment2" />
                                                        <label for="login-password">Thanh toán bằng thẻ ATM</label>


                                                    </div>
                                                </li>
                                                <br />
                                                <li>
                                                    <div >

                                                        <input type="radio" name="payment" id="payment3" />
                                                        <label for="login-password">Thanh toán bằng ví điện tử MOMO</label>

                                                    </div>
                                                    <br />
                                                </li>
                                            </ul>

                                    </div>

                                    <div class="card cart-summary">
                                        <div class="cart-detailed-totals">
                                            <div class="shoping__checkout"  style="padding-left:20px">
                                                <br />
                                                <h3>Tổng tiền</h3>
                                                <ul>
                                                    <!-- <li>
                                                         Subtotal
                                                        <span class="value" style="float:right;padding-right:20px">@{{total |number : 0 }}đ</span></li> -->
                                                    <li>Tổng tiền <span style="float:right;padding-right:20px">@{{total |number : 0 }}đ</span></li>
                                                </ul>
                                            </div>
                                            <hr>
                                        </div>
                                        <div class="checkout text-xs-center card-block">
                                            <button type="button" class="btn btn-primary " ng-click="dathang()">Thanh toán</button>
                                        </div>
                                    </div>




                                </div>

                            </div>
                        </section>



                    </div>



                </div>
            </div>
        </div>
        <div class="blockPosition4">

        </div>
        <!-- Footer -->
       @include('includes.footer1')
    </main>
    <div class="back-top"><a href="#" class="back-top-button"><i class="fa-thin fa-angle-up"></i></a></div>
    <script src="/JS/angular.min.js"></script>
    <script src="/JS/sanphamcontroller.js"></script>
    <script src="/JS/dathang.js"></script>
	<script src="/JS/dirPagination.js" type="text/javascript"></script>

</body>

</html>