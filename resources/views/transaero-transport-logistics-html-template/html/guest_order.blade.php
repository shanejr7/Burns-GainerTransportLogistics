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
</head>
<body>

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
							Burns & Gainer <span class="color-primary">Transport & Logistics</span>
						</div>
					</div>

				</div>


				<div class="row">


					<!-- === TOP SEARCH === -->

					<!-- <div class="main-search-input" id="main-search-input">
						<form>
							<input type="text" id="main-search" name="main-search" placeholder="Try and type enter..." />
						</form>
					</div>

					<div class="search-control"> -->
						<!-- === top search button show === -->
						<!-- <a id="show-search" class="show-search latest" href="#">
							<div class="my-btn my-btn-primary">
								<div class="my-btn-bg-top"></div>
								<div class="my-btn-bg-bottom"></div>
								<div class="my-btn-text">
									<i class="fa fa-search"></i>
								</div>
							</div>
						</a> -->
						<!-- === top search button close === -->
					<!-- 	<a id="close-search" class="close-search latest" href="#">
							<div class="my-btn my-btn-primary">
								<div class="my-btn-bg-top"></div>
								<div class="my-btn-bg-bottom"></div>
								<div class="my-btn-text">
									<i class="fa fa-close"></i>
								</div>
							</div>
						</a>
					</div>
				-->
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
					@guest
					<ul class="nav navbar-nav">

						<!-- === top menu item === -->
						<li >
							<a href="/">Home</a>
						</li>
					<!-- 	<li class="active dropdown">
						<a data-toggle="dropdown" href="/">Home</a> -->
							<!-- <ul class="dropdown-menu" role="menu">
								<li class="active">
									<a href="/">Home 1</a>
								</li>
							</ul> -->
							<!-- </li> -->
							<li class="main-menu-separator"></li>
							<!-- === top menu item === -->
							<li>
								<a  href="/services">Services</a>
							</li>
					<!-- 	<li class="dropdown">
						<a data-toggle="dropdown" href="/service">Service</a> -->
							<!-- <ul class="dropdown-menu" role="menu">
								<li>
									<a href="/services3">Service 1</a>
								</li>
								<li>
									<a href="/services4">Service 2</a>
								</li>
								<li>
									<a href="/service-detail">Service Details</a>
								</li>
							</ul> -->
							<!-- </li> -->
							<li class="main-menu-separator"></li>
							<!-- === top menu item === -->
						<!-- <li class="dropdown">
							<a data-toggle="dropdown" href="#">Elements</a>
							<ul class="dropdown-menu" role="menu">
								<li>
									<a href="/typogrpaphy">Typography</a>
								</li>
								<li>
									<a href="/buttons">Buttons</a>
								</li>
								<li>
									<a href="/progress">Progress Bars</a>
								</li>
								<li>
									<a href="/alerts">Alerts</a>
								</li>
							</ul>
						</li>  -->
						<li class="main-menu-separator"></li>
						<!-- === top menu item === -->
						<li >
							<a href="/login">LOGIN</a>

						</li>
					<!-- 	<li class="dropdown">
						<a data-toggle="dropdown" href="/login">LOGIN</a> -->
							<!-- <ul class="dropdown-menu" role="menu">
								<li>
									<a href="/blog">Blog items</a>
								</li>
								<li>
									<a href="/blog_2">Single Post</a>
								</li>
							</ul> -->
							<!-- </li>  -->
							<li class="main-menu-separator"></li>
							<!-- === top menu item === -->
							<li >
								<a href="/signup">SIGNUP</a>

							</li>
					<!-- 	<li class="dropdown">
						<a data-toggle="dropdown" href="/signup">SIGNUP</a> -->
							<!-- <ul class="dropdown-menu" role="menu">
								<li>
									<a href="/blog">Blog items</a>
								</li>
								<li>
									<a href="/blog_2">Single Post</a>
								</li>
							</ul> -->
							<!-- </li>  -->
							<li class="main-menu-separator"></li>
							<!-- === top menu item === -->
							<li>
								<a href="/about-us">About us</a>
							</li> 
							<li class="main-menu-separator"></li>
							<!-- === top menu item === -->
							<li >
								<a class="latest" href="/contact">Contact Us</a>
							</li>
						</ul>
						@endguest
						@auth
						<ul class="nav navbar-nav">

							<!-- === top menu item === -->
							<li>
								<a href="/">Home</a>
							</li>
					<!-- 	<li class="active dropdown">
						<a data-toggle="dropdown" href="/">Home</a> -->
							<!-- <ul class="dropdown-menu" role="menu">
								<li class="active">
									<a href="/">Home 1</a>
								</li>
							</ul> -->
							<!-- </li> -->
							<li class="main-menu-separator"></li>
							<!-- === top menu item === -->
							<li>
								<a  href="/services">Services</a>
							</li>
					<!-- 	<li class="dropdown">
						<a data-toggle="dropdown" href="/service">Service</a> -->
							<!-- <ul class="dropdown-menu" role="menu">
								<li>
									<a href="/services3">Service 1</a>
								</li>
								<li>
									<a href="/services4">Service 2</a>
								</li>
								<li>
									<a href="/service-detail">Service Details</a>
								</li>
							</ul> -->
							<!-- </li> -->
							<li class="main-menu-separator"></li>
							<!-- === top menu item === -->
						<!-- <li class="dropdown">
							<a data-toggle="dropdown" href="#">Elements</a>
							<ul class="dropdown-menu" role="menu">
								<li>
									<a href="/typogrpaphy">Typography</a>
								</li>
								<li>
									<a href="/buttons">Buttons</a>
								</li>
								<li>
									<a href="/progress">Progress Bars</a>
								</li>
								<li>
									<a href="/alerts">Alerts</a>
								</li>
							</ul>
						</li>  -->
						<li class="main-menu-separator"></li>
						<!-- === top menu item === -->
						<li >
							<a href="/dashboard">DASHBOARD</a>

						</li>
					<!-- 	<li class="dropdown">
						<a data-toggle="dropdown" href="/login">LOGIN</a> -->
							<!-- <ul class="dropdown-menu" role="menu">
								<li>
									<a href="/blog">Blog items</a>
								</li>
								<li>
									<a href="/blog_2">Single Post</a>
								</li>
							</ul> -->
							<!-- </li>  -->
							<li class="main-menu-separator"></li>
							<!-- === top menu item === -->
							<li >
								<a href="/logout">LOGOUT</a>

							</li>
					<!-- 	<li class="dropdown">
						<a data-toggle="dropdown" href="/signup">SIGNUP</a> -->
							<!-- <ul class="dropdown-menu" role="menu">
								<li>
									<a href="/blog">Blog items</a>
								</li>
								<li>
									<a href="/blog_2">Single Post</a>
								</li>
							</ul> -->
							<!-- </li>  -->
							<li class="main-menu-separator"></li>
							<!-- === top menu item === -->
							<li>
								<a href="/about-us">About us</a>
							</li> 
							<li class="main-menu-separator"></li>
							<!-- === top menu item === -->
							<li >
								<a class="latest" href="/contact">Contact Us</a>
							</li>
						</ul>

						@endauth
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
						<h2>QUOTE</h2>
					</div>

					<!-- === PAGE HEADER BREADCRUMB === -->
					<div class="page-header-breadcrumb">
						<ol class="breadcrumb">
							<li><a href="/">Home</a></li>
							<li class="active">QUOTE</li>
						</ol>
					</div>

				</div>
			</div>
		</div>
	<!-- ===================================
		END PAGE HEADER
		======================================== -->

	<!-- =========================
		CONTACTS
		============================== -->
		<div class="def-section">
			<div class="container">
				<div class="row">

					@if (\Session::has('success'))
					<div class="alert alert-success">
						<ul>
							<li>{!! \Session::get('success') !!}</li>
						</ul>
					</div>
					@endif

					@error('name')
					<div class="alert alert-danger">
						<ul>

							<li>{{$message}}</li>
						</ul>
					</div>
					@enderror
					@error('phone')
					<div class="alert alert-danger">
						<ul>

							<li>{{$message}}</li>
						</ul>
					</div>
					@enderror
					@error('email')
					<div class="alert alert-danger">
						<ul>

							<li>{{$message}}</li>
						</ul>
					</div>
					@enderror
					@error('location')
					<div class="alert alert-danger">
						<ul>

							<li>{{$message}}</li>
						</ul>
					</div>
					@enderror
					@error('category')
					<div class="alert alert-danger">
						<ul>

							<li>{{$message}}</li>
						</ul>
					</div>
					@enderror

					@error('message')
					<div class="alert alert-danger">
						<ul>

							<li>{{$message}}</li>
						</ul>
					</div>
					@enderror

					<!-- === CONTACTS INFO === -->
					@include('transaero-transport-logistics-html-template/html/components/owner-contact')

					<!-- === CONTACTS FORM === -->
					@error('price')
								<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12" >
							<div class="alert alert-danger">
								<ul>

									<li>{{$message}}</li>
								</ul>
							</div>
						</div>
							@enderror
							
							@if(isset($order))
							@for($i = 0; $i < 1; $i++)
							<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12" id="comments">


								<h3>SHIPPING QUOTE ({{$i+1}})</h3>

								<div class="media">
									<!-- <a class="pull-left" href="#">
										<img class="media-object" src="assets/media/team/1.jpg" alt="" />
									</a> -->
									<div class="media-body">
										<div class="media-body-top">
											<div class="media-info">
												<h3 class="media-heading" style="font-size: 30px;">
													@if($order[$i]->category_id == 1)
													Clothing
													@endif
													@if($order[$i]->category_id == 2)
													Refrigerated goods
													@endif
													@if($order[$i]->category_id == 3)
													Dry goods
													@endif
													- <span class="media-date"style="font-size: 30px;">{{$order[$i]->created_at}}</span></h3>

												</div>
												<div class="media-reply">
													<a><div class="my-btn my-btn-default" style="font-size: 1em;">
														<div class="my-btn-bg-top"></div>
														<div class="my-btn-bg-bottom"></div>
														<div class="my-btn-text">
															@if($order[$i]->active == 1)
															Request
															@endif
															@if($order[$i]->active == 2)
															Pending
															@endif
															@if($order[$i]->active == 3)
															Accepted
															@endif
														</div>
													</div></a>
												</div>
											</div>

									<!-- 		<h4>{{$order[$i]->message}}<h4> -->

												<div style="margin-bottom: 2em;"></div>
												<div style="font-size:25px">
													<label>Location: </label>
													<span class="color-primary">{{$order[$i]->location}} </span>
												</div>
												<div style="font-size:25px">
													<label>Destination: </label>
													<span class="color-primary" style="font-size:25px">{{$order[$i]->destination}}</span>
												</div>

												<div style="margin-bottom: 2em;"></div>

												<div class="row">
													<div class="col-lg-3">
														<h3>Contact info</h3>
														<h4 class="color-primary">{{$order[$i]->name}}</h4>
														<h4 class="color-primary">{{$order[$i]->phone}}</h4>
														<h4 class="color-primary">{{$order[$i]->email}}</h3>
														</div>
														<div class="col-lg-2"></div>
														<div class="col-lg-6">
															<h3>Shipping quote price</h3>

															@if($order[$i]->active == 2)
															<form name="contact-form" method="POST" action="/quote/accepted">

																@csrf

																<input type="hidden" name="quote_id" value="{{$order[$i]->id}}">

																<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 contacts-form-item">
																	<input type="text" name="price" placeholder="${{$order[$i]->total_price}}" disabled />
																</div>

																<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contacts-form-item contacts-form-button">
																	<button type="submit"><span class="my-btn my-btn-default">
																		<span class="my-btn-bg-top"></span>
																		<span class="my-btn-bg-bottom"></span>
																		<span class="my-btn-text">
																			Accept shipping charge
																		</span>
																	</span></button>
																</div>
															</form>
															@endif
															
															@if($order[$i]->active == 3)
															<form name="contact-form" id="contact-form" method="POST" action="/quote/request">

																@csrf

																<input type="hidden" name="client_id" value="{{auth()->user()->id}}">

																<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 contacts-form-item">
																	<input type="text" name="price" placeholder="${{$order[$i]->total_price}}" disabled />
																</div>
															</form>
															@endif

														</div>

													</div>


												</div>
											</div>

										</div>
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
										@endfor
										@endif

										@if(count($quotes)==0)
										<div class="col-lg-1"></div>
										<div class="col-lg-6">
											<h2>There aren't any quotes.</h2>
										</div>
										@endif


				</div>
			</div>
		</div>

	<!-- =========================
		CONTACTS DETAILS
		============================== -->
		@include('transaero-transport-logistics-html-template/html/components/contact-details')
	<!-- =========================
		END CONTACTS DETAILS
		============================== -->


	<!-- =========================
		CONTACTS MAP
		============================== -->
		@include('transaero-transport-logistics-html-template/html/components/map')
	<!-- =========================
		END CONTACTS MAP
		============================== -->

	<!-- ===================================
		SUBSCRIBE SECTION
		======================================== -->
		<div class="def-section home-subscribe">
			<div class="container">
				<div class="row">

					<!-- === SUBSCRIBE TEXT === -->
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 home-subscribe-text animated wow fadeInUp" data-wow-duration=".5s" data-wow-offset="100">
						<span class="home-subscribe-icon"><i class="flaticon-email114"></i></span>
						SIGN UP FOR NEWSLETTER TO GET UPDATES AND NEWS
					</div>

					<!-- === SUBSCRIBE FORM === -->
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 home-subscribe-form animated wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s" data-wow-offset="100">
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
					</div>

				</div>
			</div>
		</div>
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