<?php require("libs/data.php");?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<title>Blog Sitesi</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/jquery.desoslide.css">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	rel="stylesheet">
</head>
<body>
	<?php include("header.php");?>
	<?php include("banner.php");?>
	<section class="bottom-slider">
		<div class="course_demo1">
			<ul id="flexiselDemo1">
				<!--data-->
			</ul>
		</div>
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="embed-responsive embed-responsive-21by9">
							<iframe allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" frameborder="0" height="315" src="https://www.youtube.com" width="560"></iframe>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<section class="main-content-w3layouts-agileits">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">>
					<div class="blog-girds-sec">
						<div class="row">
							<!--data-->
						</div>
					</div>
				</div>
				<aside class="col-lg-4 agileits-w3ls-right-blog-con text-right">
					<div class="right-blog-info text-left">
						<h4><strong>Kategoriler</strong></h4>
						<ul class="list-group single">
							<!--data-->
						</ul>
						<div class="tech-btm widget_social">
							<h4>Bağlı kalın</h4>
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
					<section class="middle-sec-agileinfo-w3ls">
						<div class="container">
							<div class="row inner-sec">
								<div class="col-md-4 news-left">
									<ul id="demo1_thumbs" class="list-inline">
										<!--data-->
									</ul>
								</div>
								<div id="demo1_main_image" class="col-md-8  news-right"></div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</section>
					<section class="main-content-w3layouts-agileits">
						<div class="container">
							<div class="row">
								<div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
									<!--data-->
								</div>
								<aside class="col-lg-4 agileits-w3ls-right-blog-con text-left">
									<div class="tech-btm">
										<h4>Editörün Seçimi</h4>										
										<!--data-->
									</div>	
								</aside> 
							</div>
						</div>
					</section>
					<?php include("footer.php");?>
					<script src="js/jquery-2.2.3.min.js"></script>
					<script src="js/jquery.desoslide.js"></script>
					<script src="js/jquery.flexisel.js"></script>
					<script src="js/move-top.js"></script>
					<script src="js/easing.js"></script>
							<a href="#home" class="scroll" id="toTop" style="display: block;">
								<span id="toTopHover" style="opacity: 1;"> </span>
							</a>
							<script src="js/bootstrap.js"></script>
						</body>

						</html>