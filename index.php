<!--Header -->
<?php

	$pageTitle = "Home";

	include('header.php');

?>

<!--Jumbotron -->
		<div class = "container">
			<div class="jumbotron">
				<div class="container">
					<center>
			    	<h1>Hello, world!</h1>
			    	<p>Proin pharetra tristique leo, id fringilla neque euismod eget. In ornare nisi velit, vehicula porta felis molestie sed. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque congue vitae massa a congue. Aenean pretium ornare tristique. Cras a lectus sed massa iaculis semper. Suspendisse ullamcorper convallis fringilla. Vivamus et eros sed felis lobortis viverra eu ut arcu. Mauris ornare orci lorem, sed fringilla tortor accumsan et. Aliquam posuere elementum aliquet.</p>
			    	<p><a class="btn btn-primary btn-lg" href="#contact" data-toggle="modal">Learn more</a></p>
			  		</center>
			  	</div>
			</div>
		</div>

		<!-- Code For Carousel 
		<div class="container">
			<div id="carousel-example-generic" class="carousel slide">
				-->

			  <!-- Indicators 
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			  </ol> -->

			  <!-- Wrapper for slides 
			  <div class="carousel-inner">
			    <div class="item active">
			      <img src="images/carousel.png" alt="First slide">
				    <div class="container">  
				      <div class="carousel-caption">
				        <h1>Shamrock Interactive</h1>
				        <p>
				        	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vulputate bibendum metus eu varius. Phasellus ullamcorper, orci eget malesuada faucibus, erat metus viverra erat, in accumsan lectus mauris et sapien. Sed tempus malesuada sodales. Curabitur sed nunc nunc. Fusce eu nibh vitae orci posuere tempus id eget leo. Ut tincidunt volutpat cursus. Nulla iaculis lacinia venenatis. Fusce vitae libero ante. Phasellus ultricies in purus at faucibus. Proin porta vestibulum mauris, et condimentum arcu consectetur volutpat. Nulla facilisis justo quis rutrum tempor. Vestibulum quis tellus ac sem elementum porttitor. Nam mollis erat lectus, ac adipiscing elit condimentum id.
				        </p>
				      </div>
				    </div>
			    </div>
			  </div> -->

			  <!-- Controls 
			  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
			    <span class="icon-prev"></span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
			    <span class="icon-next"></span>
			  </a>
			</div>
		</div> -->

<!--Content Rows -->
		<div class="container sub-row">

			<div class="row">
				<div class="col-md-4">
					<center>
					<img src="images/blue_shamrock.jpg" alt="shamrock1" class="img-rounded">
				</center>
				</div>
				<div class="col-md-8">
					<h2>Title</h2>
					<p>Phasellus mollis, erat quis suscipit ultricies, ante est venenatis dolor, ut cursus libero sem non diam. Mauris consequat faucibus enim, a interdum justo elementum ut. Nunc auctor orci vel orci lobortis egestas. Nunc viverra nisi nec dolor faucibus, ac malesuada nisi tincidunt. In mattis nunc varius justo pharetra dictum. Suspendisse vulputate at purus et elementum. Maecenas pretium diam nisi, a blandit purus adipiscing in. Vivamus auctor, quam pellentesque eleifend fringilla, sem mi suscipit metus, ac porttitor erat ante vitae sem.</p>
					<p><a class="btn btn-primary btn-lg pull-right" href="#contact" data-toggle="modal">Learn more</a></p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<center>
					<img src="images/blue_shamrock.jpg" alt="shamrock1" class="img-rounded">
				</center>
				</div>
				<div class="col-md-8">
					<h2>Title</h2>
					<p>Phasellus mollis, erat quis suscipit ultricies, ante est venenatis dolor, ut cursus libero sem non diam. Mauris consequat faucibus enim, a interdum justo elementum ut. Nunc auctor orci vel orci lobortis egestas. Nunc viverra nisi nec dolor faucibus, ac malesuada nisi tincidunt. In mattis nunc varius justo pharetra dictum. Suspendisse vulputate at purus et elementum. Maecenas pretium diam nisi, a blandit purus adipiscing in. Vivamus auctor, quam pellentesque eleifend fringilla, sem mi suscipit metus, ac porttitor erat ante vitae sem.</p>
					<p><a class="btn btn-primary btn-lg pull-right" href="#contact" data-toggle="modal">Learn more</a></p>
				</div>
			</div>
			
		</div>
		
				
			</div>

		</div>

<!--Footer -->
<?php 
	include('contact_modal.php');
	include('footer.php'); 
?>