<?php
//$conn=mysqli_connect('mysql.hostinger.vn','u817980083_nhan','tiep290696','u817980083_diem');
$conn=mysqli_connect('localhost','root','Lam22062002@','quan_ly_hoc_sinh');
if(mysqli_connect_errno() !== 0){
	die("Không Thể Kết Nối Tới CSDL".mysqli_connect_errno);
}
mysqli_set_charset($conn,'utf8');
?>