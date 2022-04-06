	<aside id="slide-menu" class="slide-menu">
		
		<!-- === CLOSE MENU BUTON === -->	
		<div class="close-menu" id="close-menu">
			<i class="fa fa-close"></i>
		</div>
		

		@guest
		<!-- === SLIDE MENU === -->	
		<ul id="left-menu" class="left-menu">
			
			<!-- === SLIDE MENU ITEM === -->	
			<li> 

				<a href="/">Home</a>
				<!-- <a href="/">Home <i class="fa fa-plus arrow"></i></a> -->
				
				<!-- === slide menu child === -->	
				<!-- <ul class="slide-menu-child">
					<li><a href="index.html">Home 1</a></li>
					<li><a href="02_home.html">Home 2</a></li>
				</ul> -->
			</li>
			
			<!-- === SLIDE MENU ITEM === -->	
			<li> 

				<a href="/services">Services</a>

				<!-- <a href="/services">Service <i class="fa fa-plus arrow"></i></a> -->
				
				<!-- === slide menu child === -->	
				<!-- <ul class="slide-menu-child">
					<li><a href="03_services.html">Service 1</a></li>
					<li><a href="04_services.html">Service 2</a></li>
					<li><a href="05_service_detail.html">Service Details</a></li>
				</ul> -->
			</li>
			
			<!-- === SLIDE MENU ITEM === -->
			<li> 
				<a href="/login">Login</a>
			</li>
			<li> 
				<a href="/signup">Signup</a>
			</li>	
			<li> 
				<a href="/about-us">About us</a>
			</li>
			
			<!-- === SLIDE MENU ITEM === -->	
		<!-- 	<li> 
				<a href="#">Elements <i class="fa fa-plus arrow"></i></a> -->
				
				<!-- === slide menu child === -->	
			<!-- 	<ul class="slide-menu-child">
					<li><a href="07_typography.html">Typography</a></li>
					<li><a href="08_buttons.html">Buttons</a></li>
					<li><a href="09_progress.html">Progress Bars</a></li>
					<li><a href="10_alerts.html">Alerts</a></li>
				</ul>
			</li> -->
			
			<!-- === SLIDE MENU ITEM === -->	
	<!-- 		<li>
				<a href="#">Blog <i class="fa fa-plus arrow"></i></a> -->
				
				<!-- === slide menu child === -->	
			<!-- 	<ul class="slide-menu-child">
					<li><a href="11_blog.html">Blog items</a></li>
					<li><a href="12_blog_detail.html">Single Post</a></li>
				</ul>
			</li> -->
			
			<!-- === SLIDE MENU ITEM === -->	
			<li>
				<a href="/contact">Contact us</a>
			</li>
			
		</ul>
		@endguest

		@auth
			<!-- === SLIDE MENU === -->	
		<ul id="left-menu" class="left-menu">
			
			<!-- === SLIDE MENU ITEM === -->	
			<li> 

				<a href="/">Home</a>
				<!-- <a href="/">Home <i class="fa fa-plus arrow"></i></a> -->
				
				<!-- === slide menu child === -->	
				<!-- <ul class="slide-menu-child">
					<li><a href="index.html">Home 1</a></li>
					<li><a href="02_home.html">Home 2</a></li>
				</ul> -->
			</li>
			
			<!-- === SLIDE MENU ITEM === -->	
			<li> 

				<a href="/services">Services</a>

				<!-- <a href="/services">Service <i class="fa fa-plus arrow"></i></a> -->
				
				<!-- === slide menu child === -->	
				<!-- <ul class="slide-menu-child">
					<li><a href="03_services.html">Service 1</a></li>
					<li><a href="04_services.html">Service 2</a></li>
					<li><a href="05_service_detail.html">Service Details</a></li>
				</ul> -->
			</li>
			
			<!-- === SLIDE MENU ITEM === -->
			<li> 
				<a href="/logout">LOGOUT</a>
			</li>	
			<li> 
				<a href="/about-us">About us</a>
			</li>
			
			<!-- === SLIDE MENU ITEM === -->	
		<!-- 	<li> 
				<a href="#">Elements <i class="fa fa-plus arrow"></i></a> -->
				
				<!-- === slide menu child === -->	
			<!-- 	<ul class="slide-menu-child">
					<li><a href="07_typography.html">Typography</a></li>
					<li><a href="08_buttons.html">Buttons</a></li>
					<li><a href="09_progress.html">Progress Bars</a></li>
					<li><a href="10_alerts.html">Alerts</a></li>
				</ul>
			</li> -->
			
			<!-- === SLIDE MENU ITEM === -->	
	<!-- 		<li>
				<a href="#">Blog <i class="fa fa-plus arrow"></i></a> -->
				
				<!-- === slide menu child === -->	
			<!-- 	<ul class="slide-menu-child">
					<li><a href="11_blog.html">Blog items</a></li>
					<li><a href="12_blog_detail.html">Single Post</a></li>
				</ul>
			</li> -->
			
			<!-- === SLIDE MENU ITEM === -->	
			<li>
				<a href="/contact">Contact us</a>
			</li>
			
		</ul>
		@endauth
		
	</aside>