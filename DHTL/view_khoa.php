<table border="1">
<tr>
<td>ID</td>
<td>Tên Khoa</td>
<td>Máy Trực</td>
<td>Địa Chỉ</td>
</tr>
<?php
require 'connect.php';
$query=mysqli_query($conn,"select * from `tbl_khoa`");
while($row=mysqli_fetch_array($query)){
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['tenkhoa']; ?></td>
<td><?php echo $row['maytruc']; ?></td>
<td><?php echo $row['diachi']; ?></td>
<td><a href="edit_khoa.php?id=<?php echo $row['id']; ?>">Edit</a></td>
<td><a href="delete_khoa.php?id=<?php echo $row['id']; ?>">Delete</a></td>
</tr>
<?php
}
?>
</table>