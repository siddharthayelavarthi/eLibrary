<?php 
include('dbcon.php');
if (isset($_POST['submit'])){
$id=$_POST['id'];
$book_title=$_POST['book_title'];
$author=$_POST['author'];
$edition=$_POST['edition'];
$book_copies=$_POST['book_copies'];
$publisher_name=$_POST['publisher_name'];
$status=$_POST['status'];
$dept=$_POST['dept'];

mysql_query("update book set book_title='$book_title',author='$author',edition='$edition',book_copies = '$book_copies',publisher_name = '$publisher_name',status='$status',dept='$dept' where book_id='$id'")or die(mysql_error());
		
 header('location:books.php');
}
?>	