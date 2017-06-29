<?php 
include('dbcon.php');
if (isset($_POST['submit'])){
$username=$_POST['username'];
$password=$_POST['password'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$type=$_POST['type'];
$dept=$_POST['dept'];
$year=$_POST['year'];

mysql_query("insert into member(username,password,firstname,lastname,gender,address,contact,type,dept,year) values('$username','$password','$firstname','$lastname','$gender','$address','$contact','$type','$dept','$year')")or die(mysql_error());

header('location:member.php');
}
?>	