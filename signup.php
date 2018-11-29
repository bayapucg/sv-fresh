<?php include("header.php"); ?>
<div class="columns-container">
    <div class="container" id="columns">
 
        <div class="row">
			  <div class="modal-dialog">
      <div class="modal-content box-shadow-site">
          <div class="modal-header">
             
              <h4 class="modal-title" id="myModalLabel">Register </h4>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-xs-12">
                      <div class="well">
                          <form id="loginForm" method="POST" action="/login/" novalidate="novalidate">
                              <div class="form-group">
                                  <label for="username" class="control-label">Email Id</label>
                                  <input type="email" class="form-control" id="username" name="username" value=""  title="Please enter you email" placeholder="example@gmail.com">
                              </div>    
							  <div class="form-group">
                                  <label for="username" class="control-label">Phone Number</label>
                                  <input type="text" class="form-control" id="username" name="username" value=""  title="Mobile Number" placeholder="Enter your mobile number">
                              </div> 
							  <div class="form-group">
                                  <label for="username" class="control-label">Username</label>
                                  <input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you username" placeholder="Username">
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label">Password</label>
                                  <input type="password" class="form-control" id="password" name="password" value="" required="" >
                                  
                              </div> 
							  <div class="form-group">
                                  <label for="password" class="control-label">Confirm Password</label>
                                  <input type="password" class="form-control" id="password" name="password" value="" required="" title="Confirm your password">
                                  
                              </div>
                              <div id="loginErrorMsg" class="alert alert-error hide">Wrong username og password</div>
                              
                             
							  <div class="">
							   <a href="index.php" type="submit" class="btn btn-success  ">Signup</a>
							   <a href="login.php" type="submit" class="btn btn-warning  ">Login if you already Account</a>
							  </div>
                          
                          </form>
                      </div>
                  </div>
               
              </div>
          </div>
      </div>
  </div>
		</div>
	</div>
</div>
<?php include("footer.php"); ?>