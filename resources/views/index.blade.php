<!doctype html>
<html lang="en" ng-app="myapp" ng-controller="sanphamcontroller">

<head>
	@include('includes.head')
	
  </head>

  <body id="index" class="lang-en country-us currency-usd layout-full-width page-index tax-display-disabled ">
    
    <main>
      
    <!-- header           -->
	@include('includes.header1')
      
	<!-- slideshow -->
	@include('includes.slide')
    
<!-- Banner top 	  	   -->
	@include('includes.banner_top')
<!-- Product -->
	<div class="pos_featured_product product_block_container" >
		<div class="container" >
			<div class="pos_title">
				
				<h2>
				SẢN PHẨM NỔI BẬT
				</h2>	
			</div>
			<div class="row pos_content " >
				<div class="products featuredSlide " style="float: left; width:25%" dir-paginate="sp in products|filter: timkiem|itemsPerPage:itemPerPage">
					<div class="item-product col-xs-12 col-sm-6 col-md-3 col-lg-3" style=" width:340px">
												
						<article class="js-product-miniature item_in" data-id-product="1" data-id-product-attribute="1" itemscope itemtype="http://schema.org/Product">
						<div class="img_block">
		
							<a href="chitiet" ng-click="openDetails(sp.id)" class="thumbnail product-thumbnail">
								<img style="width:100%; height:310px"
								src = "/images/@{{sp.anh}}"
									>
							</a>
							
		  					<ul class="product-flag">
											<li class="discount-percentage"><span>Hot</span></li>
					  		</ul>
		
							<div class="block-inner">
								<a href="#" class="quick-view" data-link-action="quickview"><i class="fa-thin fa-eye"></i>Quick view</a>
								<a href="chitiet" ng-click="openDetails(sp.id)" title="Endeavor Daytrip" class="detail"><i class="fa-thin fa-file"></i></a>
							</div>
		
							<div class="product-price-and-shipping">
								</div>
              
						</div>
    					<div class="product_desc">
				
		      
       						<h4><a href="chitiet" ng-click="openDetails(sp.id)" style="height:50px" title="Endeavor Daytrip" itemprop="name" class="product_name">@{{sp.ten_sp}}</a></h4>    
                  			<div class="product-price-and-shipping">
            
            					<span itemprop="price" class="price ">@{{sp.gia |number:0}}</span>
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
					<!-- <dir-pagination-controls max-size="10" on-page-change="indexCount(newPageNumber)"
                                            direction-links="true"
                                            boundary-links="true" ></dir-pagination-controls> -->
				</div>
			</div>
		</div>
	</div>
    <!-- banner-home -->
	@include('includes.banner_home')
	<!-- banner-center -->
	<!-- @include('includes.banner_center')  -->

	<!-- sản phẩm bán chạy -->
	<div class="pos_featured_product product_block_container" >
		<div class="container" >
			<div class="pos_title">
				
				<h2>
				SẢN PHẨM BÁN CHẠY
				</h2>	
			</div>
			<div class="row pos_content " >
				<div class="products featuredSlide " style="float: left; width:25%" dir-paginate="sp in product1|itemsPerPage:itemPerPages">
					<div class="item-product col-xs-12 col-sm-6 col-md-3 col-lg-3" style=" width:340px">
												
						<article class="js-product-miniature item_in" data-id-product="1" data-id-product-attribute="1" itemscope itemtype="http://schema.org/Product">
						<div class="img_block">
		
							<a href="chitiet" ng-click="openDetails(sp.id)" class="thumbnail product-thumbnail">
								<img style="width:100%; height:310px"
								src = "/images/@{{sp.anh}}"
									>
							</a>
		
							<div class="block-inner">
								<a href="#" class="quick-view" data-link-action="quickview"><i class="fa-thin fa-eye"></i>Quick view</a>
								<a href="chitiet" ng-click="openDetails(sp.id)" title="Endeavor Daytrip" class="detail"><i class="fa-thin fa-file"></i></a>
							</div>
		
							<div class="product-price-and-shipping">
								</div>
              
						</div>
    					<div class="product_desc">
				
		      
       						<h4><a href="chitiet" ng-click="openDetails(sp.id)" style="height:50px" title="Endeavor Daytrip" itemprop="name" class="product_name">@{{sp.ten_sp}}</a></h4>
      
      
                  			<div class="product-price-and-shipping">
            
            					<span itemprop="price" class="price ">@{{sp.gia |number:0}}</span>

          					</div>
              
	  	
							<div class="product-desc" itemprop="description"><p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p></div>
		
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
						<!-- <dir-pagination-controls max-size="10" on-page-change="indexCount(newPageNumber)"
                                            direction-links="true"
                                            boundary-links="true" ></dir-pagination-controls> -->
					
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- sản phẩm new -->
	<div class="pos_featured_product product_block_container" >
		<div class="container" >
			<div class="pos_title">
				
				<h2>
				SẢN PHẨM NEW
				</h2>	
			</div>
			<div class="row pos_content " >
				<div class="products featuredSlide " style="float: left; width:25%" dir-paginate="sp in productNew|itemsPerPage:itemPerPages">
					<div class="item-product col-xs-12 col-sm-6 col-md-3 col-lg-3" style=" width:340px">
												
						<article class="js-product-miniature item_in" data-id-product="1" data-id-product-attribute="1" itemscope itemtype="http://schema.org/Product">
						<div class="img_block">
		
							<a href="chitiet" ng-click="openDetails(sp.id)" class="thumbnail product-thumbnail">
								<img style="width:100%; height:310px"
								src = "/images/@{{sp.anh}}"
									>
							</a>
							<ul class="product-flag">
									<li class="new"><span>New</span></li>
					  			</ul>
							<div class="block-inner">
								<a href="#" class="quick-view" data-link-action="quickview"><i class="fa-thin fa-eye"></i>Quick view</a>
								<a href="chitiet" ng-click="openDetails(sp.id)" title="Endeavor Daytrip" class="detail"><i class="fa-thin fa-file"></i></a>
							</div>
		
							<div class="product-price-and-shipping">
								</div>
              
						</div>
    					<div class="product_desc">
				
		      
       						<h4><a href="chitiet" ng-click="openDetails(sp.id)" style="height:50px" title="Endeavor Daytrip" itemprop="name" class="product_name">@{{sp.ten_sp}}</a></h4>
      
      
                  			<div class="product-price-and-shipping">
            
            					<span itemprop="price" class="price ">@{{sp.gia |number:0}}</span>

          					</div>
              
	  	
							<div class="product-desc" itemprop="description"><p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p></div>
		
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
						<!-- <dir-pagination-controls max-size="10" on-page-change="indexCount(newPageNumber)"
                                            direction-links="true"
                                            boundary-links="true" ></dir-pagination-controls> -->
					
					</div>
				</div>
			</div>
		</div>
	</div>


<!-- banner bottom -->
		     	  	  <div class="banner-bottom">
<div class="container">
<div class="banner-innner"><a href="#"> <img src="images/banner/cms_1.6.jpg" alt="image" /> </a></div>
</div>
</div>
<!-- home blog -->
		<div class="home_blog_post_area general product_block_container">
            <div class="container">
                <div class="home_blog_post">
                    <div class="page_title_area pos_title">
                        <p class="des-title">
                            New our blogs
                        </p>
                        <a href="xipblog.html" class="header_title">
                            <h2>
                                From the blog
                            </h2>
                        </a>
                    </div>
                    <div class="home_blog_post_inner">
                        <div class="row pos_content ">
                            <div class="blog_slider col-xs-12 col-sm-6 col-md-4 col-lg-4" ng-repeat="b in blogs" style="float: left;width: 33%">
                                <div class="item " style="float: left; width: 456px" >
                                    <article class="blog_post " >
                                        <div class="blog_post_content_top">
                                            
                                            <div class="post_thumbnail" >
                                                <a href="baiviet" class="img_content" ng-click="openDetails(b.id)">
													<img
													src = "/images/@{{b.anh}}"
													style="width: 100%;height:310px;">
												</a>
                                                <!-- <div class="blog_mask">
                                                    <div class="blog_mask_content">
                                                        <a class="thumbnail_lightbox" href="../modules/xipblog/img/large-4.jpg" target="_blank">
                                                            <i class="material-icons">add_circle_outline</i>
                                                        </a>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="post_content">

                                            <h4><a href="baiviet" class="post_title" ng-click="openDetails(b.id)">@{{b.tieu_de}}</a></h4>
                                            <!-- <p class="post_description">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the ...
                                            </p> -->
                                        </div>
                                    </article>
                                </div>
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	        
        
<aside id="notifications">
  <div class="container">  
    
      </div>
</aside>
         
      <!-- Footer -->
      @include('includes.footer1')

    </main>
  
	<div class="back-top"><a href= "#" class="back-top-button"><i class="fa-thin fa-angle-up"></i></a></div>
	<script src="/JS/angular.min.js"></script>
    <script src="/JS/sanphamcontroller.js"></script>
	<script src="/JS/dirPagination.js" type="text/javascript"></script>
  </body>

<!-- Mirrored from demo.posthemes.com/pos_melani/en/ by HTTrack Website Copier/3.x [XR&CO'2010], Sat, 02 Apr 2022 03:42:42 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
</html>