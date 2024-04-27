<?php require APPROOT.'/views/layout/header.php'; ?>
      <!-- <h1><?php echo $data["title"]; ?></h1> -->
      <!-- Start About Us Section -->
	<section id="about" class="py-5 aboutuss" style="background: linear-gradient(
		rgba(0,0,0,0.3),
		rgba(0,0,0,0.3)
		),url('<?php echo URLROOT; ?>/public/assets/img/banner/banner2.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<img src="<?php echo URLROOT; ?>/public/assets/img/users/staffgirl1.png" alt="staffgirl1" />
				</div>
				<div class="col-sm-6 text-center text-light">
					<div class="row">
						<div class="col-md-12">
							<h2 class="text-uppercase">Who are we !!!</h2>
							<div class="lines"></div>
							<div class="lines"></div>
							<div class="lines"></div>
							
						</div>
						<div class="col-md-12">
							<h5 class="fst-italic">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h5>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
							<a href="#" class="btn btn-danger rounded-0">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- End About Us Section -->

	<!-- Start Property Section -->

	<section id="properties" class="py-5">
		<div class="container-fluid">
			<!-- start title -->
			    <div class="row text-center">
				    <div class="col">
					    <h3 class="titles">Properties</h3>
				    </div>
			    </div>
			<!-- end title -->

			<ul class="list-inline text-center text-uppercase fw-bold">
				<li class="list-inline-item propertylists activeitems" data-filter="all">All<span class="text-secondary mx-md-5 mx-3">/</span></li>
				<li class="list-inline-item propertylists" data-filter="house">House<span class="text-secondary mx-md-5 mx-3">/</span></li>
				<li class="list-inline-item propertylists" data-filter="decoration">Decoration<span class="text-secondary mx-md-5 mx-3">/</span></li>
				<li class="list-inline-item propertylists" data-filter="furniture">Furniture<span class="text-secondary mx-md-5 mx-3">/</span></li>
				<li class="list-inline-item propertylists" data-filter="office">Office</li>
			</ul>

			<div class="container-fluid">
				<div class="d-flex flex-wrap justify-content-center">

					<div class="filters house"><a href="<?php echo URLROOT; ?>/public/assets/img/gallery/image1.jpg" data-lightbox="properyt" data-title="image1"><img src="<?php echo URLROOT; ?>/public/assets/img/gallery/image1.jpg" width="200px" alt="image1" /></a></div>

				    <div class="filters house"><a href="<?php echo URLROOT; ?>/public/assets/img/gallery/image2.jpg" data-lightbox="properyt" data-title="image2"><img src="<?php echo URLROOT; ?>/public/assets/img/gallery/image2.jpg" width="200px" alt="image2" /></a></div>

				    <div class="filters house"><a href="<?php echo URLROOT; ?>/public/assets/img/gallery/image3.jpg" data-lightbox="properyt" data-title="image3"><img src="<?php echo URLROOT; ?>/public/assets/img/gallery/image3.jpg" width="200px" alt="image3" /></a></div>

				    <div class="filters decoration"><a href="<?php echo URLROOT; ?>/public/assets/img/gallery/image4.jpg" data-lightbox="properyt" data-title="image4"><img src="<?php echo URLROOT; ?>/public/assets/img/gallery/image4.jpg" width="200px" alt="image4" /></a></div>

				    <div class="filters decoration"><a href="<?php echo URLROOT; ?>/public/assets/img/gallery/image5.jpg" data-lightbox="properyt" data-title="image5"><img src="<?php echo URLROOT; ?>/public/assets/img/gallery/image5.jpg" width="200px" alt="image5" /></a></div>

				    <div class="filters decoration"><a href="<?php echo URLROOT; ?>/public/assets/img/gallery/image6.jpg" data-lightbox="properyt" data-title="image6"><img src="<?php echo URLROOT; ?>/public/assets/img/gallery/image6.jpg" width="200px" alt="image6" /></a></div>
				    <div class="filters decoration"><a href="<?php echo URLROOT; ?>/public/assets/img/gallery/image7.jpg" data-lightbox="properyt" data-title="image7"><img src="<?php echo URLROOT; ?>/public/assets/img/gallery/image7.jpg" width="200px" alt="image7" /></a></div>
				    <div class="filters furniture"><a href="<?php echo URLROOT; ?>/public/assets/img/gallery/image8.jpg" data-lightbox="properyt" data-title="image8"><img src="<?php echo URLROOT; ?>/public/assets/img/gallery/image8.jpg" width="200px" alt="image8" /></a></div>
				    <div class="filters furniture"><a href="<?php echo URLROOT; ?>/public/assets/img/gallery/image9.jpg" data-lightbox="properyt" data-title="image9"><img src="<?php echo URLROOT; ?>/public/assets/img/gallery/image9.jpg" width="200px" alt="image9" /></a></div>
				    <div class="filters furniture"><a href="<?php echo URLROOT; ?>/public/assets/img/gallery/image1.jpg" data-lightbox="properyt" data-title="image1"><img src="<?php echo URLROOT; ?>/public/assets/img/gallery/image1.jpg" width="200px" alt="image1" /></a></div>
				    <div class="filters office"><a href="<?php echo URLROOT; ?>/public/assets/img/gallery/image2.jpg" data-lightbox="properyt" data-title="image2"><img src="<?php echo URLROOT; ?>/public/assets/img/gallery/image2.jpg" width="200px" alt="image2" /></a></div>
				    <div class="filters office"><a href="<?php echo URLROOT; ?>/public/assets/img/gallery/image3.jpg" data-lightbox="properyt" data-title="image3"><img src="<?php echo URLROOT; ?>/public/assets/img/gallery/image3.jpg" width="200px" alt="image3" /></a></div>
				    <div class="filters decoration"><a href="<?php echo URLROOT; ?>/public/assets/img/gallery/image4.jpg" data-lightbox="properyt" data-title="image4"><img src="<?php echo URLROOT; ?>/public/assets/img/gallery/image4.jpg" width="200px" alt="image4" /></a></div>
				    <div class="filters decoration"><a href="<?php echo URLROOT; ?>/public/assets/img/gallery/image5.jpg" data-lightbox="properyt" data-title="image5"><img src="<?php echo URLROOT; ?>/public/assets/img/gallery/image5.jpg" width="200px" alt="imag5" /></a></div>
				    <div class="filters furniture"><a href="<?php echo URLROOT; ?>/public/assets/img/gallery/image6.jpg" data-lightbox="properyt" data-title="image6"><img src="<?php echo URLROOT; ?>/public/assets/img/gallery/image6.jpg" width="200px" alt="image6" /></a></div>
				   <div class="filters furniture"><a href="<?php echo URLROOT; ?>/public/assets/img/gallery/image7.jpg" data-lightbox="properyt" data-title="image7"><img src="<?php echo URLROOT; ?>/public/assets/img/gallery/image7.jpg" width="200px" alt="image7" /></a></div>
				</div>

			</div>
		</div>
	</section>

	<!-- End Property Section -->

	<!-- Start Adv Section -->
	<section class="p-5 missions">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5 text-center">
				    <img src="<?php echo URLROOT; ?>/public/assets/img/etc/building4.png" class="advimages" alt="building4" />
			    </div>
			    <div class="col-lg-7 text-white text-center text-lg-end advtexts">
				    <h1>What is Plannco & how we started our business in Myanmar</h1>
				    <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
			    </div>
			</div>
		</div>
	</section>
	<!-- End Adv Section -->

	<!-- Start Services Section -->
	<section id="services" class="py-5 services">

		<div class="container-fluid">
			<!-- start title -->
			<div class="row text-center">
				<div class="col-12">
					<h3 class="text-light titles">Our Services</h3>
					<p class="text-white lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
				</div>
			</div>
			<!-- end title -->

			<div class="row">

				<div class="col-lg-4 col-md-6 mb-3">
					<div class="card border-0 servicecards">
						<img src="<?php echo URLROOT; ?>/public/assets/img/gallery/image1.jpg" alt="image1" />
						<h5 class="text-white text-uppercase fw-bold py-2 servicetxts">Living Room</h5>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-3">
					<div class="card border-0 servicecards">
						<img src="<?php echo URLROOT; ?>/public/assets/img/gallery/image2.jpg" alt="image2" />
						<h5 class="text-white text-uppercase fw-bold py-2 servicetxts">Mini Bar</h5>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-3">
					<div class="card border-0 servicecards">
						<img src="<?php echo URLROOT; ?>/public/assets/img/gallery/image3.jpg" alt="image3" />
						<h5 class="text-white text-uppercase fw-bold py-2 servicetxts">Dining Room</h5>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-3">
					<div class="card border-0 servicecards">
						<img src="<?php echo URLROOT; ?>/public/assets/img/gallery/image4.jpg" alt="image4" />
						<h5 class="text-white text-uppercase fw-bold py-2 servicetxts">Meeting Room</h5>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-3">
					<div class="card border-0 servicecards">
						<img src="<?php echo URLROOT; ?>/public/assets/img/gallery/image5.jpg" alt="image5" />
						<h5 class="text-white text-uppercase fw-bold py-2 servicetxts">Bed Room</h5>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-3">
					<div class="card border-0 servicecards">
						<img src="<?php echo URLROOT; ?>/public/assets/img/gallery/image6.jpg" alt="image6" />
						<h5 class="text-white text-uppercase fw-bold py-2 servicetxts">Pantry Room</h5>
					</div>
				</div>

			</div>
		</div>

	</section>

	<!-- End Services Section -->

	<!-- Start Client Section -->
	<section class="p-3">
		<div class="container-fluid">
			<!-- start title -->
			<div class="row text-center">
				<div class="col-12">
					<h3 class="titles">Satisfied Client</h3>
					<p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>
			</div>
			<!-- end title -->

			<div class="row">
				<div class="col-md-12">
					<ul class="clientslists">
						<li><img src="<?php echo URLROOT; ?>/public/assets/img/clients/client1.png" alt="client1"></li>
						<li><img src="<?php echo URLROOT; ?>/public/assets/img/clients/client2.png" alt="client2"></li>
						<li><img src="<?php echo URLROOT; ?>/public/assets/img/clients/client3.png" alt="client3"></li>
						<li><img src="<?php echo URLROOT; ?>/public/assets/img/clients/client4.png" alt="client4"></li>
						<li><img src="<?php echo URLROOT; ?>/public/assets/img/clients/client5.png" alt="client5"></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- End Client Section -->

	<!-- Start Customers Section -->

	<section id="customer" class="py-3 customers" style="background-image: linear-gradient(
		rgba(0,0,0,0),
		rgba(0,0,0,0.1)
		),url('<?php echo URLROOT; ?>/public/assets/img/banner/banner3.jpg');">
		<div class="container-fluid">
			<!-- start title -->
			<div class="row text-center">
				<div class="col">
					<h3 class="titles text-light">What Customers Say?</h3>
				</div>
			</div>
			<!-- end titile -->

			<div class="row">
				<div class="col-md-6 mx-auto">

					<div id="customercarousels" class="carousel slide" data-bs-ride="carousel">
						<ol class="carousel-indicators">
							<li  data-bs-target="#customercarousels" class="active" data-bs-slide-to="0"></li>
							<li data-bs-target="#customercarousels" data-bs-slide-to="1"></li>
							<li data-bs-target="#customercarousels" data-bs-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
						    <!-- start user1 -->
						    <div class="carousel-item text-center active">
							    <img src="<?php echo URLROOT; ?>/public/assets/img/users/user1.jpg" class="rounded-circle my-5" width="150px" alt="user1" />

							    <blockquote class="text-white">
								    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
							    </blockquote>
							    <h5 class="text-light text-uppercase fw-bold mb-3">Ms.July</h5>

							    <ul class="list-inline mb-5">
								    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
								    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
								    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
								    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
								    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
							    </ul>
						    </div>
						    <!-- end user1 -->

						    <!-- start user2 -->
						    <div class="carousel-item text-center">
							    <img src="<?php echo URLROOT; ?>/public/assets/img/users/user2.jpg" class="rounded-circle my-5" width="150px" alt="user2" />

							    <blockquote class="text-white">
								    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
							    </blockquote>
							    <h5 class="text-light text-uppercase fw-bold mb-3">Mr.Anton</h5>

							    <ul class="list-inline mb-5">
								    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
								    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
								    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
								    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
								    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
							    </ul>
						    </div>
						    <!-- end user1 -->

						   <!-- start user3 -->
						   <div class="carousel-item text-center">
							    <img src="<?php echo URLROOT; ?>/public/assets/img/users/user3.jpg" class="rounded-circle my-5" width="150px" alt="user3" />

							    <blockquote class="text-white">
								    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
							    </blockquote>
							    <h5 class="text-light text-uppercase fw-bold mb-3">Ms.Yoon</h5>

							    <ul class="list-inline mb-5">
								    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
								    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
								    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
								    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
								    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
							    </ul>
						    </div>
						    <!-- end user1 -->
					    </div>

					</div>

					
				</div>
			</div>
		</div>
	</section>

	<!-- End Customers Section -->

	<!-- Start Request Quotation -->
	<section>
		<div class="container">
			<div class="quotes">
				<div class="infos">
					<div  class="me-5">
						<img src="<?php echo URLROOT; ?>/public/assets/img/icon/phoneicon.png" class="phoneicons" alt="phoneicon" />
					</div>
					<div class="text-light">
						<h2 class="fw-bold text-uppercase">Request A Free Quote</h2>
						<p>Get answers and advice from people you want it from.</p>
					</div>
				</div>
				<div>
					<a href="tel:09422042225" class="btn btn-calls">Call Now<i class="fas fa-phone"></i></a>
				</div>
			</div>
		</div>
	</section>
	<!-- End Request Quotation -->

	<!-- Start Furniture Services Section -->

	<section id="furniture" class="bg-light text-center py-3">
		<div class="container">
			<!-- start title -->
			<div class="row">
				<div class="col">
					<h3 class="titles">Furniture Services</h3>
					<p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>
			</div>
			<!-- end title -->
			<div class="row furicons">
				<div class="col-md-4">
					<img src="<?php echo URLROOT; ?>/public/assets/img/icon/services1.png" alt="services1" />
					<h4>Fast service</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>
				<div class="col-md-4">
					<img src="<?php echo URLROOT; ?>/public/assets/img/icon/services2.png" alt="services2" />
					<h4>Secure payments</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>
				<div class="col-md-4">
					<img src="<?php echo URLROOT; ?>/public/assets/img/icon/services3.png" alt="services3" />
					<h4>Expert team</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>
				<div class="col-md-4">
					<img src="<?php echo URLROOT; ?>/public/assets/img/icon/services4.png" alt="services4" />
					<h4>Affordable services</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>
				<div class="col-md-4">
					<img src="<?php echo URLROOT; ?>/public/assets/img/icon/services5.png" alt="services5" />
					<h4>90 Days warranty</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>
				<div class="col-md-4">
					<img src="<?php echo URLROOT; ?>/public/assets/img/icon/services6.png" alt="services6" />
					<h4>Award winning</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- End Furniture Services Section -->

	<!-- Start Contact Section -->

	<section id="contact" class="p-5 contacts" style="background-image: linear-gradient(
		100deg,
		rgba(0,0,0,0.9) 50%,
		rgba(0,0,0,0.5) 30%,
		transparent 70%
		),url('<?php echo URLROOT; ?>/public/assets/img/banner/banner3.jpg');">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-5">
					<h5 class="display-4 text-white mb-3">Get New Letter</h5>

					<form class="" action="<?php echo URLROOT; ?>/public/subscribes/create" method="POST">
						<div class="form-group py-4">
							<input type="text" name="name" id="name" class="form-control p-3 inputs" placeholder="Enter Your Name" autocomplete="off" />
							<label for="name" class="labels">Name</label>
						</div>

						<div class="form-group py-4 my-5">
							<input type="text" email="email" id="email" class="form-control p-3 inputs" placeholder="Enter Your Email" autocomplete="off" />
							<label for="email" class="labels">Email</label>
						</div>
						<div class="my-4">
							<div class="form-check form-switch">
								<input type="checkbox" name="status_id" id="status_id" class="form-check-input" value="1" />
								<label for="status_id" class="text-light">I agree to get push notify</label>
							</div>
						</div>

						<div class="d-grid">
							<button type="submit" class="btn text-uppercase fw-bold rounded-0 submit-btns">Subscribe</button>
						</div>

					</form>
				</div>
			</div>
		</div>
	</section>

	<!-- End Contact Section -->
<?php require APPROOT.'/views/layout/footer.php'; ?>

