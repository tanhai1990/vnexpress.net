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
<!-- Xóa thể loại -->
<?php
if(isset($_GET['idTL'])){
    $idTL = $_GET['idTL'];
    $dt->Command("
        DELETE FROM theloai WHERE idTL = '$idTL';
    ");
    header('location:./listTheLoai.php');
}
?>
<!-- End Xóa thể loại -->
</body>
</html>