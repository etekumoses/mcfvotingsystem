<?php include ('head.php');?>
<?php include ('sess.php');?>

<body>
	
    	<div id="row">
        	<?php 
			include ('side_bar.php');
			if(ISSET($_POST['submit']))
				{
					if(!ISSET($_POST['pres_id']))
					{
						$_SESSION['pres_id'] = "";
					}
					else
					{
						$_SESSION['pres_id'] = $_POST['pres_id'];
					}
					if(!ISSET($_POST['vp_id']))
					{
						$_SESSION['vp_id'] = "";
					}
					else
					{
						$_SESSION['vp_id'] = $_POST['vp_id'];
					}
					if(!ISSET($_POST['speaker_id']))
					{
						$_SESSION['speaker_id'] = "";
					}
					else
					{
						$_SESSION['speaker_id'] = $_POST['speaker_id'];
					}
					if(!ISSET($_POST['dpspeaker_id']))
					{
						$_SESSION['dpspeaker_id'] = "";
					}
					else
					{
						$_SESSION['dpspeaker_id'] = $_POST['dpspeaker_id'];
					}
					if(!ISSET($_POST['gensec_id']))
					{
						$_SESSION['gensec_id'] = "";
					}
					else
					{
						$_SESSION['gensec_id'] = $_POST['gensec_id'];
					}
					if(!ISSET($_POST['cr_id']))
					{
						$_SESSION['cr_id'] = "";
					}
					else
					{
						$_SESSION['cr_id'] = $_POST['cr_id'];
					}
					if(!ISSET($_POST['finance_id']))
					{
						$_SESSION['finance_id'] = "";
					}
					else
					{
						$_SESSION['finance_id'] = $_POST['finance_id'];
					}
					if(!ISSET($_POST['depfinance_id']))
					{
						$_SESSION['depfinance_id'] = "";
					}
					else
					{
						$_SESSION['depfinance_id'] = $_POST['depfinance_id'];
					}
					if(!ISSET($_POST['welfare_id']))
					{
						$_SESSION['welfare_id'] = "";
					}
					else
					{
						$_SESSION['welfare_id'] = $_POST['welfare_id'];
					}
					if(!ISSET($_POST['women_id']))
					{
						$_SESSION['women_id'] = "";
					}
					else
					{
						$_SESSION['women_id'] = $_POST['women_id'];
					}
					if(!ISSET($_POST['sport_id']))
					{
						$_SESSION['sport_id'] = "";
					}
					else
					{
						$_SESSION['sport_id'] = $_POST['sport_id'];
					}
					if(!ISSET($_POST['depsport_id']))
					{
						$_SESSION['depsport_id'] = "";
					}
					else
					{
						$_SESSION['depsport_id'] = $_POST['depsport_id'];
					}
					if(!ISSET($_POST['info_id']))
					{
						$_SESSION['info_id'] = "";
					}
					else
					{
						$_SESSION['info_id'] = $_POST['info_id'];
					}
					if(!ISSET($_POST['chief_id']))
					{
						$_SESSION['chief_id'] = "";
					}
					else
					{
						$_SESSION['chief_id'] = $_POST['chief_id'];
					}
				}
		?>
    	</div>
			<center>
		  <div class="col-md-4 col-md-offset-4" style = "" >
		  	<div class = "alert alert-info">
			<label>PRESIDENT</label>
			<br />
			<?php
				if(!$_SESSION['pres_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[pres_id]'")->fetch_array();
						
						echo   "<img src = 'admin/".$fetch['img']."' style = 'height:100px; width:100px; border-radius:10px; padding: 10px; ' />" .$fetch['firstname'] ."".$fetch['lastname']; 
					}
			?>
			</div>
			
			<div class = "alert alert-info">
			<label>VICE PRESIDENT</label>
			<br/>
			<?php
				if(!$_SESSION['vp_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[vp_id]'")->fetch_array();
						echo   "<img src = 'admin/".$fetch['img']."' style = 'height:100px; width:100px; border-radius:10px; padding: 10px; ' />" .$fetch['firstname'] ."".$fetch['lastname']; 
						}
			?>
				
			</div>
			<div class = "alert alert-success" >
			<label>SPEAKER</label>
			<br />
			<?php
				if(!$_SESSION['speaker_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[speaker_id]'")->fetch_array();
						echo   "<img src = 'admin/".$fetch['img']."' style = 'height:100px; width:100px; border-radius:10px; padding: 10px; ' />" .$fetch['firstname'] ."".$fetch['lastname']; 
					}
			?>
			
			</div>
			<div class = "alert alert-info">
			
			<label>DEPUTY SPEAKER</label>
			<br />
			<?php
				if(!$_SESSION['dpspeaker_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[depspeaker_id]'")->fetch_array();
						echo   "<img src = 'admin/".$fetch['img']."' style = 'height:100px; width:100px; border-radius:10px; padding: 10px; ' />" .$fetch['firstname'] ."".$fetch['lastname']; 
				}
			?>
			
			</div>
			<div class = "alert alert-success">
			<label>GENERAL SECRETARY</label>
			<br />
			<?php
				if(!$_SESSION['gensec_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[gensec_id]'")->fetch_array();
						echo   "<img src = 'admin/".$fetch['img']."' style = 'height:100px; width:100px; border-radius:10px; padding: 10px; ' />" .$fetch['firstname'] ."".$fetch['lastname']; 
					}
			?>
			
			</div>
			<div class = "alert alert-info" >
			<label>SCHOLARS' COUNCIL REPRESENTATIVE</label>
			<br />
			<?php
				if(!$_SESSION['cr_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[cr_id]'")->fetch_array();
						echo   "<img src = 'admin/".$fetch['img']."' style = 'height:100px; width:100px; border-radius:10px; padding: 10px; ' />" .$fetch['firstname'] ."".$fetch['lastname']; 
					}
			?>
			</div>
			<div class = "alert alert-success">
			<label>FINANCE MINISTER</label>
			<br />
			<?php
				if(!$_SESSION['finance_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[finance_id]'")->fetch_array();
						echo   "<img src = 'admin/".$fetch['img']."' style = 'height:100px; width:100px; border-radius:10px; padding: 10px; ' />" .$fetch['firstname'] ."".$fetch['lastname']; 
					}
			?>
				
			</div>
			<div class = "alert alert-info">
			<label>DEPUTY FINANCE MINISTER</label>
			<br />
			<?php
				if(!$_SESSION['finance_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[finance_id]'")->fetch_array();
						echo   "<img src = 'admin/".$fetch['img']."' style = 'height:100px; width:100px; border-radius:10px; padding: 10px; ' />" .$fetch['firstname'] ."".$fetch['lastname']; 
					}
			?>
			
			</div>
			<div class = "alert alert-success">
			<label>WELFARE MINISTER</label>
			<br />
			<?php
				if(!$_SESSION['welfare_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[welfare_id]'")->fetch_array();
						echo   "<img src = 'admin/".$fetch['img']."' style = 'height:100px; width:100px; border-radius:10px; padding: 10px; ' />" .$fetch['firstname'] ."".$fetch['lastname']; 
					}
			?>
			
			</div>
		<div class = "alert alert-info">
			<label>WOMEN AFFAIRS MINISTER</label>
			<br />
			<?php
				if(!$_SESSION['women_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[women_id]'")->fetch_array();
						echo   "<img src = 'admin/".$fetch['img']."' style = 'height:100px; width:100px; border-radius:10px; padding: 10px; ' />" .$fetch['firstname'] ."".$fetch['lastname']; 
					}
			?>
			
			</div>
			<br />
		<div class = "alert alert-info">
			<label>SPORTS AND ENTERTAINMENT MINISTER</label>
			<br />
			<?php
				if(!$_SESSION['sport_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[sport_id]'")->fetch_array();
						echo   "<img src = 'admin/".$fetch['img']."' style = 'height:100px; width:100px; border-radius:10px; padding: 10px; ' />" .$fetch['firstname'] ."".$fetch['lastname']; 
					}
			?>
			
			</div>
			<br />
		<div class = "alert alert-info">
			<label>DEPUTY SPORTS AND ENTERTAINMENT MINISTER</label>
			<br />
			<?php
				if(!$_SESSION['depsport_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[depsport_id]'")->fetch_array();
						echo   "<img src = 'admin/".$fetch['img']."' style = 'height:100px; width:100px; border-radius:10px; padding: 10px; ' />" .$fetch['firstname'] ."".$fetch['lastname']; 
					}
			?>
			
			</div>
			<br />
		<div class = "alert alert-info">
			<label>INFORMATION AND PUBLICITY MINISTER</label>
			<br />
			<?php
				if(!$_SESSION['info_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[info_id]'")->fetch_array();
						echo   "<img src = 'admin/".$fetch['img']."' style = 'height:100px; width:100px; border-radius:10px; padding: 10px; ' />" .$fetch['firstname'] ."".$fetch['lastname']; 
					}
			?>
			
			</div>
			<br />
		<div class = "alert alert-info">
			<label>CHIEF ADVISOR</label>
			<br />
			<?php
				if(!$_SESSION['chief_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[chief_id]'")->fetch_array();
						echo   "<img src = 'admin/".$fetch['img']."' style = 'height:100px; width:100px; border-radius:10px; padding: 10px; ' />" .$fetch['firstname'] ."".$fetch['lastname']; 
					}
			?>
			
			</div>
			<br />
			<button type = "submit" data-toggle = "modal" data-target = "#result" class = "btn btn-success" >Submit Final Vote</button>
		</div>
		</center>
				<div class="modal fade" id = "result" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
											<h4 class="modal-title" id="myModalLabel">         
												
											</h4>
										</div>
										
										
                                        <div class="modal-body">
										<p class = "alert alert-danger">Are you sure you want to submit your Votes? </p>
                                    </div>
									
									<div class="modal-footer">
								<a href = "submit_vote.php"><button type = "submit" class="btn btn-success"><i class="icon-check"></i>&nbsp;Yes</button></a>
								<a href = "vote.php"><button class="btn btn-danger" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Back</button></a>
									</div>
									</div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
</body>
<?php include ('script.php')?>
</html>

