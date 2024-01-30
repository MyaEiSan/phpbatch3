<?php require APPROOT.'/views/layout/header.php'; ?>
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
    <?php require APPROOT.'/views/layout/footer.php'; ?>