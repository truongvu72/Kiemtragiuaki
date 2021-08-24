<?php
$conn = mysqli_connect('localhost','root','','dhtl','3306');
if(!$conn){
	die('Khong the ket noi DB');
	};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quản Trị Hệ Thống</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="css/quantri.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="header">
          <div class="title col-md-6"> 
           <a href=""><img src="https://upload.wikimedia.org/wikipedia/vi/b/bc/Logo-Thuy_Loi.png" alt="" style="width:60px; height:60px"></a>
            <a class="navbar-brand" href="#">Quản Trị Cán Bộ Giang Viên</a></div>
        <div class="ad_logout col-md-5">
           <ul  class="navbar-nav">
            
               <!-- Dropdown -->
               <li class="nav-item ">
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                     Admin
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                   
                     <a class="dropdown-item" href="">Profile</a><hr>
                     <a class="dropdown-item" href="">Help</a> 
                     <a class="dropdown-item" href="">Setting</a>
                     <a class="dropdown-item" href="../index.php">Log out</a>
                  </div>
                </li>
            </ul>
        </div>
       </div>           
        
           <div class="content">  
             <div class="content-left">  
               <ul>
                  <li class="nav-item1">
                     <a href="#">
                        <i class="fa fa-home"> Trang chủ </i>
                     </a>
                                       
                   </li> <hr>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="fa fa-list"> Quản trị Đơn Vị </i> 
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="../view_khoa.php">Danh Sách Khoa</a>
                         <a class="dropdown-item" href="../edit_khoa.php">Thêm Khoa</a>
                         <a class="dropdown-item" href="../edit_khoa.php">Sửa thông tin Khoa</a>
                         <a class="dropdown-item" href="../delete_khoa.php">Xóa Khoa</a>
                        </div>
                     </li><hr>
                     <li class="nav-item dropdown">
                       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <i class="fa fa-image"> Quản Trị Tài Khoản</i> 
                       </a>
                       <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                         <a class="dropdown-item" href="../view_user.php">Danh Sách Tài Khoản</a>
                         <a class="dropdown-item" href="../edit_user.php">Thêm Tài Khoản</a>
                         <a class="dropdown-item" href="../edit_user.php">Sửa thông tin Tài Khoản</a>
                         <a class="dropdown-item" href="../delete_user.php">Xóa Tài Khoản</a>                                       
                       </div></li><hr>
                       <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-users"> Quản trị Giảng Viên</i> 
                         </a>
                       <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                         <a class="dropdown-item" href="../view_giangvien.php">Danh Sách Giảng Viên</a>
                         <a class="dropdown-item" href="../edit_giangvien.phpp">Thêm giảng viên</a>
                         <a class="dropdown-item" href="../edit_giangvien.php">Sửa thông tin Giang Viên</a>
                         <a class="dropdown-item" href="../delete_khoa.php">Xóa Giang Viên</a>
                       </div></li>
               </ul>
                                   
             </div>
                   <div class="content-right">
                            
                    </div>          
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    
</body>
</html>