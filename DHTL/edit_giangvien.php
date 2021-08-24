<!DOCTYPE html>
<html>
<head>
<title>Editing MySQL Data</title>
<link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
// Kết nối Database
include 'connect.php';
$id=$_GET['id'];
$query=mysqli_query($conn,"select * from `tbl_giangvien` where id='$id'");
$row=mysqli_fetch_assoc($query);
?>
<form method="POST" class="form">
<h2>Sửa Thông Tin</h2>
<label>Họ và tên: <input type="text" value="<?php echo $row['hovaten']; ?>" name="hovaten"></label><br/>
<label>Email: <input type="text" value="<?php echo $row['email']; ?>" name="email"></label><br/>
<label>Số Điện Thoại: <input type="text" value="<?php echo $row['sdt']; ?>" name="sdt"></label><br/>
<label>Bộ Môn: <input type="text" value="<?php echo $row['bomon']; ?>" name="bomon"></label><br/>
<label>Chức Vụ: <input type="text" value="<?php echo $row['chucvu']; ?>" name="chucvu"></label><br/>
<label>Mô tả: <input type="text" value="<?php echo $row['mota']; ?>" name="mota"></label><br/>
<label>Link ảnh: <input type="text" value="<?php echo $row['thumbnail']; ?>" name="thumbnail"></label><br/>
<input type="submit" value="Update" name="update_giangvien">
<?php
if (isset($_POST['update_giangvien'])){
$id=$_GET['id'];
$parent_id=$_GET['parent_id'];
$hovaten=$_POST['hovaten'];
$email=$_POST['email'];
$sdt=$_POST['sdt'];
$bomon=$_POST['bomon'];
$chucvu=$_POST['chucvu'];
$mota=$_POST['mota'];
$thumbnail=$_POST['thumbnail'];

// Create connection
$conn = mysqli_connect('localhost','root','','dhtl','3306');
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE `tbl_giangvien` SET hovaten='$hovaten', email='$email', sdt='$sdt', bomon='$bomon', chucvu='$chucvu', mota='$mota', thumbnail='$thumbnail' WHERE id='$id' parent_id='$parent_id'";

if ($conn->query($sql) === TRUE) {
echo "Record updated successfully";
} else {
echo "Error updating record: " . $conn->error;
}

$conn->close();
}
?>
?>
</form>
</body>
</html>