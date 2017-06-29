<?php include('header.php'); ?>
<?php include('navbar_books.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">
				<div class="login">
				<div class="log_txt">
				<p align="center"><strong>Import Books using Excel Sheet</strong></p>
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
								$book_title= $filesop[0];
								$author= $filesop[1];
								$edition= $filesop[2];
								$book_copies= $filesop[3];
								$publisher_name= $filesop[4];
								$status= $filesop[5];
								$dept= $filesop[6];
								$c = $c + 1;
								if($c>1){
								$sql = mysql_query("insert into book(book_title,author,edition,book_copies,publisher_name,status,dept) values('$book_title','$author','$edition','$book_copies','$publisher_name','$status','$dept')");
								}
								}

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