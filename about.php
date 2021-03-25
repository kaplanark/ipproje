<?php require("libs/data.php");?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<title><?php getwebname("titles"); echo"|"; gettagline("titles");?>| Yardım</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link id="browser_favicon" rel="shortcut icon" href="blogadmin/images/<?php geticon("titles"); ?>">
	<meta charset="utf-8" name="description" content="<?php getshortdescription("titles");?>">
	<meta name="keywords" content="<?php getkeywords("titles");?>" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/single.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	rel="stylesheet">
</head>

<body>
	<?php include("header.php");?>
	<div class="banner-inner">
	</div>
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="index.php">Anasayfa</a>
		</li>
		<li class="breadcrumb-item active">Yardım</li>
	</ol>
	<section class="main-content-w3layouts-agileits">
		<div class="container">
			<h3 class="tittle">Yardım</h3>
			<div class="row inner-sec">
				<div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
					<div class="blog-grid-top">

						<div class="blog_info_left_grid">
							<a href="single.html">
								<img src="images/b5.jpg" class="img-fluid" alt="">
							</a>
						</div>
						<h3>
							<?php getwebname("titles"); echo"|"; gettagline("titles");?>
						</h3>
						<p><?php getdetaileddescription("titles");?></p>
					</div>
				</div>
				<aside class="col-lg-4 agileits-w3ls-right-blog-con text-right">
					<div class="right-blog-info text-left">
						<h4><strong>Kategoriler</strong></h4>
						<ul class="list-group single">
							<?php countcategories();?>
						</ul>
						<div class="tech-btm widget_social">
							<h4>Bağlı Kalın</h4>
							<ul>

								<li>
									<a class="twitter" href="<?php getlinks("links","twitter");?>">
										<i class="fab fa-twitter"></i>
										<span class="count"></span> Twitter</a>
									</li>
									<li>
										<a class="facebook" href="<?php getlinks("links","facebook");?>">
											<i class="fab fa-facebook-f"></i>
											<span class="count"></span> Facebook</a>
										</li>
										<li>
											<a class="dribble" href="<?php getlinks("links","dribble");?>">
												<i class="fab fa-dribbble"></i>

												<span class="count"></span> Dribble</a>
											</li>
											<li>
												<a class="pin" href="<?php getlinks("links","pinterest");?>">
													<i class="fab fa-pinterest"></i>
													<span class="count"></span> Pinterest</a>
												</li>

											</ul>
										</div>
										<div class="tech-btm">
											<h4>Eski Gönderiler</h4>
											<!--data-->
										</div>
									</div>
								</aside>
							</div>
						</div>
					</section>
					<?php include("footer.php");?>
					<script src="js/jquery-2.2.3.min.js"></script>
					<script src="js/move-top.js"></script>
					<script src="js/easing.js"></script>
					<script>
						jQuery(document).ready(function ($) {
							$(".scroll").click(function (event) {
								event.preventDefault();
								$('html,body').animate({
									scrollTop: $(this.hash).offset().top
								}, 900);
							});
						});
					</script>
					<script>
						$(document).ready(function () {
							 		$().UItoTop({
							 			easingType: 'easeOutQuart'
							 		});
							 	});
							 </script>
							 <a href="#home" class="scroll" id="toTop" style="display: block;">
							 	<span id="toTopHover" style="opacity: 1;"> </span>
							 </a>
							 <script src="js/bootstrap.js"></script>
							</body>

							</html>