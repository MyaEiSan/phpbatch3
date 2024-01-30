<?php require APPROOT.'/views/layout/header.php'; ?>
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
<?php require APPROOT.'/views/layout/footer.php'; ?>