<div class="slideshow_container">
	<div class="pos-slideshow">
		<div class="flexslider ma-nivoslider">
			<div class="pos-loading"></div>
			<div id="pos-slideshow-home" class="slides">
				
													<a href="http://www.posthemes.com/" title="Sample 1" ><img style="display:none" src="/images/banner/1.jpg"  data-thumb="http://demo.posthemes.com/pos_melani/modules/posslideshows/images/e21d65df78e3ef1699e6c193cb90e735376dbb09_slide_1.1.jpg"  alt="" title="#htmlcaption1"  /> </a>
			   					<a href="http://www.posthemes.com/" title="Sample 2" ><img style="display:none" src="/images/banner/2.jpg"  data-thumb="http://demo.posthemes.com/pos_melani/modules/posslideshows/images/eb6777591dd16a907483a7a92f45b174bb67edda_slide_1.2.jpg"  alt="" title="#htmlcaption2"  /> </a>
			   			</div>
												<div id="htmlcaption1" class="pos-slideshow-caption nivo-html-caption nivo-caption">
														<div class="banner7-des"><div class="container"><div class="info desc1">
<p class="title1">sản phẩm chất lượng</p>
<p class="title2">Mỹ phẩm <span class="text">chính hãng</span></p>
<p class="title3">Ưu đãi giá tốt</p>
<p class="readmore"><a href="#"><span>View collection</span></a></p>
</div></div> </div>
														<div class="timethai" style=" 
								position:absolute;
								top:0;
								left:0;
								z-index:9;
								background-color: rgba(49, 56, 72, 0.298);
								height:5px;
								-webkit-animation: myfirst 5000ms ease-in-out;
								-moz-animation: myfirst 5000ms ease-in-out;
								-ms-animation: myfirst 5000ms ease-in-out;
								animation: myfirst 5000ms ease-in-out;
							
							">
							</div>
						
					</div>
				 					<div id="htmlcaption2" class="pos-slideshow-caption nivo-html-caption nivo-caption">
														<div class="banner7-des"><div class="container"><div class="info desc2">
<p class="title1">Free shipping beauty</p>
<p class="title3">Mua sắm chất lượng hàng đầu, Trang điểm, Chăm sóc da, Chăm sóc tóc &amp; nhiều hơn thế.</p>
<p class="readmore"><a href="#"><span>View collection</span></a></p>
</div></div> </div>
														<div class="timethai" style=" 
								position:absolute;
								top:0;
								left:0;
								z-index:9;
								background-color: rgba(49, 56, 72, 0.298);
								height:5px;
								-webkit-animation: myfirst 5000ms ease-in-out;
								-moz-animation: myfirst 5000ms ease-in-out;
								-ms-animation: myfirst 5000ms ease-in-out;
								animation: myfirst 5000ms ease-in-out;
							
							">
							</div>
						
					</div>
				 			 		</div>
	</div>
</div>
<script type="text/javascript">
 $(document).ready(function() {
	//Function to animate slider captions 
	function doAnimations( elems ) {
		//Cache the animationend event in a variable
		var animEndEv = 'webkitAnimationEnd animationend';
		
		elems.each(function () {
			var $this = $(this),
				$animationType = $this.data('animation');
			$this.addClass($animationType).one(animEndEv, function () {
				$this.removeClass($animationType);
			});
		});
	}
	//Variables on page load 
	var $myCarousel = $('.ma-nivoslider'),
		$firstAnimatingElems = $myCarousel.find('.nivo-caption').find("[data-animation ^= 'animated']");
	//Animate captions in first slide on page load 
	doAnimations($firstAnimatingElems);

});
</script> 