<?php
session_start();
if(isset($_SESSION["idUser"]) && $_SESSION["idGroup"]!=1){
    header('location:../index.php');
}
require "../lib/dbconnect.php";
$dt = new Database;
?>
<!-- Thêm thể loại -->
<?php
if(isset($_POST["btnThem"])){
    $tenTheLoai = $_POST["txtTheLoai"];
    $tenTheLoai_KhongDau = $dt->changeTitle($tenTheLoai);
    $thuTu = $_POST["txtThuTu"];
    settype($thuTu, "int");
    $AnHien = $_POST["radAnHien"];
    settype($AnHien, "int");
    $dt->Command("
        INSERT INTO theloai
        VALUES(null, '$tenTheLoai', '$tenTheLoai_KhongDau', '$thuTu', '$AnHien');
    ");
    header('location:./listTheLoai.php');
}
?>
<!-- End Thêm thể loại -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang quản trị</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="../css/style.css"/>
</head>
<body>
    <div id="PageAdmin" class="container">
        <h3>TRANG QUẢN TRỊ</h3>
        <p>Hello <strong><?php echo $_SESSION['HoTen']; ?></strong></p>
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-2"><a href="./index.php"><span class="glyphicon glyphicon-home"></span> Trang chủ</a></div>
            <div class="col-sm-2"><a href="./listTheLoai.php"><span class="glyphicon glyphicon-paste"></span> Quản lý thể loại</a></div>
            <div class="col-sm-2"><a href="./listLoaiTin.php"><span class="glyphicon glyphicon-education"></span> Quản lý loại tin</a></div>
            <div class="col-sm-2"><a href="./listTinTuc.php"><span class="glyphicon glyphicon-book"></span> Quản lý tin tức</a></div>
            <div class="col-sm-2"><a href="./listQuangCao.php"><span class="glyphicon glyphicon-calendar"></span> Quản lý quảng cáo</a></div>
            <div class="col-sm-1"></div>
        </div>
    </div>

    <div id="ThemTheLoai" class="container">
        <h3>THÊM THỂ LOẠI</h3>
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="txtTheLoai">Thể loại:</label>
                        <input type="text" class="form-control" name="txtTheLoai" placeholder="Nhập thể loại">
                    </div>
                    <div class="form-group">
                        <label for="txtThuTu">Thứ tự:</label>
                        <input type="text" class="form-control" name="txtThuTu" placeholder="Nhập thứ tự">
                    </div>
                    <div class="form-group">
                        <label for="">Ẩn Hiện:</label>
                        <label for="radAnHien">Ẩn:</label>
                        <input type="radio" name="radAnHien" value="0" checked="checked">
                        <label for="radHien">Hiện:</label>
                        <input type="radio" name="radAnHien" value="1">
                    </div>
                    <button type="submit" class="btn btn-primary" name="btnThem" style="width: 100px">Thêm</button>
                    <button type="submit" class="btn btn-primary" name="btnThoat" style="width: 100px">Thoát</button>
                </form>
            </div>
            <div class="col-sm-4"></div>
        </div>
        
    </div>
</body>
</html>