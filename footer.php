<!--footer-->
<footer class="py-lg-5 py-3">
		<div class="container-fluid">
			<div class="inner-sec-w3ls-agileits py-lg-5 p-3">
				<!-- <div class="row">
					<div class="col-lg-3 footer-grid1-wthree-agileits text-left">
						<h3 class="mb-4">About Studio</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing
							and typesetting industry. </p>
						<a href="#" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-sm animated-button gibson-three mt-3">Read More</a>
					</div>
					<div class="col-lg-3 footer-grid1-wthree-agileits text-left">
						<h3 class="mb-4">Locate Us</h3>
						<ul class="footer-bottom-list">
							<li>
								<span class="fas fa-map-marker-alt"></span> 3481 Honey Street
								<span> 90990 Block, USA </span>
							</li>
							<li>
								<span class="fas fa-envelope"></span>
								<a href="mailto:name@example.com"> mail@example.com</a>
							</li>
							<li>
								<span class="fas fa-phone"></span> +143 367 436 2049 </li>
							<li>
								<span class="fas fa-fax"></span> +166 367 808 5055 </li>
							<li>
								<span class="fas fa-globe"></span>
								<a href="#"> www.websitename.com</a>
							</li>

						</ul>
					</div>
					<div class="col-lg-3 footer-grid text-left">
						<div class="tech-btm">
							<h3 class="mb-4">Latest Photos</h3>
							<div class="blog-grids row mb-3">
								<div class="col-md-4 pr-0 blog-grid-left">
									<a href="single.html">
										<img src="images/g1.jpg" class="img-fluid" alt="">
									</a>
								</div>
								<div class="col-md-8 blog-grid-right">

									<h5>
										<a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
									</h5>
									<div class="sub-meta">
										<span>
											<i class="far fa-clock"></i> 20 Apr, 2018</span>
									</div>
								</div>

							</div>

							<div class="blog-grids row mb-3">
								<div class="col-md-4 pr-0 blog-grid-left">
									<a href="single.html">
										<img src="images/g4.jpg" class="img-fluid" alt="">
									</a>
								</div>
								<div class="col-md-8 blog-grid-right">

									<h5>
										<a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
									</h5>
									<div class="sub-meta">
										<span>
											<i class="far fa-clock"></i> 23 Apr, 2018</span>
									</div>
								</div>

							</div>
						</div>
					</div> -->
					<!-- subscribe -->
					<!-- <div class="col-lg-3 subscribe-main-w3ls-agileits footer-grid text-left">
						<h3 class="mb-4">Newsletter</h3>
						<div class="subscribe-main-w3ls-agileits text-left">
							<div class="subscribe-form">
								<form action="#" method="post" class="subscribe_form">
									<input class="form-control" type="email" placeholder="Enter Your Email..." required="">
									<button type="submit" class="btn1 btn-primary submit">
										<i class="fas fa-paper-plane" aria-hidden="true"></i>
									</button>
								</form>
							</div>
						</div> -->
						<!-- //subscribe -->
						<!-- <div class="footer-social mt-4">
							<div class="copyrighttop">
								<h3 class="mb-4">Stay In Touch</h3>
								<ul class="social_list1 text-left">

									<li>
										<a href="#" class="facebook1 ">
											<i class="fab fa-facebook-f"></i>

										</a>
									</li>
									<li>
										<a href="#" class="twitter2 mx-2">
											<i class="fab fa-twitter"></i>

										</a>
									</li>
									<li>
										<a href="#" class="dribble3">
											<i class="fab fa-dribbble"></i>
										</a>
									</li>

								</ul>

							</div>
						</div>
					</div>
				</div> -->
				<!-- footer -->
				<div class="footer-cpy text-center pt-5 mt-5">
					<div class="copyrightbottom-w3ls-agile">
						<p>© 2021 Shoot. All Rights Reserved | Design by
							<a href="">Freelance Video Editing</a>
						</p>

					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- //footer -->
	
	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //js -->
	<!-- carousel -->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$('.owl-carousel').owlCarousel({
				loop: true,
				margin: 10,
				responsiveClass: true,
				responsive: {
					0: {
						items: 1,
						nav: true
					},
					600: {
						items: 2,
						nav: false
					},
					1024: {
						items: 2,
						nav: false
					},
					1080: {
						items: 3,
						nav: true,
						loop: false,
						margin: 20
					}
				}
			})
		})
	</script>
	<!-- //carousel -->
	<!-- flexSlider -->
	<script defer src="js/jquery.flexslider.js"></script>
	<script>
		// Can also be used with $(document).ready()
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide"
			});
		});
	</script>
	<!-- //flexSlider -->
	<!--/ start-smoth-scrolling -->
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
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	   </script>
	<!--// end-smoth-scrolling -->
	<!-- Gallery js file -->
	<script src="js/jquery.picEyes.js"></script>
	<script>
		$(function () {
			//picturesEyes($('.demo li'));
			$('.demo li').picEyes();
		});
	</script>
	<!-- //Gallery js file -->
	<!--pop-up-box-->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<script src="js/jquery.magnific-popup.js"></script>
	<!--//pop-up-box-->
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!--//search-bar-->

	
		<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	   
	<!-- //Custom-JavaScript-File-Links -->
	<script src="js/bootstrap.js"></script>

</body>

</html>
