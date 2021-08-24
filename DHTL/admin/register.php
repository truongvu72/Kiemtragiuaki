<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="css/style.css"/>
</head>
<body>

<form method="post" action="register.php" class="form">

<h2>Đăng ký</h2>

Username: <input type="text" name="username" value="" required>

Email: <input type="email" name="email" value="" required/>

Password: <input type="text" name="password" value="" required/>

<input type="submit" name="dangky" value="Đăng Ký"/>
<?php require 'xulyregister.php';?>
</form>

</body>
</html>