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
                        <center><h3 class="panel-title">Register</h3></center>
                    </div>
                    <div class="panel-body">
                        <form role="form" method = "post" enctype = "multipart/form-data">
                            <fieldset>
							
                                <div class="form-group">
									<label for = "regno" >Student No.</label>
										<input class="form-control" placeholder="Please Enter Student Number" name="regno" type="text" required = "required" autofocus>
                                </div>
                                <div class="form-group">
									<label for = "fname" >First Name</label>
										<input class="form-control" placeholder="Please Firstname" name="fname" type="text" required = "required" autofocus>
                                </div>
                                <div class="form-group">
									<label for = "lname" >Last Name</label>
										<input class="form-control" placeholder="Please Lastname" name="lname" type="text" required = "required" autofocus>
                                </div>
                                <div class="form-group">
                                <label>Cohort</label>
                                    <select class = "form-control" name = "cohort">
                                        <option></option>
                                        <option>3rd Cohort</option>
                                        <option>4th Cohort</option>
                                        <option>5th Cohort</option>
                                        <option>6th Cohort</option>
                                    </select>
                            </div>
								
                                <div class="form-group">
									<label for = "password" >Password</label>
										<input class="form-control" placeholder="Password" name="password" type="password" required = "required">
                                </div>
                                <button class="btn btn-lg btn-success btn-block " name = "register">Continue</a>
								
								
                            </fieldset>
							
									<?php include ('register_query.php');?>
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