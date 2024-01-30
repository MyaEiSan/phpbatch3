<?php require APPROOT.'/views/layout/header.php'; ?>
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

					<form class="" action="" method="">
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
								<input type="checkbox" name="accept" id="accept" class="form-check-input" />
								<label for="accept" class="text-light">I agree to get push notify</label>
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