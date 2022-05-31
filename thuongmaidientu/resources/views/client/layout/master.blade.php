<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Elite Shoppy-@yield('title')</title>
<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elite Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//tags -->
<link href="assets/client/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="assets/client/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="assets/client/css/font-awesome.css" rel="stylesheet"> 

<link href="assets/client/css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
 <link rel="stylesheet"  href="assets/admin/css/toastr.css">
<!-- //for bootstrap working -->
<link href="assets/client/css/lato.css">
<link href="assets/client/css/opesan.css" rel='stylesheet' type='text/css'>
</head>
<body>

@include('client.layout.header-top')
<!-- //header -->
<!-- header-bot -->
@include('client.layout.header-botom')
<!-- //header-bot -->
<!-- banner -->
@include('client.layout.menu')
<!-- //banner-top -->
<!-- Modal1 -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Đăng Nhập <span>Ngay</span></h3>
									<form action="{{route('login')}}" method="post">
										@csrf
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="name" required="">
								<label>Tên</label>
								<span></span>
								@if($errors->has('name'))
								<div class="alert alert-danger">{{$errors->first('name')}}</div>
                                 @endif
							</div>
							<div class="styled-input">
								<input type="email" name="email" required=""> 
								<label>Email</label>
								<span></span>
								@if($errors->has('email'))
								<div class="alert alert-danger">{{$errors->first('email')}}</div>
                                 @endif
							</div> 
							<div class="styled-input agile-styled-input-top">
								<input type="password" name="password" required="">
								<label>Password</label>
								<span></span>
								@if($errors->has('password'))
								<div class="alert alert-danger">{{$errors->first('password')}}</div>
                                 @endif
							</div>
							<input type="submit" value="Đăng nhập">
						</form>
						  <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
														<div class="clearfix"></div>
														<p><a href="#" data-toggle="modal" data-target="#myModal2" > Không có tài khoản</a></p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="assets/client/images/log_pic.jpg" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
<!-- //Modal1 -->
<!-- Modal2 -->
		<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Đăng ký <span>Ngay</span></h3>
						 <form action="{{route('register')}}" method="post">
						 	@csrf
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="name" required="">
								<label>Họ và tên</label>
								<span></span>
								@if($errors->has('name'))
								<div class="alert alert-danger">{{$errors->first('name')}}</div>
                                 @endif
							</div>
							<div class="styled-input">
								<input type="email" name="email" required=""> 
								<label>Email</label>
								<span></span>
								@if($errors->has('email'))
								<div class="alert alert-danger">{{$errors->first('email')}}</div>
                                 @endif
							</div> 
							<div class="styled-input">
								<input type="password" name="password" required=""> 
								<label>Mật khẩu</label>
								<span></span>
								@if($errors->has('password'))
								<div class="alert alert-danger">{{$errors->first('password')}}</div>
                                 @endif
							</div> 
							<div class="styled-input">
								<input type="password" name="re_password" required=""> 
								<label>Xác nhận mật khẩu</label>
								<span></span>
								@if($errors->has('re_password'))
								<div class="alert alert-danger">{{$errors->first('re_password')}}</div>
                                 @endif
							</div> 
							<input type="submit" value="Đăng ký" >
						</form>
						  <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
														<div class="clearfix"></div>
														<p><a href="#">Bằng cách nhấp vào đăng ký,tôi đồng ý với các điểu khoản của bạn</a></p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="assets/client/images/log_pic.jpg" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
<!-- //Modal2 -->

<!-- banner -->
	
	<!-- //banner -->
  @yield('banner')
<!-- //schedule-bottom -->
  <!-- banner-bootom-w3-agileits -->
	@yield('slide')
<!--/grids-->
     						
<!--/grids-->
@yield('content')
<!--/grids-->
<div class="coupons">
		<div class="coupons-grids text-center">
			<div class="w3layouts_mail_grid">
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-truck" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>FREE SHIPPING</h3>
						<p>Lorem ipsum dolor sit amet, consectetur</p>
					</div>
				</div>
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-headphones" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>24/7 SUPPORT</h3>
						<p>Lorem ipsum dolor sit amet, consectetur</p>
					</div>
				</div>
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-shopping-bag" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>MONEY BACK GUARANTEE</h3>
						<p>Lorem ipsum dolor sit amet, consectetur</p>
					</div>
				</div>
					<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-gift" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>FREE GIFT COUPONS</h3>
						<p>Lorem ipsum dolor sit amet, consectetur</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>

		</div>
</div>
<!--grids-->
<!-- footer -->
<div class="footer">
	<div class="footer_agile_inner_info_w3l">
		<div class="col-md-3 footer-left">
			<h2><a href="index.html"><span>E</span>lite Shoppy </a></h2>
			<p>Lorem ipsum quia dolor
			sit amet, consectetur, adipisci velit, sed quia non 
			numquam eius modi tempora.</p>
			<ul class="social-nav model-3d-0 footer-social w3_agile_social two">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
		</div>
		<div class="col-md-9 footer-right">
			<div class="sign-grds">
				<div class="col-md-4 sign-gd">
					<h4>Our <span>Information</span> </h4>
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="mens.html">Men's Wear</a></li>
						<li><a href="womens.html">Women's wear</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="typography.html">Short Codes</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</div>
				
				<div class="col-md-5 sign-gd-two">
					<h4>Store <span>Information</span></h4>
					<div class="w3-address">
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Phone Number</h6>
								<p>+1 234 567 8901</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Email Address</h6>
								<p>Email :<a href="mailto:example@email.com"> mail@example.com</a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Location</h6>
								<p>Broome St, NY 10002,California, USA. 
								
								</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-3 sign-gd flickr-post">
					<h4>Flickr <span>Posts</span></h4>
					<ul>
						<li><a href="single.html"><img src="assets/client/images/t1.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="assets/client/images/t2.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="assets/client/images/t3.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="assets/client/images/t4.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="assets/client/images/t1.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="assets/client/images/t2.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="assets/client/images/t3.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="assets/client/images/t2.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="assets/client/images/t4.jpg" alt=" " class="img-responsive" /></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
			<div class="agile_newsletter_footer">
					<div class="col-sm-6 newsleft">
				<h3>SIGN UP FOR NEWSLETTER !</h3>
			</div>
			<div class="col-sm-6 newsright">
				<form action="#" method="post">
					<input type="email" placeholder="Enter your email..." name="email" required="">
					<input type="submit" value="Submit">
				</form>
			</div>

		<div class="clearfix"></div>
	</div>
		<p class="copy-right">&copy 2017 Elite shoppy. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
	</div>
</div>
<!-- //footer -->

<!-- login -->
			<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-bottom">
										<h3>Sign up for free</h3>
										<form>
											<div class="sign-up">
												<h4>Email :</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-up">
												<h4>Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											<div class="sign-up">
												<h4>Re-type Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											<div class="sign-up">
												<input type="submit" value="REGISTER NOW" >
											</div>
											
										</form>
									</div>
									<div class="login-right">
										<h3>Sign in with your account</h3>
										<form>
											<div class="sign-in">
												<h4>Email :</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-in">
												<h4>Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												<a href="#">Forgot password?</a>
											</div>
											<div class="single-bottom">
												<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>Remember Me.</label>
											</div>
											<div class="sign-in">
												<input type="submit" value="SIGNIN" >
											</div>
										</form>
									</div>
									<div class="clearfix"></div>
								</div>
								<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //login -->
<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<!-- js -->
<script type="text/javascript" src="assets/client/js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<script src="assets/client/js/modernizr.custom.js"></script>
	<!-- Custom-JavaScript-File-Links --> 
	<!-- cart-js -->
	<script src="assets/client/js/minicart.min.js"></script>


	<!-- //cart-js --> 
<!-- script for responsive tabs -->						
<script src="assets/client/js/easy-responsive-tabs.js"></script>

<!-- //script for responsive tabs -->		
<!-- stats -->
	<script src="assets/client/js/jquery.waypoints.min.js"></script>
	<script src="assets/client/js/jquery.countup.js"></script>
	
<!-- //stats -->
<!-- start-smoth-scrolling -->
<script src="assets/client/js/custom.js" type="text/javascript" charset="utf-8" async defer></script>
<script type="text/javascript" src="assets/client/js/move-top.js"></script>
<script type="text/javascript" src="assets/client/js/jquery.easing.min.js"></script>
<script src="assets/client/js/ajax.js" type="text/javascript" charset="utf-8" async defer></script>
 <script src="assets/client/js/toastr.min.js" type="text/javascript" charset="utf-8" async defer></script>
<!-- here stars scrolling icon -->
	
<!-- //here ends scrolling icon -->


<!-- for bootstrap working -->
<script type="text/javascript" src="assets/client/js/bootstrap.js"></script>
@if(session('thongbao'))
	<script type="text/javascript">
		messageSuccess('{{ session('thongbao') }}');
	</script>
@endif

@if(session('error'))
	<script type="text/javascript">
		messageError('{{ session('error') }}');
	</script>
@endif
@if(isset($user) && count($user->customers)==0)
<script>
	$('#address').modal('show');
</script>
@endif
</body>
</html>
