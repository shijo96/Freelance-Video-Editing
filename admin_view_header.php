<?php include 'connection.php'; ?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<a href="admin_home.php">Home</a>
<a href="admin_manage_category.php">Category</a>
<a href="admin_manage_service.php">Service</a>
<a href="admin_view_editors.php">Editors</a>
<a href="admin_view_client.php">Client</a>
<a href="admin_view_request.php">Request</a>
<a href="admin_view_complaints.php">Complaints</a>
<a href="index.php">Logout</a> -->

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Freelance Video Editing</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Shoot a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Tajawal:200,300,400,500,700,800,900" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
</head>

<body>
	<!-- /banner -->
	<section class="banner-sec-w3layouts" id="home" style="min-height: 300px;background-image: url(images/bb.png);">
		<!-- header -->
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-light top-header">
				<div class="logo text-center">
					<h1 class="logo">
						<a class="navbar-brand" href="admin_home.php">
							<span class="sub"></span>Shoot</a>
					</h1>
				</div>
				<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="fas fa-bars"></i>
					</span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mx-auto">
						<li class="nav-item active">
							<a class="nav-link ml-lg-0" href="admin_home.php">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								Manage
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">

								<a class="dropdown-item text-center " href="admin_manage_category.php">Category</a>
								<a class="dropdown-item text-center " href="admin_manage_service.php">Service</a>
								
							</div>
						</li>

                        <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								View
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">

								<a class="dropdown-item text-center " href="admin_view_editors.php">Editors</a>
								<a class="dropdown-item text-center " href="admin_view_client.php">Client</a>
                                <a class="dropdown-item text-center " href="admin_view_request.php">Request</a>
								<a class="dropdown-item text-center " href="admin_view_complaints.php">Complaints</a>
								
							</div>
						</li>
                        <li class="nav-item">
							<a class="nav-link " href="index.php">Logout</a>
						</li>
						
                         
						<!-- <li class="nav-item">
							<a class="nav-link scroll" href="#contact">Contact</a>
						</li> -->
						<!-- <li class="search">
							<a class="play-icon popup-with-zoom-anim" href="#small-dialog">
								<i class="fas fa-search"></i>
							</a>
							<div id="small-dialog" class="mfp-hide">
								<div class="search-top">
									<div class="search-inn">
										<form action="#" method="post" class="disply-flex">
											<input class="form-control" type="search" name="search" value="Type something..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
											<button class="btn2">
												<i class="fas fa-search"></i>
											</button>
										</form>
									</div>
									<p>Shoot</p>
								</div>
							</div>
						</li> -->
					</ul>
				</div>
				<div class="phone-inline my-2 my-lg-0">

					<h6>
						<span class="fas fa-phone"></span> +91 9876 543 210</h6>
				</div>

			</nav>
		</header>
    </section>