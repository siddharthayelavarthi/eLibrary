<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_books.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
			   <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Books Table</strong>
                                </div>
						<!--  -->
								    <ul class="nav nav-pills">
										<li><a href="books.php">All</a></li>
										<li><a href="new_books.php">New Books</a></li>
										<li><a href="old_books.php">Old Books</a></li>
										<li><a href="lost.php">Lost Books</a></li>
										<li class="active"><a href="damage.php">Damage Books</a></li>
									</ul>
						<!--  -->
						<center class="title">
						<h1>Damage Books</h1>
						</center>
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
								<div class="pull-right">
								<a href="" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Print</a>
								</div>
								<p><a href="add_books.php" class="btn btn-success"><i class="icon-plus"></i>&nbsp;Add Books</a></p>
							
                                <thead>
                                    <tr>
									    <th>Acc No.</th>                                 
										<th>Book Title</th>
										<th>Author</th>
										<th>Edition</th>
										<th class="action">Available</th>
										<th>Publisher Name</th>
										<th>Department</th>
										<th>Status</th>	
										<th class="action">Action</th>		
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  $user_query=mysql_query("select * from book where status = 'Damage'")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['book_id'];
									$book_copies = $row['book_copies'];
									
									$borrow_details = mysql_query("select * from borrowdetails where book_id = '$id' and borrow_status = 'pending'");
									$row11 = mysql_fetch_array($borrow_details);
									$count = mysql_num_rows($borrow_details);
									
									$total =  $book_copies  -  $count; 
									?>
									<tr class="del<?php echo $id ?>">
									<td><?php echo $row['book_id']; ?></td>
									<td><?php echo $row['book_title']; ?></td>
									<td><?php echo $row['author']; ?> </td>
									<td><?php echo $row['edition']; ?></td>
									<td class="action"><?php echo /* $row['book_copies']; */   $total;   ?> </td>
									<td><?php echo $row['publisher_name']; ?></td>
									<td><?php echo $row['dept']; ?></td>
									<td><?php echo $row['status']; ?></td>
									<?php include('toolttip_edit_delete.php'); ?>
				                    <td class="action">
				                        <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>" href="#delete_book<?php echo $id; ?>" data-toggle="modal"    class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
				                        <?php include('delete_book_modal.php'); ?>
										<a  rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" href="edit_book.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
				                    </td>
				                    </tr>
									<?php  }  ?>
                           
                                </tbody>
                            </table>
							
			
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>