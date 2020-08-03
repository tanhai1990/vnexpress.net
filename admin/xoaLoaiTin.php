<?php 
session_start();
if(isset($_SESSION["idUser"]) && $_SESSION["idGroup"]!=1){
    header('location:../index.php');
}
require "../lib/dbconnect.php";
$dt = new Database;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Xóa loại tin-->
<?php
if(isset($_GET['idLT'])){
    $idLT = $_GET['idLT'];
    $dt->Command("
        DELETE FROM loaitin WHERE idLT = '$idLT';
    ");
    header('location:./listLoaiTin.php');
}
?>
<!-- End Xóa loại tin-->
</body>
</html>