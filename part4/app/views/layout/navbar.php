	<!-- Start Header Section -->
	<header style="background: linear-gradient(
		30deg,
		rgba(0,0,0,0),
		rgba(0,0,0,0.5)
		),url('<?php echo URLROOT; ?>/public/assets/img/banner/banner2.jpg');">
		<!-- Start nav bar -->
		    <nav class="navbar navbar-expand-lg fixed-top">
		    	<a href="index.html" class="navbar-brand text-light mx-3">
		    	    <img src="<?php echo URLROOT; ?>/public/assets/img/fav/favicon.png" width="70px" alt="favicon" />
		    	    <span class="text-uppercase fw-bold h2 mx-2">Plannco <span class="h3">Home Decoration</span></span>
		        </a>
		        <button type="button" class="navbar-toggler navbuttons" data-bs-toggle="collapse" data-bs-target="#nav">
		        	<div class="bg-light lines1"></div>
		        	<div class="bg-light lines2"></div>
		        	<div class="bg-light lines3"></div>
		        </button>
		        <div id="nav" class="navbar-collapse collapse justify-content-end text-uppercase fw-bold">
		        	<ul class="navbar-nav">
		    	       <li class="nav-item"><a href="<?php echo URLROOT; ?>/public/mainpage" class="nav-link mx-2 menuitems">Home</a></li>
		    	       <li class="nav-item"><a href="<?php echo URLROOT; ?>/public/mainpage/about" class="nav-link mx-2 menuitems">About Us</a></li>
		    	       <li class="nav-item"><a href="<?php echo URLROOT; ?>/public/mainpage/properties" class="nav-link mx-2 menuitems">Properties</a></li>
		    	       <li class="nav-item"><a href="<?php echo URLROOT; ?>/public/mainpage/services"  class="nav-link mx-2 menuitems">Services</a></li>
		    	       <li class="nav-item"><a href="<?php echo URLROOT; ?>/public/mainpage/customer" class="nav-link mx-2 menuitems">Customer</a></li>
		    	       <li class="nav-item"><a href="<?php echo URLROOT; ?>/public/mainpage/furniture" class="nav-link mx-2 menuitems">Furniture</a></li>
		    	       <li class="nav-item"><a href="<?php echo URLROOT; ?>/public/mainpage/contact" class="nav-link mx-2 menuitems">Contact</a></li>
					   <?php 
					   if(isset($_SESSION['user_id'])):
						?>
							<li class="nav-item"><a href="<?php echo URLROOT; ?>/public/users/logout" class="nav-link mx-2 menuitems">Logout</a></li>
						
					  <?php else : ?>
							<li class="nav-item"><a href="<?php echo URLROOT; ?>/public/users/login" class="nav-link mx-2 menuitems">Login</a></li>
							<li class="nav-item"><a href="<?php echo URLROOT; ?>/public/users/register" class="nav-link mx-2 menuitems">Register</a></li>
					   <?php endif ?>
					   
					   
		        </ul>
		        </div>
		    </nav>
		<!-- End nav bar -->

		<!-- Start banner -->
		   <div class="text-light text-center text-md-end banners">
		   	   <h1 class="display-4 bannerheaders">Welcome to <span class="display-3 text-uppercase">Plannco </span><span class="text-capitalize">home decoration co.,ltd</span></h1>
		   	   <p class="lead bannerparagraphs">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
		   </div>
		<!-- End banner -->
	</header>
	<!-- End Header Section -->