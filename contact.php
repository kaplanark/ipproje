<?php require("libs/data.php");?>
<!DOCTYPE html>
<html lang="tr">

<head>
	<title>İletişim</title>
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
	<link href="css/contact.css" rel='stylesheet' type='text/css' />
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
		<li class="breadcrumb-item active">İletişim</li>
	</ol>
	<section class="main-content-w3layouts-agileits">
		<!--İletişim kısmı mesajı-->
		<h3 class="tittle">Bize Ulaşın</h3>
		<p class="sub text-center">Önerilerinize açığız fikrinizi bizimle paylaşın</p>
		<div class="contact-map inner-sec">
			<iframe src="<?php getcontacts("titles","4");?>"
				class="map" style="border:0" allowfullscreen=""></iframe>
			</div>
			<div class="ad-inf-sec bg-light">
				<div class="container">
					<div class="address row">
						<div class="col-lg-4 address-grid">
							<div class="row address-info">
								<div class="col-md-4 address-left text-center">
									<i class="far fa-map"></i>
								</div>
								<div class="col-md-8 address-right text-left">
									<h6>Adres</h6>
									<p><?php getcontacts("titles","1");?>
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 address-grid">
							<div class="row address-info">
								<div class="col-md-4 address-left text-center">
									<i class="far fa-envelope"></i>
								</div>
								<div class="col-md-8 address-right text-left">
									<h6>Email</h6>
									<p>
										<a href="mailto:<?php getcontacts("titles","2");?>"><?php getcontacts("titles","2");?></a></p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 address-grid">
								<div class="row address-info">
									<div class="col-md-4 address-left text-center">
										<i class="fas fa-mobile-alt"></i>
									</div>
									<div class="col-md-8 address-right text-left">
										<h6>Telefon</h6>
										<p><?php getcontacts("titles","3");?></p>
									</div>
								</div>
							</div>
						</div>
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