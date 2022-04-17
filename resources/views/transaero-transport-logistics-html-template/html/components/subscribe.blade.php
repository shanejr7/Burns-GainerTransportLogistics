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
				<form method="POST" action="/subscribe">
					@csrf
					<div class="home-subscribe-form-input">
						<input type="text" name="email" placeholder="YOUR E-MAIL" />
						@error('subscribe')
						<p class="alert" style="color: red;">{{$message}}</p>
						@enderror
					</div>
					<div class="home-subscribe-form-button">
						<button type="submit"><span class="my-btn my-btn-primary">
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