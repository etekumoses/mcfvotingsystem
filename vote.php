<?php include ('head.php');?>
<?php include("sess.php")?>
<body>
    <div id="wrapper">
        <?php include ('side_bar.php');?>
	
    </div>
	<form method = "POST" action = "vote_result.php">
	<div class="col-md-4 col-md-offset-4">
     <div class="panel panel-primary">
                        <div class="panel-heading"><center>
                            PRESIDENT</center>
                        </div>
                        <div class="panel-body" style = "background-color:;">
						<?php
							$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'President'") or die(mysqli_errno());
							while($fetch = $query->fetch_array())
						{
						?>
                          <center> <div id = "position">
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
							
							<center><h3 style="font-size:150%;color:black;font-weight:bold;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></h3></center>
                    	<center><center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "pres_id" class = "president"></center>
							</div></center>
	
						<?php
							}
						?>

						</div>
                       
                    </div>
     </div>			
	<div class="col-md-4 col-md-offset-4">
        <div class="panel panel-primary">
                        <div class="panel-heading"><center>
							VICE PRESIDENT</center>
                        </div>
                        <div class="panel-body" style = "background-color:;">
						<?php
							$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Vice President'") or die(mysqli_errno());
							while($fetch = $query->fetch_array()){
						?>
				<center>	<div id = "position">
					<img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>"style ="border-radius:6px;" height = "150px" width = "150px">
					<center><h3 style="font-size:150%;color:black;font-weight:bold;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></h3></center>
                    	<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "vp_id" class = "vp"></center>
				</div></center>
						<?php
							}
						?>

						</div>
                       
                    </div>
                </div>
	
	
	
	<div class="col-md-4 col-md-offset-4">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>SPEAKER</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Speaker'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
					<center>	<div id = "position">
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
							<center><h3 style="font-size:150%;color:black;font-weight:bold;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></h3></center>
                    	<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "speaker_id" class = "speaker"></center>
						</div></center>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>
	<div class="col-md-4 col-md-offset-4">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>DEPUTY SPEAKER</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'DeputySpeaker'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
					<center>	<div id = "position">
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
							<center><h3 style="font-size:150%;color:black;font-weight:bold;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></h3></center>
                    	<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "dpspeaker_id" class = "depspeaker"></center>
						</div></center>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>	
	<div class="col-md-4 col-md-offset-4">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>GENERAL SECRETARY</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'GeneralSecretary'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<center><div id = "position">
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
							<center><h3 style="font-size:150%;color:black;font-weight:bold;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></h3></center>
                    	<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "gensec_id" class = "gensec"></center>
						</div></center>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>
	 <div class="col-md-4 col-md-offset-4">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>SCHOLARS' COUNCIL REPRESENTATIVE</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Council Rep'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
					<center>	<div id = "position">
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
							<center><h3 style="font-size:150%;color:black;font-weight:bold;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></h3></center>
                    	<center><input type = "checkbox"  value = "<?php echo $fetch['candidate_id'] ?>" name = "cr_id" class = "cr"></center>
						</div></center>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>
	<div class="col-md-4 col-md-offset-4">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>FINANCE MINISTER</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Finance'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
					<center>	<div id = "position">
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
							<center><h3 style="font-size:150%;color:black;font-weight:bold;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></h3></center>
                    	<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "finance_id" class = "finance"></center>
						</div></center>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>
	<div class="col-md-4 col-md-offset-4">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>DEPUTY FINANCE MINISTER</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Deputy finance'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
					<center>	<div id = "position">
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
							<center><h3 style="font-size:150%;color:black;font-weight:bold;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></h3></center>
                    	<center><input type = "checkbox"  value = "<?php echo $fetch['candidate_id'] ?>" name = "depfinance_id" class = "depfinance"></center>
						</div></center>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>
	 <div class="col-md-4 col-md-offset-4">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>WELFARE MINISTER</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Welfare minister'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
					<center>	<div id = "position">
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
							<center><h3 style="font-size:150%;color:black;font-weight:bold;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></h3></center>
                    <center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "welfare_id" class = "welfare"></center>
						</div></center>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>
	 <div class="col-md-4 col-md-offset-4">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>WOMEN AFFAIRS MINISTER</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Women Affairs'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
					<center>	<div id = "position">
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
							<center><h3 style="font-size:150%;color:black;font-weight:bold;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></h3></center>
                    <center><input type = "checkbox"  value = "<?php echo $fetch['candidate_id'] ?>" name = "women_id" class = "women"></center>
						</div></center>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>
	<div class="col-md-4 col-md-offset-4">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>SPORTS AND ENTERTAINMENT MINISTER	</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Sports & Entertainment'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
					<center>	<div id = "position">
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
							<center><h3 style="font-size:150%;color:black;font-weight:bold;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></h3></center>
                    	<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "sport_id" class = "sports"></center>
						</div></center>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>
	<div class="col-md-4 col-md-offset-4">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>DEPUTY SPORTS AND ENTERTAINMENT MINISTER</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Deputy Sports'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
					<center>	<div id = "position">
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
							<center><h3 style="font-size:150%;color:black;font-weight:bold;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></h3></center>
                    	<center><input type = "checkbox"  value = "<?php echo $fetch['candidate_id'] ?>" name = "depsport_id" class = "depsport"></center>
						</div></center>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>
	
	 <div class="col-md-4 col-md-offset-4">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>INFORMATION AND PUBLICITY MINISTER</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Information and publicity'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
					<center>	<div id = "position">
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
							<center><h3 style="font-size:150%;color:black;font-weight:bold;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></h3></center>
                    <center><input type = "checkbox"  value = "<?php echo $fetch['candidate_id'] ?>" name = "info_id" class = "info"></center>
						</div></center>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>
	<div class="col-md-4 col-md-offset-4">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>CHIEF ADVISOR</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Chief Advisor'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
					<center>	<div id = "position">
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
							<center><h3 style="font-size:150%;color:black;font-weight:bold;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></h3></center>
                    
							<center><input type = "checkbox"  value = "<?php echo $fetch['candidate_id'] ?>" name = "chief_id" class = "chief"></center>
						</div></center>
	
				<?php
					}
				?>     
        </div>
     </div>
			
		</form>
		
		<center>	<button class = "btn btn-success ballot" type = "submit" name = "submit">Submit Ballot</button>	
	
				</center>
		
</body>
<?php include ('script.php')?>
  
  <script type = "text/javascript">
		$(document).ready(function(){
			$(".president").on("change", function(){
				if($(".president:checked").length == 1)
					{
						$(".president").attr("disabled", "disabled");
						$(".president:checked").removeAttr("disabled");
					}
				else
					{
						$(".president").removeAttr("disabled");
					}
			});
			
			$(".vp").on("change", function(){
				if($(".vp:checked").length == 1)
					{
						$(".vp").attr("disabled", "disabled");
						$(".vp:checked").removeAttr("disabled");
					}
				else
					{
						$(".vp").removeAttr("disabled");
					}
			});
			
			$(".speaker").on("change", function(){
				if($(".speaker:checked").length == 1)
					{
						$(".speaker").attr("disabled", "disabled");
						$(".speaker:checked").removeAttr("disabled");
					}
				else
					{
						$(".speaker").removeAttr("disabled");
					}
			});
			
			$(".depspeaker").on("change", function(){
				if($(".depspeaker:checked").length == 1)
					{
						$(".depspeaker").attr("disabled", "disabled");
						$(".depspeaker:checked").removeAttr("disabled");
					}
				else
					{
						$(".depspeaker").removeAttr("disabled");
					}
			});
			
			$(".gensec").on("change", function(){
				if($(".gensec:checked").length == 1)
					{
						$(".gensec").attr("disabled", "disabled");
						$(".gensec:checked").removeAttr("disabled");
					}
				else
					{
						$(".gensec").removeAttr("disabled");
					}
			});
			
			$(".cr").on("change", function(){
				if($(".cr:checked").length == 1)
					{
						$(".cr").attr("disabled", "disabled");
						$(".cr:checked").removeAttr("disabled");
					}
				else
					{
						$(".cr").removeAttr("disabled");
					}
				
			});
			$(".finance").on("change", function(){
				if($(".finance:checked").length == 1)
					{
						$(".finance").attr("disabled", "disabled");
						$(".finance:checked").removeAttr("disabled");
					}
				else
					{
						$(".finance").removeAttr("disabled");
					}
			});
			$(".welfare").on("change", function(){
				if($(".welfare:checked").length == 1)
				{
					$(".welfare").attr("disabled", "disabled");
					$(".welfare:checked").removeAttr("disabled");
				}
			else
				{
					$(".welfare").removeAttr("disabled");
				}
			});
			$(".women").on("change", function(){
				if($(".women:checked").length == 1)
				{
					$(".women").attr("disabled", "disabled");
					$(".women:checked").removeAttr("disabled");
				}
			else
				{
					$(".women").removeAttr("disabled");
				}
			});
			$(".sport").on("change", function(){
				if($(".sport:checked").length == 1)
				{
					$(".sport").attr("disabled", "disabled");
					$(".sport:checked").removeAttr("disabled");
				}
			else
				{
					$(".sport").removeAttr("disabled");
				}
			});
			$(".depsport").on("change", function(){
				if($(".depsport:checked").length == 1)
				{
					$(".depsport").attr("disabled", "disabled");
					$(".depsport:checked").removeAttr("disabled");
				}
			else
				{
					$(".depsport").removeAttr("disabled");
				}
			});
			$(".info").on("change", function(){
				if($(".info:checked").length == 1)
				{
					$(".info").attr("disabled", "disabled");
					$(".info:checked").removeAttr("disabled");
				}
			else
				{
					$(".info").removeAttr("disabled");
				}
			});
			$(".chief").on("change", function(){
				if($(".chief:checked").length == 1)
				{
					$(".chief").attr("disabled", "disabled");
					$(".chief:checked").removeAttr("disabled");
				}
			else
				{
					$(".chief").removeAttr("disabled");
				}
			});
		});	
	</script>
</html>

