<!doctype html>
<html lang="en" ng-app="myapp" ng-controller="sanphamcontroller">


<!-- Mirrored from demo.posthemes.com/pos_melani/en/home/1-1-endeavor-daytrip.html by HTTrack Website Copier/3.x [XR&CO'2010], Sat, 02 Apr 2022 03:44:33 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<!-- /Added by HTTrack -->

@include('includes.head')

<body id="product" class="lang-en country-us currency-eur layout-full-width page-product tax-display-disabled product-id-1 product-endeavor-daytrip product-id-category-2 product-id-manufacturer-1 product-id-supplier-1 product-available-for-order sub-page">


    <main>
  

        <!-- header           -->
	    @include('includes.header1')
        <aside id="notifications">
            <div class="container">



            </div>
        </aside>

        <div id="wrapper">
            <div class="container">
                <div class="breadcrumb-name"  >

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
                                    <a itemprop="item" href="">
                                        <span itemprop="name">@{{product.ten_sp}}</span>
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



                    <div id="content-wrapper" class="col-xs-12 col-sm-12 col-md-12">


                        <section id="main" itemscope itemtype="https://schema.org/Product">
                            <meta itemprop="url" content="http://demo.posthemes.com/pos_melani/en/home/1-1-endeavor-daytrip.html#/1-size-s/13-color-orange">

                            <div class="row">
                                <div class="col-md-5">

                                    <section class="page-content" id="content">


                                        <!-- <ul class="product-flags">
                                            <li class="new"><span>New</span></li>
                                        </ul> -->



                                        <div class="images-container">

                                            <div class="product-cover">
                                                <img class="js-qv-product-cover" src = "/images/@{{product.anh}}" alt="" title="" style="width:100%;" itemprop="image">
                                                <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
                                                    <i class="material-icons zoom-in">&#xE8FF;</i>
                                                </div>
                                            </div>



                                            <div class="js-qv-mask mask pos_content">
                                                <div class="product-images js-qv-product-images ">
                                                    <div class="thumb-container">
                                                        <img class="thumb js-thumb  selected " data-image-medium-src="/images/@{{product.anh}}" data-image-large-src="/images/@{{product.anh}}" src="/images/@{{product.anh}}" alt="" title="" width="100"
                                                            itemprop="image">
                                                    </div>
                                                    <div class="thumb-container">
                                                        <img class="thumb js-thumb " data-image-medium-src="/images/@{{product.anh1}}" data-image-large-src="/images/@{{product.anh1}}" src="/images/@{{product.anh1}}" alt="" title="" width="100" itemprop="image">
                                                    </div>
                                                    <div class="thumb-container">
                                                        <img class="thumb js-thumb " data-image-medium-src="/images/@{{product.anh2}}" data-image-large-src="/images/@{{product.anh2}}" src="/images/@{{product.anh2}}" alt="" title="" width="100" itemprop="image">
                                                    </div>
                                                    <div class="thumb-container">
                                                        <img class="thumb js-thumb " data-image-medium-src="/images/@{{product.anh}}" data-image-large-src="/images/@{{product.anh}}" src="/images/@{{product.anh}}" alt="" title="" width="100" itemprop="image">
                                                    </div>
                                                    <div class="thumb-container">
                                                        <img class="thumb js-thumb " data-image-medium-src="/images/@{{product.anh}}" data-image-large-src="/images/@{{product.anh}}" src="/images/@{{product.anh}}" alt="" title="" width="100" itemprop="image">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <script type="text/javascript">
                                            $(document).ready(function() {
                                                var owl = $("#product .images-container .product-images");
                                                owl.owlCarousel({
                                                    items: 3,
                                                    addClassActive: true,
                                                    navigation: true,
                                                    slideSpeed: 1000,
                                                    pagination: false,
                                                    itemsDesktop: [1199, 3],
                                                    itemsDesktopSmall: [911, 2],
                                                    itemsTablet: [767, 3],
                                                    itemsMobile: [320, 2]
                                                });
                                                var owl = $(".quickview .images-container .product-images");
                                                owl.owlCarousel({
                                                    items: 3,
                                                    addClassActive: true,
                                                    navigation: true,
                                                    slideSpeed: 1000,
                                                    pagination: false,
                                                    itemsDesktop: [1199, 3],
                                                    itemsDesktopSmall: [911, 2],
                                                    itemsTablet: [767, 3],
                                                    itemsMobile: [320, 2]
                                                });
                                            });
                                        </script>

                                        <div class="scroll-box-arrows">
                                            <i class="material-icons left">&#xE314;</i>
                                            <i class="material-icons right">&#xE315;</i>
                                        </div>


                                    </section>

                                </div>
                                <div class="col-md-7">


                                    <h1 class="h1 namne_details" itemprop="name">@{{product.ten_sp}}</h1>



                                    
                                    <!--  /Module ProductComments -->


                                    <div class="product-prices">




                                        <div class="product-price h5 " itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                                            <link itemprop="availability" href="https://schema.org/InStock" />
                                            <meta itemprop="priceCurrency" content="EUR">

                                            <div class="current-price">
                                                <span itemprop="price" class="price " content="100">@{{product.gia|number:0}}đ</span>
                                            </div>



                                        </div>


                                        <div class="tax-shipping-delivery-label">


                                        </div>
                                    </div>


                                    <div class="product-information">

                                        <div id="product-description-short-1" class="product-desc" itemprop="description">
                                            <!-- <h2>@{{product.mo_ta}}</h2> -->
                                        </div>



                                        <div class="product-actions">

                                            <form action="cart" method="post" id="add-to-cart-or-refresh">
                                                <input type="hidden" name="token" value="3f9d20541e7d447f815bbcdf8514a6d6">
                                                <input type="hidden" name="id_product" value="1" id="product_page_product_id">
                                                <input type="hidden" name="id_customization" value="0" id="product_customization_id">


                                                <!-- <div class="product-variants">
                                                    <div class="clearfix product-variants-item">
                                                        <span class="control-label">Size</span>
                                                        <select id="group_1" data-product-attribute="1" name="group[1]">
                      <option value="1" title="S" selected="selected">20ml</option>
                      <option value="2" title="M">50ml</option>
                      <option value="3" title="L">80ml</option>
                  </select>
                                                    </div>
                                                    
                                                </div> -->






                                                <section class="product-discounts">
                                                </section>



                                                <div class="product-add-to-cart">
                                                    <span class="control-label">Số lượng:</span>
                                                    
                                                    <div class="product-quantity">
                                                        
                                                        <div class="qty">
                                                            <!-- <div class="input-group bootstrap-touchspin">
                                                                <span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
                                                                <input type="text" name="qty" id="quantity_wanted" value="1" class="input-group form-control" min="1" style="display: block;">
                                                                <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>
                                                                <span class="input-group-btn-vertical">
                                                                    <button class="btn btn-touchspin js-touchspin bootstrap-touchspin-up" type="button">
                                                                    <i class="fa-solid fa-angle-up"></i>
                                                                    </button>
                                                                    <button class="btn btn-touchspin js-touchspin bootstrap-touchspin-down" type="button">
                                                                        <i class="material-icons touchspin-down"></i>
                                                                    </button>
                                                                </span>
                                                            </div> -->
                                                            <input type="text" name="qty" id="quantity_wanted" value="1" class="input-group" min="1" />
                                                        </div>
                                                        
                                                        <div class="add">
                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" ng-click="addToCart()" type="submit">
                                                            <i class="fa-solid fa-cart-plus"></i>
                                                            Add to cart
          </button>

                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>



                                                    <p class="product-minimal-quantity">
                                                    </p>

                                                </div>


                                                <div class="social-sharing">
                                                    <span>Share</span>
                                                    <ul>
                                                        <li><a href="http://www.facebook.com/sharer.php?u=http://demo.posthemes.com/pos_melani/en/home/1-endeavor-daytrip.html" title="Share" target="_blank"><i class="fa-facebook"></i></a></li>
                                                        <li><a href="https://twitter.com/intent/tweet?text=Endeavor Daytrip http://demo.posthemes.com/pos_melani/en/home/1-endeavor-daytrip.html" title="Tweet" target="_blank"><i class="fa-twitter"></i></a></li>
                                                        <li><a href="https://plus.google.com/share?url=http://demo.posthemes.com/pos_melani/en/home/1-endeavor-daytrip.html" title="Google+" target="_blank"><i class="fa-googleplus"></i></a></li>
                                                        <li><a href="http://www.pinterest.com/pin/create/button/?media=http://demo.posthemes.com/pos_melani/291/endeavor-daytrip.jpg&amp;url=http://demo.posthemes.com/pos_melani/en/home/1-endeavor-daytrip.html"
                                                                title="Pinterest" target="_blank"><i class="fa-pinterest"></i></a></li>
                                                    </ul>
                                                </div>




                                                <input class="product-refresh ps-hidden-by-js" name="refresh" type="submit" value="Refresh">

                                            </form>


                                        </div>

                                        <div id="block-reassurance">
                                            <ul>
                                                <li>
                                                    <div class="block-reassurance-item">
                                                        <img src="images/banner/img/ic_verified_user_black_36dp_1x.png" alt="Security policy (edit with Customer reassurance module)">
                                                        <span class="h6">Chính sách bảo mật</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block-reassurance-item">
                                                        <img src="images/banner/img/ic_local_shipping_black_36dp_1x.png" alt="Delivery policy (edit with Customer reassurance module)">
                                                        <span class="h6">Chính sách giao hàng</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block-reassurance-item">
                                                        <img src="images/banner/img/ic_swap_horiz_black_36dp_1x.png" alt="Return policy (edit with Customer reassurance module)">
                                                        <span class="h6">Chính sách hoàn trả </span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="tabs">
                                        <ul class="nav nav-tabs">

                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#description">Mô tả</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#product-details">Mô tả chi tiết</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#idTab5">Đánh giá</a>
                                            </li>


                                        </ul>

                                        <div class="tab-content" id="tab-content">
                                            <div class="tab-pane fade in active" id="description">

                                                <div class="product-description">
                                                    <p>@{{product.mo_ta}}</p>
                                                </div>

                                            </div>


                                            <div class="tab-pane fade" id="product-details" data-product="{&quot;id_shop_default&quot;:&quot;1&quot;,&quot;id_manufacturer&quot;:&quot;1&quot;,&quot;id_supplier&quot;:&quot;1&quot;,&quot;reference&quot;:&quot;demo_1&quot;,&quot;is_virtual&quot;:&quot;0&quot;,&quot;id_category_default&quot;:&quot;2&quot;,&quot;on_sale&quot;:&quot;0&quot;,&quot;online_only&quot;:&quot;0&quot;,&quot;ecotax&quot;:0,&quot;minimal_quantity&quot;:&quot;1&quot;,&quot;price&quot;:100,&quot;unity&quot;:null,&quot;unit_price_ratio&quot;:&quot;0.000000&quot;,&quot;additional_shipping_cost&quot;:&quot;0.00&quot;,&quot;customizable&quot;:&quot;0&quot;,&quot;text_fields&quot;:&quot;0&quot;,&quot;uploadable_files&quot;:&quot;0&quot;,&quot;redirect_type&quot;:&quot;404&quot;,&quot;id_type_redirected&quot;:&quot;0&quot;,&quot;available_for_order&quot;:&quot;1&quot;,&quot;available_date&quot;:null,&quot;show_condition&quot;:&quot;0&quot;,&quot;condition&quot;:&quot;new&quot;,&quot;show_price&quot;:&quot;1&quot;,&quot;indexed&quot;:&quot;1&quot;,&quot;visibility&quot;:&quot;both&quot;,&quot;cache_default_attribute&quot;:&quot;1&quot;,&quot;advanced_stock_management&quot;:&quot;0&quot;,&quot;date_add&quot;:&quot;2017-10-27 09:50:02&quot;,&quot;date_upd&quot;:&quot;2017-11-24 21:32:51&quot;,&quot;pack_stock_type&quot;:&quot;3&quot;,&quot;meta_description&quot;:null,&quot;meta_keywords&quot;:null,&quot;meta_title&quot;:null,&quot;link_rewrite&quot;:&quot;endeavor-daytrip&quot;,&quot;name&quot;:&quot;Endeavor Daytrip&quot;,&quot;description&quot;:&quot;&lt;p&gt;Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which every item is a vital part of a woman&#039;s wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!&lt;\/p&gt;&quot;,&quot;description_short&quot;:&quot;&lt;p&gt;Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you&#039;re ready for summer!&lt;\/p&gt;&quot;,&quot;available_now&quot;:&quot;In stock&quot;,&quot;available_later&quot;:null,&quot;id&quot;:1,&quot;id_product&quot;:1,&quot;out_of_stock&quot;:2,&quot;new&quot;:1,&quot;id_product_attribute&quot;:1,&quot;quantity_wanted&quot;:1,&quot;extraContent&quot;:[],&quot;allow_oosp&quot;:0,&quot;category&quot;:&quot;home&quot;,&quot;category_name&quot;:&quot;Home&quot;,&quot;link&quot;:&quot;http:\/\/demo.posthemes.com\/pos_melani\/en\/home\/1-endeavor-daytrip.html&quot;,&quot;attribute_price&quot;:0,&quot;price_tax_exc&quot;:100,&quot;price_without_reduction&quot;:100,&quot;reduction&quot;:0,&quot;specific_prices&quot;:[],&quot;quantity&quot;:293,&quot;quantity_all_versions&quot;:1790,&quot;id_image&quot;:&quot;en-default&quot;,&quot;features&quot;:[{&quot;name&quot;:&quot;Compositions&quot;,&quot;value&quot;:&quot;Cotton&quot;,&quot;id_feature&quot;:&quot;5&quot;},{&quot;name&quot;:&quot;Styles&quot;,&quot;value&quot;:&quot;Casual&quot;,&quot;id_feature&quot;:&quot;6&quot;},{&quot;name&quot;:&quot;Properties&quot;,&quot;value&quot;:&quot;Short Sleeve&quot;,&quot;id_feature&quot;:&quot;7&quot;}],&quot;attachments&quot;:[],&quot;virtual&quot;:0,&quot;pack&quot;:0,&quot;packItems&quot;:[],&quot;nopackprice&quot;:0,&quot;customization_required&quot;:false,&quot;attributes&quot;:{&quot;1&quot;:{&quot;id_attribute&quot;:&quot;1&quot;,&quot;id_attribute_group&quot;:&quot;1&quot;,&quot;name&quot;:&quot;S&quot;,&quot;group&quot;:&quot;Size&quot;,&quot;reference&quot;:null,&quot;ean13&quot;:null,&quot;isbn&quot;:null,&quot;upc&quot;:null},&quot;3&quot;:{&quot;id_attribute&quot;:&quot;13&quot;,&quot;id_attribute_group&quot;:&quot;3&quot;,&quot;name&quot;:&quot;Orange&quot;,&quot;group&quot;:&quot;Color&quot;,&quot;reference&quot;:null,&quot;ean13&quot;:null,&quot;isbn&quot;:null,&quot;upc&quot;:null}},&quot;rate&quot;:0,&quot;tax_name&quot;:&quot;&quot;,&quot;ecotax_rate&quot;:0,&quot;unit_price&quot;:0,&quot;customizations&quot;:{&quot;fields&quot;:[]},&quot;id_customization&quot;:0,&quot;is_customizable&quot;:false,&quot;show_quantities&quot;:true,&quot;quantity_label&quot;:&quot;Items&quot;,&quot;quantity_discounts&quot;:[],&quot;customer_group_discount&quot;:0}">

                                                <section class="product-features">
                                                    <!-- <h3 class="h6">Data sheet</h3> -->
                                                    <dl class="data-sheet" style="font-size:15px">
                                                        <dt class="name" >Dòng sản phẩm</dt>
                                                        <dd class="value" ng-repeat="d in productD">@{{d.ten_dong}}
                                                        
                                                        </dd>
                                                        <dt class="name">Thương hiệu</dt>
                                                        <dd class="value" ng-repeat="th in productT">@{{th.ten_thuong_hieu}}</dd>
                                                        <dt class="name">Công thức</dt>
                                                        <dd class="value">@{{product.kieu_dang}}</dd>
                                                        <dt class="name">Dung lượng</dt>
                                                        <dd class="value">@{{product.dung_luong}}</dd>
                                                        <dt class="name">Màu sắc</dt>
                                                        <dd class="value">@{{product.mau_sac}}</dd>
                                                    </dl>
                                                </section>

                                            </div>

                                            <div class="tab-pane fade in" id="idTab5">
                                                <script type="text/javascript">
                                                    var productcomments_controller_url = '../module/productcomments/default.html';
                                                    var confirm_report_message = 'Are you sure that you want to report this comment?';
                                                    var secure_key = '9fb2c8ee30f0a138e79b357c2c6426aa';
                                                    var productcomments_url_rewrite = '1';
                                                    var productcomment_added = 'Your comment has been added!';
                                                    var productcomment_added_moderation = 'Your comment has been submitted and will be available once approved by a moderator.';
                                                    var productcomment_title = 'New comment';
                                                    var productcomment_ok = 'OK';
                                                    var moderation_active = 1;
                                                </script>
                                                <div id="product_comments_block_tab">
                                                    <div class="comment clearfix">
                                                        <div class="comment_author">
                                                            <span>Grade&nbsp</span>
                                                            <div class="star_content clearfix">
                                                                <div class="star star_on"></div>
                                                                <div class="star star_on"></div>
                                                                <div class="star star_on"></div>
                                                                <div class="star star_on"></div>
                                                                <div class="star star_on"></div>
                                                            </div>
                                                            <div class="comment_author_infos">
                                                                <strong>asdasd a</strong>
                                                                <em>11/24/2017</em>
                                                            </div>
                                                        </div>
                                                        <div class="comment_details">
                                                            <h4 class="title_block">gdg</h4>
                                                            <p>gsfsf</p>
                                                            <ul>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <p class="align_center">
                                                        <a id="new_comment_tab_btn" class="open-comment-form btn btn-secondary">Write your review !</a>
                                                    </p>

                                                </div>
                                                <div class="container">
                                                    <!-- Trigger the modal with a button -->
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="myModal" role="dialog">
                                                        <div class="modal-dialog">
                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <div id="new_comment_form">
                                                                        <form id="id_new_comment_form" action="#">
                                                                            <h2 class="title">Write your review</h2>
                                                                            <div class="product clearfix col-xs-12 col-sm-6">
                                                                                <img src="../../291-medium_default/endeavor-daytrip.jpg" alt="Endeavor Daytrip" />
                                                                                <div class="product_desc">
                                                                                    <p class="product_name"><strong>Endeavor Daytrip</strong></p>
                                                                                    <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="new_comment_form_content col-xs-12 col-sm-6">
                                                                                <h2>Write your review</h2>
                                                                                <div id="new_comment_form_error" class="error" style="display:none;padding:15px 25px">
                                                                                    <ul></ul>
                                                                                </div>
                                                                                <ul id="criterions_list">
                                                                                    <li>
                                                                                        <label>Quality</label>
                                                                                        <div class="star_content">
                                                                                            <input class="star" type="radio" name="criterion[1]" value="1" />
                                                                                            <input class="star" type="radio" name="criterion[1]" value="2" />
                                                                                            <input class="star" type="radio" name="criterion[1]" value="3" />
                                                                                            <input class="star" type="radio" name="criterion[1]" value="4" />
                                                                                            <input class="star" type="radio" name="criterion[1]" value="5" checked="checked" />
                                                                                        </div>
                                                                                        <div class="clearfix"></div>
                                                                                    </li>
                                                                                </ul>
                                                                                <label for="comment_title">Title for your review<sup class="required">*</sup></label>
                                                                                <input id="comment_title" name="title" type="text" value="" />
                                                                                <label for="content">Your review<sup class="required">*</sup></label>
                                                                                <textarea id="content" name="content"></textarea>
                                                                                <label>Your name<sup class="required">*</sup></label>
                                                                                <input id="commentCustomerName" name="customer_name" type="text" value="" />
                                                                                <div id="new_comment_form_footer">
                                                                                    <input id="id_product_comment_send" name="id_product" type="hidden" value='1' />
                                                                                    <p class="fl required"><sup>*</sup> Required fields</p>
                                                                                    <p class="fr">
                                                                                        <button id="submitNewMessage" class="btn btn-secondary" name="submitMessage" type="submit">Send</button> &nbsp; or&nbsp;
                                                                                        <button type="button" class="closefb btn btn-secondary" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">Cancel</span>
							</button>
                                                                                    </p>
                                                                                    <div class="clearfix"></div>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                        <!-- /end new_comment_form_content -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal fade" id="result_comment" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <h2>Your comment is submitted</h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End fancybox -->

                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>




                            



                            <div class="modal fade js-product-images-modal" id="product-modal">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <figure>
                                                <img class="js-modal-product-cover product-cover-modal" width="700" src="../../291-large_default/endeavor-daytrip.jpg" alt="" title="" itemprop="image">
                                                <figcaption class="image-caption">

                                                    <div id="product-description-short" itemprop="description">
                                                        <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                                    </div>

                                                </figcaption>
                                            </figure>
                                            <aside id="thumbnails" class="thumbnails js-thumbnails text-xs-center">

                                                <div class="js-modal-mask mask  nomargin ">
                                                    <ul class="product-images js-modal-product-images">
                                                        <li class="thumb-container">
                                                            <img data-image-large-src="http://demo.posthemes.com/pos_melani/291-large_default/endeavor-daytrip.jpg" class="thumb js-modal-thumb" src="../../291-home_default/endeavor-daytrip.jpg" alt="" title="" width="350" itemprop="image">
                                                        </li>
                                                        <li class="thumb-container">
                                                            <img data-image-large-src="http://demo.posthemes.com/pos_melani/292-large_default/endeavor-daytrip.jpg" class="thumb js-modal-thumb" src="../../292-home_default/endeavor-daytrip.jpg" alt="" title="" width="350" itemprop="image">
                                                        </li>
                                                        <li class="thumb-container">
                                                            <img data-image-large-src="http://demo.posthemes.com/pos_melani/293-large_default/endeavor-daytrip.jpg" class="thumb js-modal-thumb" src="../../293-home_default/endeavor-daytrip.jpg" alt="" title="" width="350" itemprop="image">
                                                        </li>
                                                        <li class="thumb-container">
                                                            <img data-image-large-src="http://demo.posthemes.com/pos_melani/294-large_default/endeavor-daytrip.jpg" class="thumb js-modal-thumb" src="../../294-home_default/endeavor-daytrip.jpg" alt="" title="" width="350" itemprop="image">
                                                        </li>
                                                        <li class="thumb-container">
                                                            <img data-image-large-src="http://demo.posthemes.com/pos_melani/295-large_default/endeavor-daytrip.jpg" class="thumb js-modal-thumb" src="../../295-home_default/endeavor-daytrip.jpg" alt="" title="" width="350" itemprop="image">
                                                        </li>
                                                    </ul>
                                                </div>

                                            </aside>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->



                            <footer class="page-footer">

                                <!-- Footer content -->

                            </footer>

                            <script>
                                // productcomments
                                $(document).on('click', '#product_comments_block_extra ul.comments_advices a', function(e) {
                                    $('*[class^="tab-pane"]').removeClass('active');
                                    $('*[class^="tab-pane"]').removeClass('in');
                                    $('div#idTab5').addClass('active');
                                    $('div#idTab5').addClass('in');

                                    $('ul.nav-tabs a[href^="#"]').removeClass('active');
                                    $('a[href="#idTab5"]').addClass('active');
                                });
                                (function() {
                                    $(window).on("load", function() {

                                        /* Page Scroll to id fn call */
                                        $("#product_comments_block_extra ul.comments_advices a.reviews ").mPageScroll2id({
                                            highlightSelector: "#product_comments_block_extra ul.comments_advices a.reviews ",
                                            offset: 100,
                                        });
                                    });
                                })(jQuery);
                            </script>
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

<!-- Mirrored from demo.posthemes.com/pos_melani/en/home/1-1-endeavor-daytrip.html by HTTrack Website Copier/3.x [XR&CO'2010], Sat, 02 Apr 2022 03:45:38 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<!-- /Added by HTTrack -->

</html>