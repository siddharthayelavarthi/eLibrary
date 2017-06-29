<?php 
include('dbcon.php');
if (isset($_POST['submit'])){
$id=$_POST['id'];
$username=$_POST['username'];
$password=$_POST['password'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$type=$_POST['type'];
$year=$_POST['year'];
$dept=$_POST['dept'];
$status=$_POST['status'];

mysql_query("update member set username='$username', password='$password', firstname='$firstname',lastname='$lastname',gender='$gender',address = '$address',contact = '$contact',type = '$type',year = '$year', dept='$dept', status = '$status' where member_id='$id'")or die(mysql_error());
								
header('location:member.php');
}
?>	