<?php include('header.php'); ?>
<?php include('navbar_member.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">
				<div class="login">
				<div class="log_txt">
				<p align="center"><strong>Import Members using Excel Sheet</strong></p>
				</div>
								
						<form class="form-horizontal" name="import" method="POST" enctype="multipart/form-data">
								<div class="control-group">
								<div class="controls">
									<input type="file" name="file" /><br />
									<input type="submit" name="submit" value="Submit" />
								</div>
								</div>
								
								
								<?php
								if(isset($_POST["submit"]))
								{
								$file = $_FILES['file']['tmp_name'];
								$handle = fopen($file, "r");
								$c = 0;
								while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
								{
								$rollno = $filesop[0];
								$username = $filesop[1];
								$password = $filesop[2];
								$firstname = $filesop[3];
								$lastname = $filesop[4];
								$gender = $filesop[5];
								$address = $filesop[6];
								$contact = $filesop[7];
								$type = $filesop[8];
								$dept = $filesop[9];
								$year = $filesop[10];
								$c = $c + 1;
								if($c>1){
								$sql = mysql_query("insert into member(username,password,firstname,lastname,gender,address,contact,type,dept,year) values('$username','$password','$firstname','$lastname','$gender','$address','$contact','$type','$dept','$year')");
								}
								}
								$c=$c-1;
								if($sql){
								str_repeat('&nbsp;', 10);
								echo "<p>&nbsp;&nbsp;&nbsp;&nbsp;You database has imported successfully. You have inserted ". $c ." recoreds";
								}else{
								echo "Sorry! There is some problem.";
								}
								}
								?>
						</form>
				
				</div>
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>