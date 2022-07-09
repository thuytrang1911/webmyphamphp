<!doctype html>
<html lang="en" ng-app="myapp" ng-controller="sanphamcontroller">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

@include('includes.head')
<body id="category" class="lang-en country-us currency-usd layout-left-column page-category tax-display-disabled category-id-12 category-shop category-id-parent-2 category-depth-level-2 sub-page">
    <main>
    @include('includes.header1')
        <aside id="notifications">
            <div class="container"></div>
        </aside>
        <div id="wrapper">
            <div class="container">
                <div class="breadcrumb-name">
                    <div class="name_category">
                        <h2>Shop</h2>
                    </div>
                    <!--  -->
                    <div class="breadcrumb_container">
                        <nav data-depth="2" class="breadcrumb">
                            <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                    <a itemprop="item" href="index">
                                        <span itemprop="name">Home</span>
                                    </a>
                                    <meta itemprop="position" content="1">
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                    <a itemprop="item" href="shop">
                                        <span itemprop="name">Shop</span>
                                    </a>
                                    <meta itemprop="position" content="2">
                                </li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
            <div class="inner-wrapper container">
                <div class="row">

                    <div id="left-column" class="col-xs-12 col-sm-4 col-md-3">



                        <div class="block-categories">
                            <ul class="category-top-menu">
                                <li><a class="text-uppercase h6" href="12-shop.html">Shop</a></li>
                                <li>
                                    <ul class="category-sub-menu">
                                    <li data-depth="0"><a href="productbybrand">Thương hiệu</a>
                                            <div class="navbar-toggler collapse-icons" data-toggle="collapse" data-target="#exCollapsingNavbar13"><i class="fa-solid fa-angle-down"></i></div>
                                            <div class="collapse" id="exCollapsingNavbar13" >
                                                <ul class="category-sub-menu" ng-repeat="th in thuonghieus">
                                                    <li data-depth="1">
                                                        <a class="category-sub-link" href="productbybrand" ng-click="saveTH(th.id)">  
                                                            @{{th.ten_thuong_hieu}} </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li data-depth="0"><a href="product_line">Danh mục</a>
                                            <div class="navbar-toggler collapse-icons" data-toggle="collapse" data-target="#exCollapsingNavbar14"><i class="fa-solid fa-angle-down"></i></div>
                                            <div class="collapse" id="exCollapsingNavbar14">
                                                <ul class="category-sub-menu" ng-repeat="d in dongs">
                                                    <li data-depth="1">
                                                        <a class="category-sub-link" href="product_line" ng-click="saveDong(d.id)" >
                                                            @{{d.ten_dong}} </a>
                                                        </li> 
                                                </ul>
                                            </div>
                                        </li>
                                        <li data-depth="0"><a href="15-skincare.html">skincare</a>
                                            <div class="navbar-toggler collapse-icons" data-toggle="collapse" data-target="#exCollapsingNavbar15"><i class="fa-solid fa-angle-down"></i></div>
                                            <div class="collapse" id="exCollapsingNavbar15">
                                                <ul class="category-sub-menu">
                                                    <li data-depth="1"><a class="category-sub-link" href="26-cords-and-cables.html">Cords and Cables</a></li>
                                                    <li data-depth="1"><a class="category-sub-link" href="27-gps-accessories.html">gps accessories</a></li>
                                                    <li data-depth="1"><a class="category-sub-link" href="28-monitors.html">Monitors</a></li>
                                                    <li data-depth="1"><a class="category-sub-link" href="29-samsung.html">Samsung</a></li>
                                                    <li data-depth="1"><a class="category-sub-link" href="30-transcend.html">Transcend</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div id="search_filters_wrapper" class="hidden-sm-down">
                            <div id="search_filter_controls" class="hidden-md-up">
                                <span id="_mobile_search_filters_clear_all"></span>
                                <button class="btn btn-secondary ok">
        <i class="material-icons">&#xE876;</i>
        OK
      </button>
        </div>
                            <div id="search_filters">
                                <section class="facet">
                                    <h1 class="h6 facet-title hidden-sm-down">Thương Hiệu</h1>
                                    <div class="title hidden-md-up" data-target="#facet_91544" data-toggle="collapse">
                                        <h1 class="h6 facet-title">Categories</h1>
                                        <span class="pull-xs-right">
                                            <span class="navbar-toggler collapse-icons">
                                                <i class="material-icons add">&#xE313;</i>
                                                <i class="material-icons remove">&#xE316;</i>
                                            </span>
                                        </span>
                                    </div>
                                    <ul id="facet_91544" class="collapse" ng-repeat="th in thuonghieus">
                                        <li>
                                            <label class="facet-label">
                                            <a href="productbybrand" ng-click="saveTH(th.id)" rel="nofollow">
                                                @{{th.ten_thuong_hieu}} </a>
                                            </label>
                                        </li>
                                    </ul>
                                </section>
                                <br />
                                <section class="facet">
                                    <h1 class="h6 facet-title hidden-sm-down">Sản phẩm theo dòng</h1>
                                    <div class="title hidden-md-up" data-target="#facet_91544" data-toggle="collapse">
                                        <h1 class="h6 facet-title">Categories</h1>
                                        <span class="pull-xs-right">
                                            <span class="navbar-toggler collapse-icons">
                                                <i class="material-icons add">&#xE313;</i>
                                                <i class="material-icons remove">&#xE316;</i>
                                            </span>
                                        </span>
                                    </div>
                                    <ul id="facet_91544" class="collapse" ng-repeat="d in dongs">
                                        <li>
                                            <label class="facet-label">
                                            <a href="product_line" ng-click="saveDong(d.id)" rel="nofollow">
                                                @{{d.ten_dong}}</a>
                                            </label>
                                        </li>
                                    </ul>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div id="content-wrapper" class="left-column col-xs-12 col-sm-8 col-md-9">
                        <section id="main">
                            <div class="block-category card card-block hidden-sm-down">
                            </div>
                            <div class="text-xs-center hidden-md-up">
                                <h1 class="h1">Shop</h1>
                            </div>
<!-- Product-list -->
                            <section id="products-list">
                                <div id="">
                                    <div id="js-product-list-top" class="products-selection">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <ul class="display hidden-xs">
                                                    <li id="grid"> <i class="fa-solid fa-grid"></i></li>
                                                    <li id="list"> <i class="fa-solid fa-list-ul"></i></li>
                                                </ul> 
                                            </div>
                                            <div class="col-4-xxxl col-xl-6 col-lg-6 col-12 form-group">
                                                <input type="text" ng-model="timkiem"  placeholder="search ..."  class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="" class="hidden-sm-down">
                                    <section id="js-active-search-filters" class="hide">
                                        <h1 class="h6 hidden-xs-up">Active filters</h1>
                                    </section>
                                </div>
                                <div id="">
                                    <div id="js-product-list">
                                        <div class="products row product_content grid">
                                            <div class="item-product col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3" ng-repeat="sp in productTH" style=" float:left">
                                                <article class="js-product-miniature item_in" data-id-product="1" data-id-product-attribute="1" itemscope itemtype="http://schema.org/Product">
                                                    <div class="img_block">
                                                        <a href="chitiet" class="thumbnail product-thumbnail">
                                                            <img src="/images/@{{sp.anh}}"  style="width: 100%;height:310px;">
                                                        </a>
                                                        <div class="block-inner">
                                                            <a href="#" class="quick-view" data-link-action="quickview"><i class="fa-thin fa-eye"></i>Quick view</a>
                                                            <a href="chitiet" ng-click="openDetails(sp.id)" title="Endeavor Daytrip" class="detail"><i class="fa-thin fa-file"></i></a>
                                                        </div>

                                                        <div class="product-price-and-shipping">
                                                        </div>
                                                    </div>
                                                    <div class="product_desc">
                                                        
                                                    <div class="manufacturer"></div>

                                                        <h4><a href="chitiet" ng-click="openDetails(sp.id)" style="height:50px" title="Endeavor Daytrip" itemprop="name" class="product_name">@{{sp.ten_sp}}</a></h4>
                                                        <div class="product-price-and-shipping">
                                                            <span itemprop="price" class="price ">@{{sp.gia|number:0}}đ</span>
                                                        </div>


                                                        <div class="product-desc" itemprop="description">
                                                            <p>@{{sp.mo_ta}}</p>
                                                        </div>

                                                        <div class="cart">
                                                            <div class="product-add-to-cart">		
                                                                <button class="button ajax_add_to_cart_button add-to-cart btn-default"  type="submit" >
                                                                        <a href="chitiet" ng-click="openDetails(sp.id)" >
                                                                        <i class="fa-light fa-plus"></i>Xem chi tiết</a>			
                                                                </button>	
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                        <dir-pagination-controls max-size="10" on-page-change="indexCount(newPageNumber)"
                                            direction-links="true"
                                            boundary-links="true" ></dir-pagination-controls>
                                        <div class="hidden-xl-down text-xs-right up">
                                            <a href="#header" class="btn btn-secondary">
      Back to top
      <i class="material-icons">&#xE316;</i>
    </a>
                                        </div>
                                    </div>
                                </div>
                                <div id="js-product-list-bottom">
                                    <div id="js-product-list-bottom"></div>
                                </div>
                            </section>
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
	<script src="/JS/dirPagination.js" type="text/javascript"></script>
</body>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</html>