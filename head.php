<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content=""/>
	<meta name="keywords" content=""/>
	<meta name="author" content=""/>
	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content=""/>
	<meta name="twitter:image" content=""/>
	<meta name="twitter:url" content=""/>
	<meta name="twitter:card" content=""/>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>
	<div class="gtco-loader"></div>
	<div id="page">
		<div class="page-inner">
			<nav class="gtco-nav" role="navigation">
				<div class="gtco-container">
					<div class="row">
						<div class="col-sm-4 col-xs-12">
							<div id="gtco-logo"><a href="index.php" id="logo">邹胖子</a>
							</div>
						</div>
						<div class="col-xs-8 text-right menu-1">
							<ul>
								<li><a href="features.php" id="features">邹胖子</a>
								</li>
								<li><a href="tour.php" id="tour">邹胖子</a>
								</li>
								<li class="has-dropdown"> <a href="#">307宿舍</a>
									<ul class="dropdown">
										<li><a href="#" onClick="change('邹胖子')">邹胖子</a>
										</li>
										<li><a href="javascript:void(0);" onClick="document.getElementById('contact').innerHTML = '鸽子王'">鸽子王</a>
										</li>
										<li><a href="#" onClick="change('小石头')">小石头</a>
										</li>
										<li><a href="#" onClick="change('OJJ')">OJJ</a>
										</li>
									</ul>
								</li>
								<li><a href="pricing.php" id="price">邹胖子</a>
								</li>
								<li><a href="contact.php" id="contact">邹胖子</a>
								</li>
								<li class="has-dropdown">
									<a href="#">
										<?php
										session_start();
										if ( isset( $_SESSION[ "loged" ] ) ) {
											echo "欢迎 " . $_SESSION[ "username" ] . "!<br>";
											echo "<script>document.getElementById('gtco-header').style.display='none';alert('已經登錄');</script>";
										} else
											echo "<a href='index.php'>遊客，請登錄！</a><br>";
										?>
									</a>
									<?php
									if ( isset( $_SESSION[ "loged" ] ) ){
										echo("<ul class='dropdown'>
											<li><a href='xiaopang.php'>個人資料</a>
											</li>
											<li><a href='index.php'>退出</a>
											</li>
										</ul>");
									}
									?>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</nav>