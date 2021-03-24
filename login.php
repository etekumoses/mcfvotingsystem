

<?php include ('head.php');?>

<body>
    <div class="container">
        <div class="row">
		
		<div class="col-md-4 col-md-offset-4">
			
                <div class="login-panel panel panel-default">
				
                    <div class="panel-heading">
                    <img src="download.png" alt="Snow" style="width:100%;">
                    <center><h3 style="font-size:200%;color:black;font-weight:bold;">MCFDecides2✅21</h3></center>
                    <hr class="dotted">
                    <center><h3 class="panel-title"> Log In</h3></center>
                    </div>
                    <div class="panel-body">
                        <form role="form" method = "post" enctype = "multipart/form-data">
                            <fieldset>
                                <div class="form-group">
									<label for = "username" >Student No.</label>
										<input class="form-control" placeholder="Please Enter Student Number" name="regno" type="text" required = "required" autofocus>
                                </div>
                                <div class="form-group">
									<label for = "password" >Password</label>
										<input class="form-control" placeholder="Password" name="password" type="password" required = "required">
                                </div>
                                <button class="btn btn-lg btn-success btn-block " name = "login">Login</a>
                                
                            </fieldset>
							
									<?php include ('login_query.php');?>
                        </form>
                        <h4><b>Note:</b> <i>One voter can only vote/login one time!!</i> </h4>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

  <?php include ('script.php');?>

</body>

</html>
