<!doctype html>
<html lang="en">
	<head>
		<?php include 'includes/meta.php';?>
		<title>
			Paradime PK
		</title>
	</head>
	<body>
		<?php include 'includes/navigation.php';?>
		
		<section class="d-none d-block-md">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="http://via.placeholder.com/1920x500" alt="First slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="http://via.placeholder.com/1920x500" alt="Second slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="http://via.placeholder.com/1920x500" alt="Third slide">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</section>
		
		<section class="bg-secondary">
			<div class="container py-5 text-center">
				<h2 class="display-3 text-white">Ready to join the #1 RSPS?</h2>
				<a href="#" class="btn btn-lg btn-light">
					Play Now
				</a>
			</div>
		</section>
		
		<section class="bg-parallax">
			<div class="container py-5 text-white">
				<div class="row">
					<div class="col-8 bg-dark border rounded">
						<h2 class="m-3 text-center">Recent Updates & News</h2>
						<hr>
						<h3>Update Log: 2</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dapibus sapien id scelerisque cursus. Aliquam erat volutpat. Mauris nec porttitor ex. Ut sed tincidunt augue. Nulla quis ante congue, lacinia mauris at...
						<p class="text-right">
							<a href="#" class="btn btn-outline-light">Read More</a>
						</p>
						<hr>
						<h3>Update Log: 1</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dapibus sapien id scelerisque cursus. Aliquam erat volutpat. Mauris nec porttitor ex. Ut sed tincidunt augue. Nulla quis ante congue, lacinia mauris at...
						<p class="text-right">
							<a href="#" class="btn btn-outline-light">Read More</a>
						</p>
						<hr>
					</div>
					<div class="col-4">
						<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
					</div>
				</div>
			</div>
		</section>

		<?php include 'includes/footer.php';?>
	</body>
</html>