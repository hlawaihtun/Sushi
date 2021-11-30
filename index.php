<?php

require "header.php";

?>
	<!-- Navigation -->

	<nav class="navbar navbar-expand-md navbar-dark bg-danger">
		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<img src="photo/sushi.png" class="img-fluid">
				</div>
				<div class="col-md-6 text-white">
					<h1>相撲寿司</h1>
					<p class="m-0">メニューリスト</p>
				</div>
			</div>
		</div>
	</nav>
	<div class="container-fluid my-4">
		<div class="row">
			<div class="col-md-7">
				<div class="shadow p-3">
					<ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">
  						<li class="nav-item" role="presentation">
    						<a class="nav-link active text-danger" id="pills-sushi-tab" data-toggle="pill" href="#pills-sushi" role="tab" aria-controls="pills-sushi" aria-selected="true">Sushi</a>
  						</li>
  						<li class="nav-item" role="presentation">
    						<a class="nav-link text-danger" id="pills-bento-tab" data-toggle="pill" href="#pills-bento" role="tab" aria-controls="pills-bento" aria-selected="false">Bento Boxes</a>
  						</li>
  						<li class="nav-item" role="presentation">
    						<a class="nav-link text-danger" id="pills-ramen-tab" data-toggle="pill" href="#pills-ramen" role="tab" aria-controls="pills-ramen" aria-selected="false">Ramen</a>
  						</li>
  						<li class="nav-item" role="presentation">
    						<a class="nav-link text-danger" id="pills-appetizer-tab" data-toggle="pill" href="#pills-appetizer" role="tab" aria-controls="pills-appetizer" aria-selected="false">Appetizers</a>
  						</li>
  						<li class="nav-item" role="presentation">
    						<a class="nav-link text-danger" id="pills-rice-tab" data-toggle="pill" href="#pills-rice" role="tab" aria-controls="pills-rice" aria-selected="false">Rice</a>
  						</li>
					</ul>
					<div class="tab-content" id="pills-tabContent">
  						<div class="tab-pane fade show active" id="pills-sushi" role="tabpanel" aria-labelledby="pills-sushi-tab">
  							<div class="row my-4" id="menuCard">
  								<!-- <div class="col-md-4 my-3">
  									<div class="card">
  										<span class="price badge badge-dark badge-pill">2500 Ks</span>
      										<img src="images/1.jpg" class="card-img-top">
      									<div class="card-body">
        									<h5 class="card-title text-center">Salmon Sushi</h5>
        									<hr class="">
      										<button class="btn btn-outline-danger btn-block addtocart" data-id="1" data-name="Salmon Sushi" data-price="2500">Add to Cart</button>
      									</div>
      									
    								</div>
  								</div>
  								<div class="col-md-4 my-3">
  									<div class="card">
  										<span class="price badge badge-dark badge-pill">2000 Ks</span>
      										<img src="images/2.jpg" class="card-img-top">
      									<div class="card-body">
        									<h5 class="card-title text-center">Prawn Sushi</h5>
        									<hr>
      										<button class="btn btn-outline-danger btn-block addtocart"data-id="2" data-name="Prawn Sushi" data-price="2000">Add to Cart</button>
      									</div>
    								</div>
  								</div>

  								<div class="col-md-4 my-3">
  									<div class="card">
  										<span class="price badge badge-dark badge-pill">3000 Ks</span>
      										<img src="images/3.jpg" class="card-img-top">
      									<div class="card-body">
        									<h5 class="card-title text-center">WaKaSa Sushi</h5>
        									<hr>
      										<button class="btn btn-outline-danger btn-block addtocart" data-id="3" data-name="WaKaSa Sushi" data-price="3000">Add to Cart</button>
      									</div>
    								</div>
  								</div>
  								<div class="col-md-4 my-3">
  									<div class="card">
  										<span class="price badge badge-dark badge-pill">1500 Ks</span>
      										<img src="images/4.jpg" class="card-img-top">
      									<div class="card-body">
        									<h5 class="card-title text-center">California Maki Sushi</h5>
        									<hr>
      										<button class="btn btn-outline-danger btn-block addtocart" data-id="4" data-name="California Maki" data-price="1500">Add to Cart</button>
      									</div>
    								</div>
  								</div>
  								<div class="col-md-4 my-3">
  									<div class="card">
  										<span class="price badge badge-dark badge-pill">2500 Ks</span>
      										<img src="images/5.jpg" class="card-img-top">
      									<div class="card-body">
        									<h5 class="card-title text-center">Tobiko Nigiri Sushi</h5>
        									<hr>
      										<button class="btn btn-outline-danger btn-block addtocart" data-id="5" data-name="Tobiko Nigiri" data-price="2500">Add to Cart</button>
      									</div>
    								</div>
  								</div>
  								<div class="col-md-4 my-3">
  									<div class="card">
  										<span class="price badge badge-dark badge-pill">4500 Ks</span>
      										<img src="images/6.jpg" class="card-img-top">
      									<div class="card-body">
        									<h5 class="card-title text-center">Tekkamaki Sushi</h5>
        									<hr>
      										<button class="btn btn-outline-danger btn-block addtocart" data-id="6" data-name="Tekkamaki Sushi" data-price="4500">Add to Cart</button>
      									</div>
    								</div>
  								</div> -->
  							</div>
  						</div>

  	<!-- Bento Boxes -->
  	<!-- <div class="tab-pane fade" id="pills-bento" role="tabpanel" aria-labelledby="pills-bento-tab">
  		<div class="row">
  			<div class="col-md-4 my-3">
  				<div class="card">
  					<span class="price badge badge-dark badge-pill">9500 Ks</span>
      				<img src="images/b1.jpg" class="card-img-top">
      				<div class="card-body">
        				<h5 class="card-title text-center">Bento Boxes </h5>
        				<hr>
      					<button class="btn btn-outline-danger btn-block addtocart" data-id="b1" data-name="Bento Boxes" data-price="9500">Add to Cart</button>
      				</div>
    			</div>
  			</div>
  		</div>
  	</div> -->


  	<!-- Ramen -->
  	<!-- <div class="tab-pane fade" id="pills-ramen" role="tabpanel" aria-labelledby="pills-ramen-tab">
  		<div class="row">
  			<div class="col-md-4 my-3">
  				<div class="card">
  					<span class="price badge badge-dark badge-pill">5500 Ks</span>
      				<img src="images/r1.jpg" class="card-img-top">
      				<div class="card-body">
        				<h5 class="card-title text-center">Sapporo Miso Ramen</h5>
        				<hr>
      					<button class="btn btn-outline-danger btn-block addtocart" data-id="r1" data-name="Sapporo Miso" data-price="5500">Add to Cart</button>
      				</div>
    			</div>
  			</div>
  			<div class="col-md-4 my-3">
  				<div class="card">
  					<span class="price badge badge-dark badge-pill">7500 Ks</span>
      				<img src="images/r2.jpg" class="card-img-top">
      				<div class="card-body">
        				<h5 class="card-title text-center">Wakayama Ramen</h5>
        				<hr>
      					<button class="btn btn-outline-danger btn-block addtocart" data-id="r2" data-name="Wakayama" data-price="7500">Add to Cart</button>
      				</div>
    			</div>
  			</div>
  			<div class="col-md-4 my-3">
  				<div class="card">
  					<span class="price badge badge-dark badge-pill">6500 Ks</span>
      				<img src="images/r3.jpg" class="card-img-top">
      				<div class="card-body">
        				<h5 class="card-title text-center">Hakata Tonkotsu</h5>
        				<hr>
      					<button class="btn btn-outline-danger btn-block addtocart" data-id="r3" data-name="Hakata Tonkotsu" data-price="6500">Add to Cart</button>
      				</div>
    			</div>
  			</div>
  			<div class="col-md-4 my-3">
  				<div class="card">
  					<span class="price badge badge-dark badge-pill">7500 Ks</span>
      				<img src="images/r4.jpg" class="card-img-top">
      				<div class="card-body">
        				<h5 class="card-title text-center">Okinawa Soba</h5>
        				<hr>
      					<button class="btn btn-outline-danger btn-block addtocart" data-id="r4" data-name="Okinawa Soba" data-price="7500">Add to Cart</button>
      				</div>
    			</div>
  			</div>
  			<div class="col-md-4 my-3">
  				<div class="card">
  					<span class="price badge badge-dark badge-pill">6500 Ks</span>
      				<img src="images/r5.jpg" class="card-img-top">
      				<div class="card-body">
        				<h5 class="card-title text-center">Onomichi Ramen</h5>
        				<hr>
      					<button class="btn btn-outline-danger btn-block addtocart" data-id="r5" data-name="Onomichi Ramen" data-price="6500">Add to Cart</button>
      				</div>
    			</div>
  			</div>
  			<div class="col-md-4 my-3">
  				<div class="card">
  					<span class="price badge badge-dark badge-pill">6500 Ks</span>
      				<img src="images/r6.jpg" class="card-img-top">
      				<div class="card-body">
        				<h5 class="card-title text-center">Nagoya(Taiwan)”</h5>
        				<hr>
      					<button class="btn btn-outline-danger btn-block addtocart" data-id="r6" data-name="NagoYa(Taiwan)" data-price="6500">Add to Cart</button>
      				</div>
    			</div>
  			</div>
  		</div>
  	</div> -->

  	<!-- Appetizers -->
  	<!-- <div class="tab-pane fade" id="pills-appetizer" role="tabpanel" aria-labelledby="pills-appetizer-tab">
  		<div class="row">
  			<div class="col-md-4 my-3">
  				<div class="card">
  					<span class="price badge badge-dark badge-pill">2500 Ks</span>
      				<img src="images/a1.jpg" class="card-img-top">
      				<div class="card-body">
        				<h5 class="card-title text-center">Vegetable SandWich</h5>
        				<hr>
      					<button class="btn btn-outline-danger btn-block addtocart" data-id="a1" data-name="Vegetable SandWich" data-price="2500">Add to Cart</button>
      				</div>
    			</div>
  			</div>
  			<div class="col-md-4 my-3">
  				<div class="card">
  					<span class="price badge badge-dark badge-pill">3500 Ks</span>
      				<img src="images/a2.jpg" class="card-img-top">
      				<div class="card-body">
        				<h5 class="card-title text-center">Salad</h5>
        				<hr>
      					<button class="btn btn-outline-danger btn-block addtocart" data-id="a2" data-name="Salad" data-price="3500">Add to Cart</button>
      				</div>
    			</div>
  			</div>
  			<div class="col-md-4 my-3">
  				<div class="card">
  					<span class="price badge badge-dark badge-pill">3500 Ks</span>
      				<img src="images/a3.jpg" class="card-img-top">
      				<div class="card-body">
        				<h5 class="card-title text-center">Hamburger</h5>
        				<hr>
      					<button class="btn btn-outline-danger btn-block addtocart" data-id="a3" data-name="Hamburger" data-price="3500">Add to Cart</button>
      				</div>
    			</div>
  			</div>
  		</div>
  	</div> -->

  	<!-- Rice -->
  	<!-- <div class="tab-pane fade" id="pills-rice" role="tabpanel" aria-labelledby="pills-rice-tab">
  		<div class="row">
  			<div class="col-md-4 my-3">
  				<div class="card">
  					<span class="price badge badge-dark badge-pill">1500 Ks</span>
      				<img src="images/ri2.jpg" class="card-img-top">
      				<div class="card-body">
        				<h5 class="card-title text-center">Fried Rice</h5>
        				<hr>
      					<button class="btn btn-outline-danger btn-block addtocart" data-id="ri1" data-name="Fried Rice" data-price="1500">Add to Cart</button>
      				</div>
    			</div>
  			</div>
  			<div class="col-md-4 my-3">
  				<div class="card">
  					<span class="price badge badge-dark badge-pill">500 Ks</span>
      				<img src="images/ri3.jpg" class="card-img-top">
      				<div class="card-body">
        				<h5 class="card-title text-center">Rice</h5>
        				<hr>
      					<button class="btn btn-outline-danger btn-block addtocart" data-id="ri2" data-name="Rice" data-price="500">Add to Cart</button>
      				</div>
    			</div>
  			</div>
  		</div>
  	</div> -->

	</div>
	
  <div class="container">
    <a href="menu.php" class="btn btn-outline-danger" target="_blank">Add Menu</a>
  </div>
  	




				</div>
			</div>

			<div class="col-md-5" id="voucher_div">
				<div class="shadow p-3">
					<h5 class="text-center mb-3">Payment</h5>
					<div class="">
						<table class="table table-bordered">
							<thead class="text-center bg-light">
								<tr>
									<th>Name</th>
									<th>Qty</th>
									<th>Price</th>
									<th>Remove</th>
								</tr>
							</thead>
							<tbody>	</tbody>
							<tfoot>
								
							</tfoot>
						</table>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</body>
</html>