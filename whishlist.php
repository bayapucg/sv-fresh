<?php include("header.php"); ?>

<div class="">
    <div class="container" >
  
        <div class="page-content checkout-page">
            <h3 class="checkout-sep">Orders List</h3>
			<div class="col-md-3 ">
				<div class="panel panel-default">
					
					<div class="panel-body text-center">
						<div class="">
							<img src="assets/data/user1.jpg" alt="user" class="avatar thumbanail">
						</div>
						<h4 class="pd-tb10">User one</h4>
					</div>
					  <ul class="list-group">
						<a href="orders.php"><li class="list-group-item">My orders</li></a>
						<a href="whishlist.php"><li class="list-group-item">Whishlist</li></a>
						<a href="checkout.php"><li class="list-group-item">Checkout</li></a>
						<a href="checkout.php"><li class="list-group-item">logout</li></a>
						
					  </ul>
					
			  </div>
			</div>
			<div class="col-md-9 ">
			<div class="panel panel-default ">
				<div class="panel-heading bg-white">
					<span class=" border-radius-none"><strong class="h4">My Wishlist (2)</strong></span>
				</div>
				<div class="panel-body" style="border-bottom:1px solid #ddd;">
					<div class="row">
						<div class="col-md-2">
							  <a href="#"><img style="width:auto;height:80px;" src="assets/data/waterimg1.jpg" alt="Product"></a>
						</div>
						<div class="col-md-9">
							<h3 class="text-success">Minaral Water</h3>
							<div class="h4">₹ 45.12 &nbsp; <span  style="text-decoration: line-through;color:#aaa">₹ 65.12  </span></div>
							
							
						</div>
						<div class="col-md-1">
							  <a href="#" class="h2" ><i class="fa fa-trash-o " aria-hidden="true"></i></a>
						</div>
					</div>
				</div>	<div class="panel-body" style="border-bottom:1px solid #ddd;">
					<div class="row">
						<div class="col-md-2">
							  <a href="#"><img style="width:auto;height:80px;" src="assets/data/grocery-img4.png" alt="Product"></a>
						</div>
						<div class="col-md-9">
							<h3 class="text-success">KamaSutra Spark Spray</h3>
							<div class="h4">₹ 145.12 &nbsp; <span  style="text-decoration: line-through;color:#aaa">₹ 165.12  </span></div>
							
							
						</div>
						<div class="col-md-1">
							  <a href="#" class="h2" ><i class="fa fa-trash-o " aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
				
			</div>
			
			
			</div>
					
        </div>
    </div>
</div>

<?php include("footer.php"); ?>