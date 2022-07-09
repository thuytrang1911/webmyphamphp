<!doctype html>
<html lang="en" ng-app="myapp" ng-controller="cartcontroller">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
@include('includes.head')
<body id="cart" class="lang-en country-us currency-eur layout-full-width page-cart tax-display-disabled cart-empty sub-page">
    <main>
        <!-- header           -->
	    @include('includes.header1')
        <aside id="notifications">
            <div class="container">
            </div>
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
                                <div class="cart-grid-body col-xs-12 col-lg-12">
                                    <div class="card cart-container">
                                        <div class="card-block">
                                            <h1 class="h1">Giỏ Hàng</h1>
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
                                                    <th>&nbsp;</th>
                                                    <th>&nbsp;</th>
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
                                                            <div ng-click="Giam(sp)" class="btn btn-sm" style="border: 1px solid rgba(0, 0, 0, 0.1); border-radius:0; height:40px; width:40px; text-align: center; padding: 9px;">-</div>               
                                                            <input type="text" value="@{{sp.quantity}}"  style="width: 70px; text-align: center; font-size: 15px; font-weight: 400; height: 40px;">
                                                            <div ng-click="Tang(sp)" class="btn btn-sm" style="border: 1px solid rgba(0, 0, 0, 0.1); border-radius:0; height:40px; width:40px; text-align: center; padding: 9px;">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="total">@{{sp.quantity * sp.unit_price | number : 0}}</td>
                                                    <td class="product-remove">
                                                        <a href=""><i class="fa fa-times-circle"
                                                                ng-click="Xoa(sp)" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>  
                                            </table>
                                        </div>
                                    </div>
                                    <a class="label" href="index">
                                        <i class="fa-solid fa-angle-left"></i> Continue shopping
                                    </a>
                                    <div>
                                    </div>
                                </div>
                                <div class="cart-grid-right col-xs-12 col-lg-4"  style="float:right">
                                    <div class="card cart-summary">
                                        <div class="cart-detailed-totals">
                                            <div class="shoping__checkout"  style="padding-left:20px">
                                                <br />
                                                <h3>Tổng giỏ hàng</h3>
                                                <ul>
                                                    <li>
                                                         Tạm tính
                                                        <span class="value" style="float:right;padding-right:20px">@{{total |number : 0 }}đ</span></li>
                                                    <li>Tổng tiền <span style="float:right;padding-right:20px; color:red;">@{{total |number : 0 }}đ</span></li>
                                                </ul>
                                            </div>
                                            <hr>
                                        </div>
                                        <div class="checkout text-xs-center card-block">
                                            <a href="checkout">
                                                <button  type="button" class="btn btn-primary " >Checkout</button></a>
                                            
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
    <script src="/JS/cart.js"></script>
	<script src="/JS/dirPagination.js" type="text/javascript"></script>
</body>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</html>