<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_books.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
				<div class="span12">	
			   <div class="alert alert-info">
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Books Table</strong>
                                </div>
						<!--  -->
								    <ul class="nav nav-pills">
										<li><a href="books.php">All</a></li>
										<li class="active"><a href="my_books.php">Borrowed Books</a></li>
										<li><a href="new_books.php">New Books</a></li>
										<li><a href="old_books.php">Old Books</a></li>
										<li><a href="lost.php">Lost Books</a></li>
										<li><a href="damage.php">Damaged Books</a></li>
									</ul>
						<!--  -->
						<center class="title">
						<h1>New Books</h1>
						</center>
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                                <thead>
                                    <tr>
									    <th>Book title</th>                                 
                                        <th>Borrower</th>                                 
                                        <th>Year</th>                                 
                                        <th>Date Borrow</th>                                 
                                        <th>Due Date</th>                                
                                        <th>Date Returned</th>
										<th>Borrow Status</th>
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  
                                  $user_query=mysql_query("select * from borrow
									LEFT JOIN member ON borrow.member_id = member.member_id
									LEFT JOIN borrowdetails ON borrow.borrow_id = borrowdetails.borrow_id
									LEFT JOIN book on borrowdetails.book_id =  book.book_id 
									ORDER BY borrow.borrow_id DESC
								  	")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['borrow_id'];
									$book_id=$row['book_id'];
									$borrow_details_id=$row['borrow_details_id'];
									?>
									<tr class="del<?php echo $id ?>">
                                    <td><?php echo $row['book_title']; ?></td>
                                    <td><?php echo $row['firstname']." ".$row['lastname']; ?></td>
                                    <td><?php echo $row['year']; ?></td>
									<td><?php echo $row['date_borrow']; ?></td> 
                                    <td><?php echo $row['due_date']; ?> </td>
									<td><?php echo $row['date_return']; ?> </td>
									<td><?php echo $row['borrow_status'];?></td>
                                    </tr>	
									<?php  }  ?>
                                </tbody>
                            </table>
							
			
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>