<?php 
include('dbcon.php');
if (isset($_POST['submit'])){
$book_title=$_POST['book_title'];
$author=$_POST['author'];
$edition=$_POST['edition'];
$book_copies=$_POST['book_copies'];
$publisher_name=$_POST['publisher_name'];
$status=$_POST['status'];
$dept=$_POST['dept'];
							
mysql_query("insert into book(book_title,author,edition,book_copies,publisher_name,status,dept)
 values('$book_title','$author','$edition','$book_copies','$publisher_name','$status','$dept')")or die(mysql_error());
header('location:books.php');
}
?>	