<table border="1">
<tr>
<td>id</td>
<td>parent_id</td>
<td>Họ và Tên</td>
<td>Email</td>
<td>Phone</td>
<td>Bộ Môn</td>
<td>Chức Vụ</td>
<td>Mô Tả</td>
<td>Thumbnail</td>
</tr>
<?php
require 'connect.php';
$query=mysqli_query($conn,"select * from `tbl_giangvien`");
while($row=mysqli_fetch_array($query)){
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['parent_id']; ?></td>
<td><?php echo $row['hovaten']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['sdt']; ?></td>
<td><?php echo $row['bomon']; ?></td>
<td><?php echo $row['chucvu']; ?></td>
<td><?php echo $row['mota']; ?></td>
<td><?php echo $row['thumbnail']; ?></td>
<td><a href="/DHTL/edit_giangvien.php?id=<?php echo $row['id']; ?>">Edit</a></td>
<td><a href="/DHTL/delete_giangvien.php?id=<?php echo $row['id']; ?>">Delete</a></td>
</tr>
<?php
}
?>
</table>