<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_dashboard.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		<?php 
		$query=mysql_query("select * from member where member_id='$get_id'")or die(mysql_error());
		$row=mysql_fetch_array($query);
		
		?>
             <div class="alert alert-info"><i class="icon-pencil"></i>&nbsp;Edit Member</div>
			<p><a class="btn btn-info" href="member.php"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a></p>
	<div class="addstudent">
	<div class="details">Please Enter Details Below</div>	
	<form class="form-horizontal" method="POST" action="update_member.php" enctype="multipart/form-data">
		
		<div class="control-group">
			<label class="control-label" for="inputPassword">Username:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="username" value="<?php echo $row['username']; ?>" placeholder="Gender" required>
			</div>
		</div>	
		<div class="control-group">
			<label class="control-label" for="inputPassword">Password:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="password" value="<?php echo $row['password']; ?>" placeholder="Gender" required>
			</div>
		</div>		
		<div class="control-group">
			<label class="control-label" for="inputEmail">Firstname:</label>
			<div class="controls">
			<input type="text" id="inputEmail" name="firstname" value="<?php echo $row['firstname']; ?>" placeholder="Firstname" required>
			<input type="hidden" id="inputEmail" name="id" value="<?php echo $get_id;  ?>" placeholder="Firstname" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Lastname:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="lastname" value="<?php echo $row['lastname']; ?>" placeholder="Lastname" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Gender:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="gender" value="<?php echo $row['gender']; ?>" placeholder="Gender" required>
			</div>
		</div>	
		<div class="control-group">
			<label class="control-label" for="inputPassword">Adddress:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="address" value="<?php echo $row['address']; ?>" placeholder="Address" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Contact:</label>
			<div class="controls">
			<input type='tel' class="search" name="contact" value="<?php echo $row['contact']; ?>" placeholder="Phone Number"  autocomplete="off"  maxlength="11" >
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Type:</label>
			<div class="controls">
			<select name="type" required>
				<option><?php echo $row['type']; ?></option>
				<option>Student</option>
				<option>Teacher</option>
			</select>
			</div>
		</div>
			
		<div class="control-group">
			<label class="control-label" for="inputPassword">Dept:</label>
			<div class="controls">
				<select name="dept">
					<option> </option>
					<option>AUTO</option>
					<option>CIV</option>
					<option>CSE</option>
					<option>EEE</option>
					<option>ECE</option>
					<option>IT</option>
					<option>MEC</option>
				</select>	
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="inputPassword">Year:</label>
			<div class="controls">
				<select name="year" required>	
					<option> </option>		
					<option>BE 1/4</option>
					<option>BE 2/4</option>
					<option>BE 3/4</option>
					<option>BE 4/4</option>
					<option>Faculty</option>
				</select>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputPassword">Status:</label>
			<div class="controls">
			<select name="status" required>
				<option><?php  echo $row['status']; ?></option>
				<option>Active</option>
				<option>Banned</option>
			</select>
			</div>
		</div>
		
		<div class="control-group">
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
			</div>
		</div>
    </form>				
			</div>		
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>