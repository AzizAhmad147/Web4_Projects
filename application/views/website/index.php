<!DOCTYPE html>
<html lang="en" dir="">
<head>
	<title>سیست مدیریت فروشگاه</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/images/icons/favicon.png')?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/themify/themify-icons.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/elegant-font/html-css/style.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/animate/animate.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/css-hamburgers/hamburgers.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/animsition/css/animsition.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/select2/select2.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/daterangepicker/daterangepicker.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/slick/slick.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/lightbox2/css/lightbox.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/util.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css')?>">
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
	<header class="header1" style="direction: rtl;">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
				<div class="topbar-social">
					<a href="#" class="topbar-social-item fa fa-facebook"></a>
					<a href="#" class="topbar-social-item fa fa-instagram"></a>
					<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
					<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
					<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
				</div>

				<span class="topbar-child1">
					سیستم مدریتی فروشگاه انلاین
				</span>

				<div class="topbar-child2">
					<span class="topbar-email">
						HeratForoshgah.af
					</span>

					<div class="topbar-language rs1-select2">
						<select class="selection-1" name="time">
							<option>دالر</option>
							<option>افغانی</option>
						</select>
					</div>
				</div>
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="index.html" class="logo">
					<img src="<?php echo base_url('assets/images/icons/logo.png')?>" alt="IMG-LOGO">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="?page=hm">خانه</a>
								
							</li>

							<li>
								<a href="?page=shop">فروشگاه</a>
							</li>

							<li class="sale-noti">
								<a href="?page=shop">فروش</a>
							</li>

							<li>
								<a href="?page=card">سهولت ها</a>
							</li>

							<li>
								<a href="?page=blog">وبلاگ</a>
							</li>

							<li>
								<a href="?page=about">درباره ما</a>
							</li>

							<li>
								<a href="?page=contact">تماس با ما</a>
							</li>
						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				<div class="header-icons">
					<a href="#" class="header-wrapicon1 dis-block">
						<img src="<?php echo base_url('assets/images/icons/icon-header-01.png')?>" class="header-icon1')?>" alt="ICON">
					</a>

					<span class="linedivide1"></span>

					<div class="header-wrapicon2">
						<img src="<?php echo base_url('images/icons/icon-header-02.png')?>" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="<?php echo base_url('assets/images/item-cart-01.jpg')?>" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											پیراهن سفید جدید و مدرن
										</a>

										<span class="header-cart-item-info">
											1 x $19.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="<?php echo base_url('assets/images/item-cart-02.jpg')?>" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											چادر سیایی کرباسی
										</a>

										<span class="header-cart-item-info">
											1 x $39.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="<?php echo base_url('assets/images/item-cart-03.jpg')?>" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Nixon Porter Leather Watch In Tan
										</a>

										<span class="header-cart-item-info">
											1 x $17.00
										</span>
									</div>
								</li>
							</ul>

							<div class="header-cart-total">
								مجموع: $75.00
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										دیدن کارت
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										چک کردن
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="index.html" class="logo-mobile">
				<img src="<?php echo base_url('assets/images/icons/logo.png')?>" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<a href="#" class="header-wrapicon1 dis-block">
						<img src="<?php echo base_url('assets/images/icons/icon-header-01.png')?>" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide2"></span>

					<div class="header-wrapicon2">
						<img src="<?php echo base_url('assets/images/icons/icon-header-02.png')?>" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="<?php echo base_url('assets/images/item-cart-01.jpg')?>" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											White Shirt With Pleat Detail Back
										</a>

										<span class="header-cart-item-info">
											1 x $19.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="<?php echo base_url('assets/images/item-cart-02.jpg')?>" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Converse All Star Hi Black Canvas
										</a>

										<span class="header-cart-item-info">
											1 x $39.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="<?php echo base_url('assets/images/item-cart-03.jpg')?>" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Nixon Porter Leather Watch In Tan
										</a>

										<span class="header-cart-item-info">
											1 x $17.00
										</span>
									</div>
								</li>
							</ul>

							<div class="header-cart-total">
								Total: $75.00
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
							Free shipping for standard order over $100
						</span>
					</li>

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">
							<span class="topbar-email">
								HeraatFroshgah.af
							</span>

							<div class="topbar-language rs1-select2">
								<select class="selection-1" name="time">
									<option>دالر</option>
									<option>افغانی</option>
								</select>
							</div>
						</div>
					</li>

					<li class="item-topbar-mobile p-l-10">
						<div class="topbar-social-mobile">
							<a href="#" class="topbar-social-item fa fa-facebook"></a>
							<a href="#" class="topbar-social-item fa fa-instagram"></a>
							<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
							<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
							<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
						</div>
					</li>

					<li class="item-menu-mobile">
						<a href="?page=hm">خانه</a>
						
						
					</li>

					<li class="item-menu-mobile">
						<a href="?page=shop">فروشگاه</a>
					</li>
					<li class="item-menu-mobile">
						<a href="?page=shop">خرید</a>
					</li>

					<li class="item-menu-mobile">
						<a href="?page=cart">سهولت ها</a>
					</li>

					<li class="item-menu-mobile">
						<a href="?page=blog">وبلاگ</a>
					</li>

					<li class="item-menu-mobile">
						<a href="?page=about">درباره ما</a>
					</li>

					<li class="item-menu-mobile">
						<a href="?page=contact">تماس باما</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>

	 <?php
        error_reporting(0);

        switch ($_REQUEST['page']){
            case 'hm': include("home.php");
                break;
            case 'about': include("about.php");
                break;
            case 'shop': include("shop.php");
                break;
            case  'contact': include("contact.php");
                break;
            case  'card': include("cart.php");
                break;
            case  'blog': include("blog.php");
                break;
            case  'website': include("Web_Design.php");
                break;
            case  'grafic': include("Grafic_Design.php");
                break;
            case  'host': include("Web_hosting.php");
                break;
            case  'isp': include("Isp.php");
                break;
            case  'network': include("Network_Implementation.php");
                break;
            default;
                include ("home.php");

        }

        ?>

	<!-- Footer -->
	<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45" style="direction: rtl;">
		<div class="flex-w p-b-90">
			<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					در یک لحظه بگیرید؟
				</h4>

				<div>
					<p class="s-text7 w-size27">
						کدام سوالی? این فعلا جهت نکایش در اینجا استفاده شده است
					</p>

					<div class="flex-m p-t-30">
						<a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
					</div>
				</div>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					کتگوری ها
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
						مردانه
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							زنانه
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							لباس ها
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							ساعت ها
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					لینک ها
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							جستجو
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							درباره ما
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							تماس اب ما
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							ریترن
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					کمک
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							فروشات
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							ریترن
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							بارگیری
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							FAQs
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					خبر ها
				</h4>

				<form>
					<div class="effect1 w-size9">
						<input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
						<span class="effect1-line"></span>
					</div>

					<div class="w-size2 p-t-20">
						<!-- Button -->
						<button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
							ثبت نام
						</button>
					</div>

				</form>
			</div>
		</div>

		<div class="t-center p-l-15 p-r-15">
			<a href="#">
				<img class="h-size2" src="<?php echo base_url('assets/images/icons/paypal.png')?>" alt="IMG-PAYPAL">
			</a>

			<a href="#">
				<img class="h-size2" src="<?php echo base_url('assets/images/icons/visa.png')?>" alt="IMG-VISA">
			</a>

			<a href="#">
				<img class="h-size2" src="<?php echo base_url('assets/images/icons/mastercard.png')?>" alt="IMG-MASTERCARD">
			</a>

			<a href="#">
				<img class="h-size2" src="<?php echo base_url('assets/images/icons/express.png')?>" alt="IMG-EXPRESS">
			</a>

			<a href="#">
				<img class="h-size2" src="<?php echo base_url('assets/images/icons/discover.png')?>" alt="IMG-DISCOVER">
			</a>

			<div class="t-center s-text8 p-t-20">
				کپی رایت © 2018 تمت حقوق آن محفوظ است. | ساخته شده <i class="fa fa-heart-o" aria-hidden="true"></i> توسط<a href="https://colorlib.com" target="_blank">گروه دیتابس سمستر هشتم</a>
			</div>
		</div>
	</footer>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>



<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url('assets/vendor/jquery/jquery-3.2.1.min.js')?>"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url('assets/vendor/animsition/js/animsition.min.js')?>"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url('assets/vendor/bootstrap/js/popper.js')?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js')?>"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url('assets/vendor/select2/select2.min.js')?>"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url('assets/vendor/slick/slick.min.js')?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/slick-custom.js')?>"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url('assets/vendor/countdowntime/countdowntime.js')?>"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url('assets/vendor/lightbox2/js/lightbox.min.js')?>"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url('assets/vendor/sweetalert/sweetalert.min.js')?>"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>

<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/js/main.js')?>"></script>

</body>
</html>
