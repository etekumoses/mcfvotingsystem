<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
        <div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">         
					<div class="panel panel-primary">
						<div class="panel-heading">
							<center>Add Candidate</center>
						</div>    
					</div>
				</h4>
			</div>
										
										
            <div class="modal-body">
				<form method = "post" enctype = "multipart/form-data">	
					<div class="form-group">
						<label>Position</label>
						<select class = "form-control" name = "position">
								<option></option>
								<option>President</option>
								<option>Vice President</option>
								<option>Speaker</option>
								<option>DeputySpeaker</option>
								<option>GeneralSecretary</option>
								<option>Council Rep</option>
								<option>Finance</option>
								<option>Deputy finance</option>
								<option>Welfare minister</option>
								<option>Women Affairs</option>
								<option>Sports & Entertainment</option>
								<option>Deputy Sports</option>
								<option>Information and publicity</option>
								<option>Chief advisor</option>
							</select>
					</div>

										
					<div class="form-group">
						<label>Firstname</label>
							<input class="form-control" type ="text" name = "firstname" placeholder="Please enter firstname" required="true">
					</div>
					<div class="form-group">
						<label>Lastname</label>
							<input class="form-control"  type = "text" name = "lastname" placeholder="Please enter lastname" required="true">
					</div>
											
					<div class="form-group">
						<label>Cohort</label>
							<select class = "form-control" name = "cohort">
								<option></option>
								<option>4th Cohort</option>
								<option>5th Cohort</option>
							</select>
					</div>
															
					<div class="form-group">
						<label>Gender</label>
							<select class = "form-control" name = "gender">
								<option></option>
								<option>Male</option>
								<option>Female</option>
							</select>
					</div>
											
											
					<div class="form-group">
                        <label>Image</label>
						<input type="file" name="image"required> 
                    </div>
						<button name = "save" type="submit" class="btn btn-primary">Save Data</button>
				</form>  
			</div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
										
										
										
										
			<?php 
				require_once 'dbcon.php';
				
				if (isset ($_POST ['save'])){
					$position=$_POST['position'];
					$firstname=$_POST['firstname'];
					$lastname=$_POST['lastname'];
					$cohort=$_POST['cohort'];
					$gender=$_POST['gender'];
					$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
					$image_name= addslashes($_FILES['image']['name']);
					$image_size= getimagesize($_FILES['image']['tmp_name']);
		
					move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
					$location="upload/" . $_FILES["image"]["name"];
					
					
					$conn->query("INSERT INTO candidate(position,firstname,lastname,cohort,gender,img)values('$position','$firstname','$lastname','$cohort','$gender','$location')")or die(mysql_error());
				}						
			?>					
        </div>
                                   
<!-- /.modal-content -->
                                
	</div>
                               
<!-- /.modal-dialog -->
								
</div>