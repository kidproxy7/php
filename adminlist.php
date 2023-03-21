<?php
include ('navbar.html');
include ('adminconnect.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>
      <?php
      if(!empty($_SESSION['adminid']))
      {
        echo "Welcome, ".$_SESSION['adminid'];
      } ?>
    </p>
    <center>
    <h1>Admin List</h1>
    <table cellpadding="5" cellspacing="0" border="1">
  		<tr>
      <th>No</th>
  		<th>Username</th>
  		<th>Password</th>
      <th>Bank Acc</th>
      <th colspan="2">Action</th>
  		</tr>
  		<?php
  			$query ="SELECT * FROM tbl_user";
  			$exec =mysqli_query($con,$query);
  			if(mysqli_num_rows($exec)>0)
        {
  				$i=1;
  				foreach ($exec as $row) {
  					?>
  					<tr>
  						<td><?php echo $i++;?>.</td>
  						<td><?php echo $row['user_uname']; ?></td>
  						<td><?php echo $row['user_password']; ?></td>
              <td><?php echo $row['user_bankaccount']; ?></td>
              <td><a href="edit.php?id=<?php echo $row['user_id']; ?>">Edit</a></td>
              <td><a href="deleteAdmin.php?id=<?php echo $row['user_id']; ?>">Delete</a></td>
  					</tr>
  				<?php }
  			}
  ?>
  	</table>
    </center>
  </body>
</html>
