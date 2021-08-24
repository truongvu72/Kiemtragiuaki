<!DOCTYPE html>
<html>
<head>
<title>Editing MySQL Data</title>
<link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
// Kết nối Database
include ('connect.php');
$id=$_GET['id'];
$query=mysqli_query($conn,"select * from `tbl_khoa` where id='$id'");
$row=mysqli_fetch_assoc($query);
?>
<form method="POST" class="form">
<h2>Update</h2>
<label>Tên Khoa: <input type="text" value="<?php echo $row['tenkhoa']; ?>" name="tenkhoa"></label><br/>
<label>Máy Trực: <input type="text" value="<?php echo $row['maytruc']; ?>" name="maytruc"></label><br/>
<label>Địa Chỉ: <input type="text" value="<?php echo $row['diachi']; ?>" name="diachi"></label><br/>
<input type="submit" value="Update" name="update_khoa">
<?php
if (isset($_POST['update_khoa'])){
$id=$_GET['id'];
$tenkhoa=$_POST['tenkhoa'];
$maytruc=$_POST['maytruc'];
$diachi=$_POST['diachi'];

// Create connection
$conn = mysqli_connect('localhost','root','','dhtl','3306');
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE `tbl_khoa` SET tenkhoa='$tenkhoa', maytruc='$maytruc', diachi='$diachi' WHERE id='$id'";

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