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
$query=mysqli_query($conn,"select * from `tbl_admin` where id='$id'");
$row=mysqli_fetch_assoc($query);
?>
<form method="POST" class="form">
<h2>Sửa thành viên</h2>
<label>Username: <input type="text" value="<?php echo $row['username']; ?>" name="username"></label><br/>
<label>Email: <input type="text" value="<?php echo $row['email']; ?>" name="email"></label><br/>
<input type="submit" value="Update" name="update_user">
<?php
if (isset($_POST['update_user'])){
$id=$_GET['id'];
$username=$_POST['username'];
$email=$_POST['email'];

// Create connection
$conn = mysqli_connect('localhost','root','','dhtl','3306');
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE `tbl_admin` SET username='$username', email='$email', WHERE id='$id'";

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