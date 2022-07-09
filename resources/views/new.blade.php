<!doctype html>
<html lang="en" ng-app="myapp" ng-controller="sanphamcontroller">

  
<!-- Mirrored from demo.posthemes.com/pos_melani/en/ by HTTrack Website Copier/3.x [XR&CO'2010], Sat, 02 Apr 2022 03:40:00 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
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
				SẢN PHẨM NEW
				</h2>	
			</div>
			<div class="row pos_content " >
				<div class="products featuredSlide " style="float: left; width:25%" dir-paginate="sp in productNew|itemsPerPage:itemPerPage">
					<div class="item-product col-xs-12 col-sm-6 col-md-3 col-lg-3" style=" width:340px">
												
						<article class="js-product-miniature item_in" data-id-product="1" data-id-product-attribute="1" itemscope itemtype="http://schema.org/Product">
						<div class="img_block">
		
							<a href="chitiet" class="thumbnail product-thumbnail">
								<img style="width:100%; height:310px"
								src = "/images/@{{sp.anh}}"
>
								

							</a>
							
		
		  					<ul class="product-flag">
											<li class="new"><span>New</span></li>
					  		</ul>
		
							<div class="block-inner">
								<a href="#" class="quick-view" data-link-action="quickview"><i class="fa-thin fa-eye"></i>Quick view</a>
								<a href="chitiet" title="Endeavor Daytrip" class="detail"><i class="fa-thin fa-file"></i></a>
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
									<form action="http://demo.posthemes.com/pos_melani/en/cart" method="post" class="add-to-cart-or-refresh">
									<input type="hidden" name="token" value="3f9d20541e7d447f815bbcdf8514a6d6">
									<input type="hidden" name="id_product" value="1" class="product_page_product_id">
									<input type="hidden" name="qty" value="1">
									<button class="button ajax_add_to_cart_button add-to-cart btn-default" data-button-action="add-to-cart" type="submit" >
											<span><i class="fa-solid fa-cart-plus"></i>Add to cart</span>
									</button>
									</form>
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