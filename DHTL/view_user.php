<table border="1">
<tr>
<td>ID</td>
<td>Username</td>
<td>Email</td>
</tr>
<?php
require 'connect.php';
$query=mysqli_query($conn,"select * from `tbl_admin`");
while($row=mysqli_fetch_array($query)){
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['username']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><a href="edit_user.php?id=<?php echo $row['id']; ?>">Edit</a></td>
<td><a href="delete_user.php?id=<?php echo $row['id']; ?>">Delete</a></td>
</tr>
<?php
}
?>
</table>