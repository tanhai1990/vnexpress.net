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

    <!-- Danh sach tin tức -->
    <div id="ListTinTuc" class="container">
        <h3>DANH SÁCH TIN TỨC</h3>
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 5%">STT</th>
                            <th style="width: 10%">Tiêu Đề</th>
                            <th style="width: 18%">Tóm tắt</th>
                            <th style="width: 10%">Url Hình</th>
                            <th style="width: 5%">ID User</th>
                            <th style="width: 5%">IDTL</th>
                            <th style="width: 5%">IDLT</th>
                            <th style="width: 10%">Số lần xem</th>
                            <th style="width: 10%">Tin nổi bật</th>
                            <th style="width: 10%">Ẩn hiện</th>
                            <th style="width: 12%; text-align: center;"><a href="./themLoaiTin.php">Thêm</a></th>
                        </tr>
                    </thead>
                    <tbody>
                    <!-- Danh sach the loai -->
                    <?php
                    $i=0;
                    $dt->Select("
                        SELECT * FROM tin
                        ORDER BY idTin DESC
                    ");
                    while($rowTin = $dt->Fetch()){
                        $i++;
                    ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $rowTin["TieuDe"]; ?></td>
                            <td><?php echo $rowTin['TomTat']; ?></td>
                            <td><img src="../upload/tintuc/<?php echo $rowTin['urlHinh']; ?>" alt="" width="152" height="96"></td>
                            <td><?php echo $rowTin['idUser']; ?></td>
                            <td><?php echo $rowTin['idTL']; ?></td>
                            <td><?php echo $rowTin['idLT']; ?></td>
                            <td><?php echo $rowTin['SoLanXem']; ?></td>
                            <td><?php echo $rowTin['TinNoiBat']; ?></td>
                            <td><?php echo $rowTin['AnHien']; ?></td>
                            <td style="font-weight: bold;text-align: center;"> <a href="">Xóa</a> | <a href="">Sửa</a></td>
                        </tr>
                    <?php
                    }
                    ?>
                    <!-- End Danh sach the loai -->
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</body>
</html>