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

    <!-- Danh sach the loai -->
    <div id="ListLoaiTin" class="container">
        <h3>DANH SÁCH LOẠI TIN</h3>
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10%">STT</th>
                            <th style="width: 28%">Tên Loại Tin</th>
                            <th style="width: 20%">Tên không dấu</th>
                            <th style="width: 10%">Thứ tự</th>
                            <th style="width: 10%">Ẩn Hiện</th>
                            <th style="width: 10%">ID thể loại</th>
                            <th style="width: 12%; text-align: center;"><a href="./themTheLoai.php">Thêm</a></th>
                        </tr>
                    </thead>
                    <tbody>
                    <!-- Danh sach the loai -->
                    <?php
                    $i = 0;
                    $dt->Select("
                        SELECT * FROM loaitin
                    ");
                    while($rowLoaiTin = $dt->Fetch()){      
                        $i++;
                    ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $rowLoaiTin['Ten']; ?></td>
                            <td><?php echo $rowLoaiTin['Ten_KhongDau']; ?></td>
                            <td><?php echo $rowLoaiTin['ThuTu']; ?></td>
                            <td><?php echo $rowLoaiTin['AnHien']; ?></td>
                            <td><?php echo $rowLoaiTin['idTL']; ?></td>
                            <td style="font-weight: bold;text-align: center;"> <a href="./xoaLoaiTin.php?idLT=<?php echo $rowLoaiTin['idLT']; ?>">Xóa</a> | 
                            <a href="./suaLoaiTin.php?idLT=<?php echo $rowLoaiTin['idLT']; ?>">Sửa</a></td>
                        </tr>
                    <?php
                    }
                    ?>
                    <!-- End Danh sach the loai -->
                    </tbody>
                </table>

            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
    <!-- End Danh sach the loai -->
    <?php
    //Số bản ghi 1 trang
    $SoLuong = 20;
    //Tổng số bản ghi
    $dt->Select("
        SELECT COUNT(idTin) AS tong
        FROM tin
    ");
    $row = $dt->Fetch();
    $tong = $row['tong'];
    //Xác định số lượng trang
    if($tong>$SoLuong){
        $SoTrang = ceil($tong/$SoLuong);
    }
    //Xac dinh trang hien tai
    if

    ?>
</body>
</html>