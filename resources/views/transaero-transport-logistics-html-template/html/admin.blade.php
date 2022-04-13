<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Trucking we transport food @ clothing we have a refrigerated trailer so refrigerated or dry goods">
	<meta name="keywords" content="Trans, refrigerated trailer , Logistic, Transport, Corporate, Cargo, Truck,Trucking ">
	<meta name="author" content="Shane Johnson">

	<!-- SITE TITLE -->
	<title>Burns & Gainer Transport & Logistics</title>

<!-- =========================
      FAV AND TOUCH ICONS  
      ============================== -->
      <link rel="shortcut icon" href="img/favicon.ico">

<!-- =========================
     STYLESHEETS   
     ============================== -->

     <!-- STYLES FILE -->   
     <link href="assets/css/master.css" rel="stylesheet">	

<!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
	<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>
<body onload="defaultLoad()">

	<!-- =========================
     PRE LOADER       
     ============================== -->

     <div class="preloader" id="preloader">
     	<div class="cssload-container">
     		<div class="cssload-whirlpool"></div>
     	</div>
     </div>

	<!-- =========================
     END PRE LOADER       
     ============================== -->


	<!-- =========================
		TOP MAIN NAVBAR
		============================== -->
		<div class="main-navbar main-navbar-1">
			<div class="container">
				<div class="row">

					<!-- === TOP LOGO === -->

					<div class="logo" id="main-logo">
						<div class="logo-image">
							<img src="assets/img/logo.png" alt="" />
						</div>
						<div class="logo-text">
							Burns & Gainer  <span class="color-primary">Transport & Logistics</span>
						</div>
					</div>

					<!-- === TOP SEARCH === -->

			<!-- 	<div class="main-search-input" id="main-search-input">
					<form>
						<input type="text" id="main-search" name="main-search" placeholder="Try and type enter..." />
					</form>
				</div> -->

				<!-- <div class="search-control"> -->
					<!-- === top search button show === -->
				<!-- 	<a id="show-search" class="show-search latest" href="#">
						<div class="my-btn my-btn-primary">
                            <div class="my-btn-bg-top"></div>
                            <div class="my-btn-bg-bottom"></div>
                            <div class="my-btn-text">
                                <i class="fa fa-search"></i>
                            </div>
						</div>
					</a> -->
					<!-- === top search button close === -->
					<!-- <a id="close-search" class="close-search latest" href="#">
						<div class="my-btn my-btn-primary">
							<div class="my-btn-bg-top"></div>
							<div class="my-btn-bg-bottom"></div>
							<div class="my-btn-text">
								<i class="fa fa-close"></i>
							</div>
						</div>
					</a>
				</div> -->
				
				<div class="show-menu-control">
					<!-- === top search button show === -->
					<a id="show-menu" class="show-menu" href="#">
						<div class="my-btn my-btn-primary">
							<div class="my-btn-bg-top"></div>
							<div class="my-btn-bg-bottom"></div>
							<div class="my-btn-text">
								<i class="fa fa-bars"></i>
							</div>
						</div>
					</a>
				</div>

				<!-- === TOP MENU === -->

				<div class="collapse navbar-collapse main-menu main-menu-1" id="main-menu">
					<ul class="nav navbar-nav">

						<!-- === top menu item === -->

						<li class="active">
							<a  href="#">Dashboard</a>
						</li>
						
						<li class="main-menu-separator"></li>
						<!-- === top menu item === -->

						<li >
							<a href="/logout">LOGOUT</a>

						</li>

						<li class="main-menu-separator"></li>
						<!-- === top menu item === -->

						<!-- 	<li >
								<a class="latest" href="/contact">Settings</a>
							</li> -->
						</ul>
					</div>


				</div>
			</div>
		</div>

	 <!-- =========================
		END TOP MAIN NAVBAR
		============================== -->


	<!-- ===================================
		PAGE HEADER
		======================================== -->
		<div class="page-header" data-stellar-background-ratio="0.4" style="background-image: url('assets/media/main-slider/nav_img.jpg');">
			<div class="page-header-overlay"></div>
			<div class="container">
				<div class="row">

					<!-- === PAGE HEADER TITLE === -->
					<div class="page-header-title" style="margin-top: 3em;">
						<h2>DASHBOARD</h2>
					</div>

					<!-- === PAGE HEADER BREADCRUMB === -->
					<div class="page-header-breadcrumb">
						<ol class="breadcrumb">
							<li><a href="/">Home</a></li>
							<!-- 					<li><a href="11_blog.html">ORDER HISTORY</a></li> -->
							<li class="active">DASHBOARD</li>
						</ol>
					</div>

					
				</div>
			</div>
		</div>
	<!-- ===================================
		END PAGE HEADER
		======================================== -->

	<!-- =========================
		BLOG ITEMS
		============================== -->
		<div class="def-section single-blog-section">
			<div class="container">
				<div class="row">

					<!-- === BLOG RIGHT BAR === -->

					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<ul class="service-menu">
							<li class="active">
								<a href="#account" onclick="defaultLoad()">ACCOUNT</a>
							</li>
							<li>
								<a href="#tracking" onclick="orderTracking()">ORDER TRACKING</a>
							</li>
							<li>
								<a href="#history" onclick="orderHistory()">ORDER HISTORY</a>
							</li>

							<li>
								<a href="/quotes">REQUESTED SHIPPING</a>
							</li>
						</ul>
					</div>



					<section class="col-lg-9 col-md-9 col-sm-9 col-xs-12" id="default"
					style="margin-bottom: 1em;">

					<div class="contacts-info-title">
						<div class="contacts-info-title-icon">
							<i class="fa fa-user"></i>
						</div>
						<h3>Welcome, {{auth()->user()->name}}</h3>
					</div>

					<div class="bs-example">
						<blockquote><a href="#" onclick="orderTracking()">ORDERS - {{count($orders)}}</a></blockquote>
						<blockquote><a href="/quotes">QUOTES - {{count($quotes)}}</a></blockquote>

					</div>

				</section>




				<section id="orderTracking">


					@if(isset($orders))
					@for($i = 0; $i < sizeof($orders); $i++)
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12" id="comments">



						<h2>Tracking number ({{$orders[$i]->order_tracking_number}})</h2>
						<div style="margin-bottom: 2em;"></div>



						<div class="media">

									<!-- <a class="pull-left" href="#">
										<img class="media-object" src="assets/media/team/1.jpg" alt="" />
									</a> -->
									<div class="media-body">
										<div class="media-body-top">
											<div class="media-info">
												<h3>ORDER STATUS: <span class="media-date" style="font-size: 25px;">{{$orders[$i]->status}}</span>
													<div class="media-reply">
														<a href="#"><div class="my-btn my-btn-default">
															<div class="my-btn-bg-top"></div>
															<div class="my-btn-bg-bottom"></div>
															<div class="my-btn-text" style="font-size:15px;">
																DATE: {{$orders[$i]->created_at}}
															</div>
														</div></a>
													</div></h3>

													<h3 class="media-heading" style="font-size: 25px;">
														CARGO TYPE: <span class="media-date" style="font-size: 25px;">
															@if($orders[$i]->category_id == 1)
															Clothing
															@endif
															@if($orders[$i]->category_id == 2)
															Refrigerated goods
															@endif
															@if($orders[$i]->category_id == 3)
															Dry goods
															@endif
														</span>
													</h3>
													<br>

													<div class="row"> 

														<div class="col-lg-12">
															<h3>CUSTOMER INFO:</h3>

															<h4 class="color-primary">{{$orders[$i]->name}}</h4>
															<h4 class="color-primary">{{$orders[$i]->phone}}</h4>
															<h4 class="color-primary">{{$orders[$i]->email}}</h3>	

															</div>

															<div class="col-lg-12">
																<h3>SHIPPING INFO:</h3>

																<h4>Location: <span class="color-primary">{{$orders[$i]->shipping_address}}</span></h4>
																<h4>Destination:  <span class="color-primary">{{$orders[$i]->address}}</span></h4>
															</div>
														</div>


													</div>




												</div>


											</div>
											<form name="contact-form" id="contact-form" method="POST" action="/order/update">

												@csrf
												<input type="hidden" name="order_id" value="{{$orders[$i]->id}}">

												<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 contacts-form-item">
													<label style="font-size: 25px;">Current shipping location</label>
													<input style="font-size: 18px;" type="text" name="shipping_address" placeholder="{{$orders[$i]->shipping_address}}"/ re
													>
												</div>
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contacts-form-item contacts-form-button">
																	<button type="submit"><span class="my-btn my-btn-default">
																		<span class="my-btn-bg-top"></span>
																		<span class="my-btn-bg-bottom"></span>
																		<span class="my-btn-text">
																			Update location
																		</span>
																	</span></button>
																</div>
											</form>

										</div>



									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
									@endfor
									@endif

									@if(count($orders)==0)
									<div class="col-lg-1"></div>
									<div class="col-lg-6">
										<h2>There aren't any orders.</h2>
									</div>
									@endif

								</section>



								<section id="orderHistory">

									<!-- === BLOG ITEMS === -->

									@if(isset($orders))
									@for($i = 0; $i < sizeof($orders); $i++)
									<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">

										<!-- === BLOG ITEM === -->
										<div class="single-post">
							<!-- <div class="single-post-date">
								<div class="single-post-date-number">26</div>MAY
							</div> -->
						<!-- 	<div class="single-post-image">
								<img src="assets/media/blog/5.jpg" alt="" />
							</div> -->
							<div class="single-post-info" style="font-size:16px">
								<span class="author-icon"><i class="fa fa-user"></i></span>
								<a href="#">Admin</a>
								<span class="date-icon"><i class="fa fa-calendar"></i></span>
								<a href="12_blog_detail.html">{{$orders[$i]->created_at}}</a>
							</div>

							<div class="row">
								<div class="col-lg-4">
									<div class="single-post-title">
										<h3><a >Status: {{$orders[$i]->status}}</a></h3>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="single-post-title">
										<h3><a >Location: {{$orders[$i]->status}}</a></h3>
									</div>
								</div>
								
								<div class="col-lg-4">
									<div class="single-post-title">
										<h3><a >Destination: {{$orders[$i]->status}}</a></h3>
									</div>
								</div>
								
								
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="single-post-title">
										<h3><a >Contact: {{$orders[$i]->status}}</a></h3>
									</div>
									
								</div>
								
							</div>





						</div>			

					</div>

					<div class="col-lg-3"></div>
					@endfor

					@endif

					@if(count($orders)==0)
					<div class="col-lg-1"></div>
					<div class="col-lg-6">
						<h2>There aren't any orders.</h2>
					</div>
					@endif
					

				</section>






				<!-- === BLOG RIGHT BAR === -->

			<!-- 	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<div class="blog-right-bar"> -->
					
					<!-- 	<div class="blog-right-bar-item">
							<h3>SEARCH SHIPPING ORDER</h3>
							<div class="search-blog">
								<form>
									<input type="text" name="blog-search" id="blog-search" placeholder="Keyword...">
								</form>
							</div>
						</div> -->


						
						<!-- div class="blog-right-bar-item">
							<h3>RECENT POSTS</h3>
							<div class="recent-posts">
								<div class="recent-post">
									<div class="recent-post-image">
										<img src="assets/media/blog/8.jpg" alt="" />
									</div>
									<div class="recent-post-title">
										<a href="12_blog_detail.html">Adipisicing elit sed usmodtempor incidid</a>
									</div>
									<div class="recent-post-date">
										<span class="date-icon"><i class="fa fa-calendar"></i></span>
										<a href="12_blog_detail.html">26 may 2015</a>
									</div>
								</div>
								<div class="recent-post">
									<div class="recent-post-image">
										<img src="assets/media/blog/9.jpg" alt="" />
									</div>
									<div class="recent-post-title">
										<a href="12_blog_detail.html">Adipisicing elit sed usmodtempor incidid</a>
									</div>
									<div class="recent-post-date">
										<span class="date-icon"><i class="fa fa-calendar"></i></span>
										<a href="12_blog_detail.html">26 may 2015</a>
									</div>
								</div>
							</div>
						</div> -->
						<!-- 
						<div class="blog-right-bar-item">
							<h3>CATEGORIES</h3>
							<ul class="blog-categories">
								<li class="first">
									<a href="#">Photography</a>
								</li>
								<li class="active">
									<a href="#">Business & Economy</a>
								</li>
								<li>
									<a href="#">Responsive Designs</a>
								</li>
								<li>
									<a href="#">Web Applications</a>
								</li>
								<li>
									<a href="#">Advertising</a>
								</li>
								<li class="latest">
									<a href="#">Online Marketing</a>
								</li>
							</ul>
						</div> -->
						
					<!-- 	<div class="blog-right-bar-item">
							<h3>ABOUT US</h3>
							<p class="blog-about">
								Ante augue, convallis sit amet volutpat posuere
								vel quam. Lorem ipsuml dolor sit amet consecet
								uds adipiscing elit. Vestibulum acd risu nec eros
								auctor egestas. Maecenas eidm dolor. Sed nunc
								nonl molestie hendrerit. 
							</p>
						</div>
					-->
						<!-- <div class="blog-right-bar-item latest">
							<h3>TAGS CLOUD</h3>
							<div class="blog-tags">
								<a href="#">truck</a> 
								<a href="#">Development</a> 
								<a class="active" href="#">cargo plane</a> 
								<a href="#">trucking</a> 
								<a href="#">ALL PROJECTS</a> 
								<a href="#">SEO</a> 
								<a href="#">responsive</a> 
								<a href="#">CLEAN design</a> 
							</div>
						</div> -->
				<!-- 		
					</div>
				</div> -->
				
				
			</div>
		</div>
	</div>

	
	<!-- ===================================
		SUBSCRIBE SECTION
		======================================== -->
	<!-- 	<div class="def-section home-subscribe">
			<div class="container">
				<div class="row">
				-->
				<!-- === SUBSCRIBE TEXT === -->
				<!-- 	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 home-subscribe-text animated wow fadeInUp" data-wow-duration=".5s" data-wow-offset="100">
						<span class="home-subscribe-icon"><i class="flaticon-email114"></i></span>
						SIGN UP FOR NEWSLETTER TO GET UPDATES AND NEWS
					</div>
				-->
				<!-- === SUBSCRIBE FORM === -->
				<!-- 	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 home-subscribe-form animated wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s" data-wow-offset="100">
						<form>
							<div class="home-subscribe-form-input">
								<input type="text" name="subscribe" placeholder="YOUR E-MAIL" />
							</div>
							<div class="home-subscribe-form-button">
								<button><span class="my-btn my-btn-primary">
									<span class="my-btn-bg-top"></span>
									<span class="my-btn-bg-bottom"></span>
									<span class="my-btn-text">
										SUBSCRIBE
									</span>
								</span></button>
							</div>
						</form>
					</div> -->

		<!-- 		</div>
			</div>
		</div> -->
	<!-- ===================================
		END SUBSCRIBE SECTION
		======================================== -->


<!-- ===================================
		FOOTER
		======================================== -->
		@include('transaero-transport-logistics-html-template/html/components/footer')
	<!-- ===================================
		END FOOTER
		======================================== -->


	<!-- ===================================
		BOTTOM SECTION
		======================================== -->
		@include('transaero-transport-logistics-html-template/html/components/bottom-section')
	<!-- ===================================
		END BOTTOM SECTION
		======================================== -->

	<!-- =========================
	   SLIDE MENU
	   ============================== -->
	   @include('transaero-transport-logistics-html-template/html/components/aside')
	<!-- =========================
	   END SLIDE MENU
	   ============================== -->


	<!-- =========================
	   BLACK OVERLAY
	   ============================== -->
	   <div class="black-overlay" id="black-overlay"></div>
	<!-- =========================
	   END BLACK OVERLAY
	   ============================== -->

	<!-- =========================
		 SCRIPTS   
		 ============================== -->	

		 <!-- JQUERY -->
		 <script src="assets/js/customAdmin.js"></script>

		 <script src="assets/js/jquery-1.11.3.min.js"></script>

		 <!-- BOOTSTRAP -->
		 <script src="assets/js/bootstrap.min.js"></script>

		 <!-- SMOOTH SCROLLING  -->
		 <script src="assets/js/smoothscroll.min.js"></script>

		 <!-- STELLAR.JS FOR PARALLAX -->
		 <script src="assets/js/jquery.stellar.min.js"></script>

		 <!-- SLIDER PRO  -->
		 <script src="assets/slider-pro/js/jquery.sliderPro.min.js"></script>

		 <!-- SCROLLSPY -->
		 <script src="assets/js/scrollspy.min.js"></script>

		 <!-- WOW PLAGIN -->
		 <script src="assets/js/wow.min.js"></script>

		 <!-- CAROUSEL -->
		 <script src="assets/owl-carousel/owl.carousel.min.js"></script>

		 <!-- VERTICAL ACCORDEON MENU -->
		 <script src="assets/js/metisMenu.min.js"></script>

		 <!-- CUSTOM SCRIPT -->
		 <script src="assets/js/theme.min.js"></script>

		</body>
		</html>