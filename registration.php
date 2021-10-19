
<?php include 'public_header.php'; 

if(isset($_POST['editor_reg'])){
    extract($_POST);

    $q="SELECT * FROM `login` WHERE `username`='$uname'";
    $res=select($q);
    if(sizeof($res)>0){
        alert("Username Already Exist Please Choose Another One...!!");
    }
    else{
        $q1="INSERT INTO `login` VALUES(NULL,'$uname','$passw','Pending')";
        $ids=insert($q1);
        $q2="INSERT INTO `editor` VALUES(NULL,'$ids','$fname','$lname','$place','$phone','$email')";
        insert($q2);
        alert("Registration Successfully Completed..");
        return redirect("login.php");
    }

}

if(isset($_POST['user_reg'])){
    extract($_POST);

    $q="SELECT * FROM `login` WHERE `username`='$uname'";
    $res=select($q);
    if(sizeof($res)>0){
        alert("Username Already Exist Please Choose Another One...!!");
    }
    else{
        $q1="INSERT INTO `login` VALUES(NULL,'$uname','$passw','client')";
        $ids=insert($q1);
        $q2="INSERT INTO `client` VALUES(NULL,'$ids','$fname','$lname','$place','$phone','$email')";
        insert($q2);
        alert("Registration Successfully Completed..");
        return redirect("login.php");
    }

}
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script>
$(document).ready(function(){
    $("#bteditor").click(function(){
        $("#editor").show();
        $("#user").hide();
        $("#img").hide();
    });

    $("#btuser").click(function(){
        $("#user").show();
        $("#editor").hide();
        $("#img").hide();
    });

   
});
</script>



	<!-- //header -->
    <section class="slider">
			<div class="flexslider">
				<ul class="slides">
					<li>
						<div class="banner-info">


 <div>
    <button id="bteditor" class="btn btn-primary">Editor Registration</button>&nbsp;&nbsp;&nbsp;
    <button id="btuser"  class="btn btn-primary">User Registration</button>
</div> 
<br><br>

 <div style = "display: none;" id="editor">
 <form method="post">
    
        <h1 style="color: #fff;">Editor Registration</h1>
        <table class="table" style="width: 500px; color: #fff;">
            <tr>
                <th>First Name</th>
                <td><input type="text" class="form-control" required name="fname" id=""></td>
            </tr>
            <tr>
                <th>Last Name</th>
                <td><input type="text" class="form-control" required name="lname" id=""></td>
            </tr>
            <tr>
                <th>Place</th>
                <td><input type="text" class="form-control" required name="place" id=""></td>
            </tr>
            <tr>
                <th>Phone</th>
                <td><input type="text" class="form-control" required pattern="[0-9]{10}" name="phone" id=""></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><input type="email" class="form-control" required name="email" id=""></td>
            </tr>
            <tr>
                <th>Username</th>
                <td><input type="text" class="form-control" required name="uname" id=""></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><input type="password" class="form-control" required name="passw" id=""></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="editor_reg" class="btn btn-success" value="Register" id=""></td>
            </tr>
        </table> 

    </form>
</div> 

<div style = "display: none;" id="user">
    <form method="POST">
        <h1 style="color: #fff;">User Registration</h1>
        <table class="table" style="width: 500px; color: #fff;">
            <tr>
                <th>First Name</th>
                <td><input type="text" class="form-control" required name="fname" id=""></td>
            </tr>
            <tr>
                <th>Last Name</th>
                <td><input type="text" class="form-control" required name="lname" id=""></td>
            </tr>
            <tr>
                <th>Place</th>
                <td><input type="text" class="form-control" required name="place" id=""></td>
            </tr>
            <tr>
                <th>Phone</th>
                <td><input type="text" class="form-control" required pattern="[0-9]{10}" name="phone" id=""></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><input type="email" class="form-control" required name="email" id=""></td>
            </tr>
            <tr>
                <th>Username</th>
                <td><input type="text" class="form-control" required name="uname" id=""></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><input type="password" class="form-control" required name="passw" id=""></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" class="btn btn-success" name="user_reg" value="Register" id=""></td>
            </tr>
        </table> 

    </form>
</div>  

			</div>
					</li>
					
				</ul>
			</div>
		</section>
	</section>
	<!--//banner -->

    
    <section class="about py-lg-5 py-3" id="about">
		<div class="container">
			<div class="inner-sec-w3ls-agileits py-lg-5 py-3">
				<div class="header-info about-in mt-5 pb-5 text-center">
					<h3 class="heading">About our studio</h3>
					<p class="para mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing
						and typesetting industry. et sed libero. empor mauris tincidunt Nunc Nam vel feugiat, Lorem Ipsum is simply dummy text
						of the printing and typesetting industry</p>
					<a href="#" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-sm animated-button gibson-three mt-4">Read More</a>
				</div>
			</div>
		</div>
	</section>
	<!--/Modal -->
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header text-center">
					<h5 class="modal-title text-center" id="exampleModalLongTitle">Title Here</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<img src="images/g1.jpg" class="img-fluid" alt="">
					<h4>Sub title here</h4>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore magna
						aliqua uta enim ad minim ven iam quis nostrud exercitation ullamco.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	<!--//Model-->
	<!-- services -->
	<section class="services py-lg-5 py-3" id="services">
		<div class="container-fluid">
			<div class="inner-sec-w3ls-agileits p-lg-5 p-3">
				<div class="row">
					<div class="col-lg-3 header-info two mt-5">
						<h3 class="heading">Our Services</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Nunc Nam vel feugiat</p>

					</div>
					<div class="col-lg-9 ser-cont-right">
						<div class="row service_grids">
							<div class="col-md-4 ser_grid1">
								<i class="fas fa-camera"></i>
								<h3>Photo Camera</h3>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. et sed libero. empor mauris tincidunt</p>
								<a href="#" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-sm animated-button gibson-three mt-3">Read More</a>
							</div>
							<div class="col-md-4 ser_grid1 second">
								<i class="fas fa-camera-retro"></i>
								<h3>Movie Clapper</h3>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. et sed libero. empor mauris tincidunt</p>
								<a href="#" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-sm animated-button gibson-three mt-3">Read More</a>
							</div>
							<div class="col-md-4 ser_grid1">
								<i class="far fa-images"></i>
								<h3>Images Interface</h3>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. et sed libero. empor mauris tincidunt</p>
								<a href="#" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-sm animated-button gibson-three mt-3">Read More</a>
							</div>
							<div class="col-md-4 ser_grid1  mt-5">
								<i class="fas fa-film"></i>
								<h3>Film Roll</h3>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. et sed libero. empor mauris tincidunt</p>
								<a href="#" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-sm animated-button gibson-three mt-3">Read More</a>
							</div>
							<div class="col-md-4 ser_grid1 mt-5">
								<i class="far fa-images"></i>
								<h3>Camera Diaphragm</h3>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. et sed libero. empor mauris tincidunt</p>
								<a href="#" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-sm animated-button gibson-three mt-3">Read More</a>
							</div>
							<div class="col-md-4 ser_grid1 mt-5">
								<i class="fas fa-video"></i>
								<h3>Video Camera</h3>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. et sed libero. empor mauris tincidunt</p>
								<a href="#" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-sm animated-button gibson-three mt-3">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //services -->

	<!-- Team -->
	<section class="team py-lg-5 py-3" id="team">
		<div class="container">
			<div class="inner-sec-w3ls-agileits py-lg-5 py-3">
				<div class="row team_grids">
					<div class="col-lg-8 team-con-info">
						<div class="row tm-in">
							<div class="col-md-6 col-sm-6 col-xs-6 team_grid">
								<div class="view view-second">
									<img src="images/t1.jpg" alt=" " class="img-fluid" />
								</div>
								<h4 class="mt-4">David Brook</h4>
								<p class="my-2">CE0 & Founder</p>
								<ul class="social_list1 text-center mb-4">

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
							<div class="col-md-6 col-sm-6 col-xs-6 team_grid">
								<div class="view view-second">
									<img src="images/t2.jpg" alt=" " class="img-fluid" />
								</div>
								<h4 class="mt-4">Linda Clarks</h4>
								<p class="my-2">Co-founder</p>
								<ul class="social_list1 text-center mb-4">

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
							<div class="col-md-6 col-sm-6 col-xs-6 team_grid">
								<div class="view view-second">
									<img src="images/t3.jpg" alt=" " class="img-fluid" />
								</div>
								<h4 class="mt-4">Miranda Tornton</h4>
								<p class="my-2">General Manager</p>
								<ul class="social_list1 text-center">

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
							<div class="col-md-6 col-sm-6 col-xs-6 team_grid">
								<div class="view view-second">
									<img src="images/t4.jpg" alt=" " class="img-fluid" />
								</div>
								<h4 class="mt-4">Stiven Garsia</h4>
								<p class="my-2">Co-founder</p>
								<ul class="social_list1 text-center">

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
					<div class="col-lg-4 header-info mt-5">
						<h3 class="heading ">Our Team</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Nunc Nam vel feugiat</p>
						<a href="#" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-sm animated-button gibson-three mt-3">Read More</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //Team -->
	<!-- gallery -->
	<section class="gallery py-lg-5 py-3" id="gallery">
		<div class="container-fluid">
			<div class="inner-sec-w3ls-agileits p-lg-5 p-3">
				<div class="gallery_grids row">
					<div class="col-lg-3 header-info mt-5">
						<h3 class="heading">Photo Gallery</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Nunc Nam vel feugiat</p>

					</div>
					<div class="col-lg-9 gal-content">
						<ul class="clearfix demo">
							<li>
								<div class="gallery-grid1">
									<img src="images/g1.jpg" alt=" " class="img-fluid" />
									<div class="p-mask">
										<h4>Shoot</h4>
									</div>
								</div>
							</li>
							<li>
								<div class="gallery-grid1">
									<img src="images/g2.jpg" alt=" " class="img-fluid" />
									<div class="p-mask">
										<h4>Shoot</h4>
									</div>
								</div>
							</li>
							<li>
								<div class="gallery-grid1">
									<img src="images/g3.jpg" alt=" " class="img-fluid" />
									<div class="p-mask">
										<h4>Shoot</h4>
									</div>
								</div>
							</li>
							<li>
								<div class="gallery-grid1">
									<img src="images/g4.jpg" alt=" " class="img-fluid" />
									<div class="p-mask">
										<h4>Shoot</h4>
									</div>
								</div>
							</li>
							<li>
								<div class="gallery-grid1">
									<img src="images/g5.jpg" alt=" " class="img-fluid" />
									<div class="p-mask">
										<h4>Shoot</h4>
									</div>
								</div>
							</li>
							<li>
								<div class="gallery-grid1">
									<img src="images/g6.jpg" alt=" " class="img-fluid" />
									<div class="p-mask">
										<h4>Shoot</h4>
									</div>
								</div>
							</li>
							<li>
								<div class="gallery-grid1">
									<img src="images/g7.jpg" alt=" " class="img-fluid" />
									<div class="p-mask">
										<h4>Shoot</h4>
									</div>
								</div>
							</li>
							<li>
								<div class="gallery-grid1">
									<img src="images/g5.jpg" alt=" " class="img-fluid" />
									<div class="p-mask">
										<h4>Shoot</h4>
									</div>
								</div>
							</li>
							<li>
								<div class="gallery-grid1">
									<img src="images/g6.jpg" alt=" " class="img-fluid" />
									<div class="p-mask">
										<h4>Shoot</h4>
									</div>
								</div>
							</li>
							<li>
								<div class="gallery-grid1">
									<img src="images/g3.jpg" alt=" " class="img-fluid" />
									<div class="p-mask">
										<h4>Shoot</h4>
									</div>
								</div>
							</li>
							<li>
								<div class="gallery-grid1">
									<img src="images/g1.jpg" alt=" " class="img-fluid" />
									<div class="p-mask">
										<h4>Shoot</h4>
									</div>
								</div>
							</li>
							<li>
								<div class="gallery-grid1">
									<img src="images/g3.jpg" alt=" " class="img-fluid" />
									<div class="p-mask">
										<h4>Shoot</h4>
									</div>
								</div>
							</li>
						</ul>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- //gallery -->
	<!--/pricing -->
	<section class="team py-lg-5 py-3" id="pricing">
		<div class="container-fluid">
			<div class="inner-sec-w3ls-agileits p-lg-5 p-3">
				<div class="gallery_grids row">
					<div class="col-lg-9 card-desk text-center">
						<div class="row prime">
							<div class="col-md-4 price-main-info card box-shadow">
								<div class="card-header">
									<h4>Portrait
										<span>session</span>
									</h4>
								</div>
								<div class="card-body">
									<h5 class="card-title pricing-card-title">
										<span class="align-top">$</span>250
										<small class="text-muted">/ month</small>
									</h5>
									<ul class="list-unstyled mt-3 mb-4">
										<li class="py-2 border-bottom">Lorem Ipsum is simply</li>
										<li class="py-2 border-bottom">Lorem Ipsum is simply</li>
										<li class="py-2">Lorem Ipsum is simply</li>
									</ul>
									<a href="#contact" class="btn btn-sm animated-button gibson-three mt-3 scroll">Read More</a>
								</div>
							</div>
							<div class="col-md-4 price-main-info card box-shadow">
								<div class="card-header">
									<h4>Life Style
										<span>session</span>
									</h4>
								</div>
								<div class="card-body">
									<h5 class="card-title pricing-card-title">
										<span class="align-top">$</span>300
										<small class="text-muted">/ month</small>
									</h5>
									<ul class="list-unstyled mt-3 mb-4">
										<li class="py-2 border-bottom">Lorem Ipsum is simply</li>
										<li class="py-2 border-bottom">Lorem Ipsum is simply</li>
										<li class="py-2">Lorem Ipsum is simply</li>
									</ul>
									<a href="#contact" class="btn btn-sm animated-button gibson-three mt-3 scroll">Read More</a>
								</div>
							</div>
							<div class="col-md-4 price-main-info card box-shadow">
								<div class="card-header">
									<h4>Family
										<span>session</span>
									</h4>
								</div>
								<div class="card-body">
									<h5 class="card-title pricing-card-title">
										<span class="align-top">$</span>450
										<small class="text-muted">/ month</small>
									</h5>
									<ul class="list-unstyled mt-3 mb-4">
										<li class="py-2 border-bottom">Lorem Ipsum is simply</li>
										<li class="py-2 border-bottom">Lorem Ipsum is simply</li>
										<li class="py-2">Lorem Ipsum is simply</li>
									</ul>
									<a href="#contact" class="btn btn-sm animated-button gibson-three mt-3 scroll">Read More</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 header-info mt-5">
						<h3 class="heading">Our Pricing</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Nunc Nam vel feugiat</p>

					</div>

				</div>
			</div>
		</div>
	</section>
	<!--//pricing -->
	<!--/testimonials-->
	<section class="testimonials py-lg-5 py-3" id="testimonials">
		<div class="container-fluid">
			<div class="inner-sec-w3ls-agileits p-lg-5 p-3">
				<div class="row">
					<div class="col-lg-3 header-info two mt-5">
						<h3 class="heading">Testimonials</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Nunc Nam vel feugiat</p>
					</div>
					<div class="owl-carousel owl-theme  owl-slider col-lg-9">
						<div class="item">
							<div class="feedback-info">
								<div class="feedback-top">
									<p> Sed semper leo metus, a lacinia eros semper at. Etiam sodales orci sit amet vehicula pellentesque. </p>
								</div>
								<div class="feedback-grids">
									<div class="feedback-img">
										<img src="images/t1.jpg" class="img-fluid rounded" alt="" />
									</div>
									<div class="feedback-img-info">
										<h5>Mary Jane</h5>
										<p>United States
											<span>(Company)</span>
										</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feedback-info">
								<div class="feedback-top">
									<p> Sed semper leo metus, a lacinia eros semper at. Etiam sodales orci sit amet vehicula pellentesque. </p>
								</div>
								<div class="feedback-grids">
									<div class="feedback-img">
										<img src="images/t2.jpg" class="img-fluid rounded" alt="" />
									</div>
									<div class="feedback-img-info">
										<h5>Peter guptill</h5>
										<p>United States
											<span>(Company)</span>
										</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feedback-info">
								<div class="feedback-top">
									<p> Sed semper leo metus, a lacinia eros semper at. Etiam sodales orci sit amet vehicula pellentesque. </p>
								</div>
								<div class="feedback-grids">
									<div class="feedback-img">
										<img src="images/t3.jpg" class="img-fluid rounded" alt="" />
									</div>
									<div class="feedback-img-info">
										<h5>Steven Wilson</h5>
										<p>United States
											<span>(Company)</span>
										</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feedback-info">
								<div class="feedback-top">
									<p> Sed semper leo metus, a lacinia eros semper at. Etiam sodales orci sit amet vehicula pellentesque. </p>
								</div>
								<div class="feedback-grids">
									<div class="feedback-img">
										<img src="images/t1.jpg" class="img-fluid rounded" alt="" />
									</div>
									<div class="feedback-img-info">
										<h5>Mary Jane</h5>
										<p>Vestibulum</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feedback-info">
								<div class="feedback-top">
									<p> Sed semper leo metus, a lacinia eros semper at. Etiam sodales orci sit amet vehicula pellentesque. </p>
								</div>
								<div class="feedback-grids">
									<div class="feedback-img">
										<img src="images/t3.jpg" class="img-fluid rounded" alt="" />
									</div>
									<div class="feedback-img-info">
										<h5>Peter guptill</h5>
										<p>Vestibulum</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feedback-info">
								<div class="feedback-top">
									<p> Sed semper leo metus, a lacinia eros semper at. Etiam sodales orci sit amet vehicula pellentesque. </p>
								</div>
								<div class="feedback-grids">
									<div class="feedback-img">
										<img src="images/t4.jpg" class="img-fluid rounded" alt="" />
									</div>
									<div class="feedback-img-info">
										<h5>Steven Wilson</h5>
										<p>Vestibulum</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--//testimonials-->
	<!-- contact -->
	<!-- <section class="banner-bottom contact" id="contact">
		<div class="container-fluid">
			<div class="inner-sec-w3ls-agileits p-lg-5 p-3">
				<div class="row">
					<div class="col-lg-3 header-info mt-5">
						<h3 class="heading">Get In Touch</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Nunc Nam vel feugiat</p>
						<div class="map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423286.27404345275!2d-118.69191921441556!3d34.02016130939095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos+Angeles%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1522474296007"
							    allowfullscreen></iframe>
						</div>
					</div>
					<div class="main_grid_contact col-lg-9">
						<div class="form text-center">

							<form action="#" method="post">
								<div class="form-group">
									<label class="my-2">Name</label>
									<input class="form-control" type="text" name="Name" placeholder="" required="">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input class="form-control" type="email" name="Email" placeholder="" required="">
								</div>
								<div class="form-group">
									<label>Message</label>
									<textarea id="textarea" placeholder=""></textarea>
								</div>
								<div class="input-group1">
									<input class="form-control" type="submit" value="Submit">
								</div>
							</form>
						</div>
					</div>

				</div>

			</div>

		</div>
	</section> -->
	<!-- //contact -->
	



<?php include 'footer.php'; ?>