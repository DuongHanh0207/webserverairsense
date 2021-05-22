<?php
$hostname="103.1.238.170";
$username="root";
$password="SPARCLab1";
$dbname="admin_python";

$conn = new PDO("mysql:host=$hostname;dbname=$dbname;", $username, $password);
// Kiểm tra kết nối
if ( !$conn ) {  
    die ( "Kết nối không thành công:" . mysqli_connect_error ()) ;
}
echo "Đã kết nối thành công" ;

?>
 
