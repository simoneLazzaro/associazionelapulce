<?php get_header(); ?>

<div class="top-box">
	  <div class="wrap">
		 <div class="content-top">
			<div class="section group">
				<div class="col_1_of_3 span_1_of_3">
					<div class="grid_4 alpha vline">
							<h3>Lorem ipsum dolor </h3>
							<div class="thumb-pad1 tp1">
					           <div class="thumbnail clearfix">
				                <figure>
									<img src="web/images/pic.jpg" alt=""/><em></em>
				                </figure>
					          </div>
			       			 </div>
			       		 <div class="clear"></div>
				         <div class="more1">
				          	<a href="#" class="more_btn">view more</a>
				        </div>
					</div>
				</div>
				<div class="col_1_of_3 span_1_of_3">
					<div class="grid_4 alpha vline">
							<h3>Lorem ipsum dolor </h3>
							<div class="thumb-pad1 tp1">
					           <div class="thumbnail clearfix">
				                <figure>
									<img src="web/images/pic1.jpg" alt=""/><em></em>
				                </figure>
					          </div>
			       			 </div>
			       		 <div class="clear"></div>
				         <div class="more1">
				          	<a href="#" class="more_btn">view more</a>
				        </div>
					</div>
				</div>
				<div class="col_1_of_3 span_1_of_3">
					<div class="grid_4 alpha vline">
							<h3>Lorem ipsum dolor </h3>
							<div class="thumb-pad1 tp1">
			          <div class="thumbnail clearfix">
		                 <figure>
								 	<img src="web/images/pic2.jpg" alt=""/><em></em>
		                	  </figure>
			          </div>
			        </div>
			        <div class="clear"></div>
			         <div class="more1">
			          <a href="#" class="more_btn">view more</a>
			        </div>
				</div>
				</div>
				<div class="clear"></div> 
			</div>
		</div>
	   </div>
	</div>
	<div class="content-middle">
		<div class="wrap">
			<h5><span>Our</span> Gallery</h5>
		   <div class="container">
			<ul id="filters" class="clearfix">
				<li><span class="filter active" data-filter="app card icon logo web">Categorie1</span></li>
				<li><span class="filter" data-filter="app">Categorie2</span></li>
				<li><span class="filter" data-filter="card">Categorie3</span></li>
				<li><span class="filter" data-filter="web">Categorie4</span></li>
			</ul>
			<div class="clear"></div>
		    <div id="portfoliolist" style="     " class="">
				<div class="portfolio logo1 mix_all" data-cat="logo" style=" ">
					<div class="portfolio-wrapper">	
						<div class="gallery">				
						<a href="web/images/t-pic3.jpg" class="flipLightBox-1">
							<img src="web/images/pic3.jpg" alt="Image 2" style="top: 0px;">
						</a>
						</div>
					</div>
				</div>				
				<div class="portfolio app mix_all" data-cat="app" style="  display: inline-block; opacity: 1;">
					<div class="portfolio-wrapper">	
						<div class="gallery">		
							<a href="web/images/t-pic4.jpg" class="flipLightBox-2">
								<img src="web/images/pic4.jpg" alt="Image 2" style="top: 0px;">
							</a>
						</div>
					</div>
				</div>		
				<div class="portfolio web mix_all" data-cat="web" style="  display: inline-block; opacity: 1;">
					<div class="portfolio-wrapper">	
						<div class="gallery">						
						<a href="web/images/t-pic5.jpg" class="flipLightBox-3">
							<img src="web/images/pic5.jpg" alt="Image 2" style="top: 0px;">
						</a>
						</div>
					</div>
				</div>				
				<div class="portfolio card mix_all" data-cat="card" style="  display: inline-block; opacity: 1;">
					<div class="portfolio-wrapper">	
						<div class="gallery">			
						<a href="web/images/t-pic6.jpg" class="flipLightBox-4">
							<img src="web/images/pic6.jpg" alt="Image 2" style="top: 0px;">
						</a>
						</div>
					</div>
				</div>	
				<div class="portfolio app mix_all" data-cat="app" style="  display: inline-block; opacity: 1;">
					<div class="portfolio-wrapper">
						<div class="gallery">			
						<a href="web/images/t-pic7.jpg" class="flipLightBox-4">
							<img src="web/images/pic7.jpg" alt="Image 2" style="top: 0px;">
						</a>
						</div>
					</div>
				</div>			
				<div class="portfolio card mix_all" data-cat="card" style="  display: inline-block; opacity: 1;">
					<div class="portfolio-wrapper">	
						<div class="gallery">			
						<a href="web/images/t-pic8.jpg" class="flipLightBox-4">
							<img src="web/images/pic8.jpg" alt="Image 2" style="top: 0px;">
						</a>
						</div>
					</div>
				</div>	
				<div class="portfolio card mix_all" data-cat="card" style="  display: inline-block; opacity: 1;">
					<div class="portfolio-wrapper">	
						<div class="gallery">			
						<a href="web/images/t-pic9.jpg" class="flipLightBox-4">
							<img src="web/images/pic9.jpg" alt="Image 2" style="top: 0px;">
						</a>
						</div>
					</div>
				</div>	
				<div class="portfolio logo1 mix_all" data-cat="logo" style=" ">
					<div class="portfolio-wrapper">	
						<div class="gallery">			
						<a href="web/images/t-pic10.jpg" class="flipLightBox-4">
							<img src="web/images/pic10.jpg" alt="Image 2" style="top: 0px;">
						</a>
						</div>
					</div>
				</div>																																							
		</div>
	<script type="text/javascript" src="web/js/jquery.mixitup.min.js"></script>
	<script type="text/javascript">
	$(function () {
		
		var filterList = {
		
			init: function () {
			
				// MixItUp plugin
				// http://mixitup.io
				$('#portfoliolist').mixitup({
					targetSelector: '.portfolio',
					filterSelector: '.filter',
					effects: ['fade'],
					easing: 'snap',
					// call the hover effect
					onMixEnd: filterList.hoverEffect()
				});				
			
			},
			
			hoverEffect: function () {
			
				// Simple parallax effect
				$('#portfoliolist .portfolio').hover(
					function () {
						$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
						$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
					},
					function () {
						$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
						$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
					}		
				);				
			
			}

		};
		
		// Run the show!
		filterList.init();
		
		
	});	
	</script>
	</div>
   </div>
   </div>
   <div class="top-box">
	  <div class="wrap">
		 <div class="content-top">
			<div class="section group example">
				<div class="col_1_of_2 span_1_of_2">
				   <h4>Lorem Ipsum is simply</h4>
				            <div class="wrapper marTop1">
								<div class="date_section">
									<time datetime="2013-01-01">
										<span class="day">21</span>
										<span class="month">Nov</span>
									</time>
								</div>
								<p>Lorem ipsum dolor sit amet consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean non.</p>
							</div>
							<div class="wrapper marTop1">
								<div class="date_section">
									<time datetime="2013-01-01">
										<span class="day">21</span>
										<span class="month">Nov</span>
									</time>
								</div>
								<p>Lorem ipsum dolor sit amet consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean non.</p>
							</div>
				  </div>
				 <div class="col_1_of_2 span_1_of_2">
				   <h4>Lorem Ipsum is simply</h4>
				            <div class="wrapper marTop1">
								<div class="date_section">
									<time datetime="2013-01-01">
										<span class="day">21</span>
										<span class="month">Nov</span>
									</time>
								</div>
								<p>Lorem ipsum dolor sit amet consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean non.</p>
							</div>
							<div class="wrapper marTop1">
								<div class="date_section">
									<time datetime="2013-01-01">
										<span class="day">21</span>
										<span class="month">Nov</span>
									</time>
								</div>
								<p>Lorem ipsum dolor sit amet consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean non.</p>
							</div>
				  </div>
				  <div class="clear"></div> 
				  <div class="banner1">
						<strong class="fa-comments"></strong>
							<div class="box2">
								<h4>„ Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. „</h4>
								<p class="color1">Jessica Priston, USA</p>
							</div>
				 </div>
		    </div>
		</div>
	  </div>
	</div>
	
	<?php get_footer(); ?>