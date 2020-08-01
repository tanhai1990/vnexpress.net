<form id="formLogin" action="" method="post">
    <h3>ĐĂNG NHẬP HỆ THỐNG</h3>
    <label for="UserName">Tên Đăng Nhập:</label>
    <input class="form-control1" type="text" name="UserName" placeholder="UserName"><br>
    <label for="PassWord">Mật khẩu:</label>
    <input class="form-control1" type="password" name="PassWord" placeholder="PassWord">
    <input class="form-control1" type="submit" name="btnDangNhap" value="Đăng Nhập">
    <input class="form-control1" type="submit" name="btnCancel" value="Thoát">
</form>
<?php
//Kiem tra login
if(isset($_POST["btnDangNhap"])){
    if(($dt->checkNull($_POST["UserName"])) && $dt->checkNull($_POST["PassWord"])){
        $username = addslashes($_POST["UserName"]);
        $password = addslashes($_POST['PassWord']);
        $password = md5($password);

        $dt->Select("
            SELECT * FROM users
            WHERE UserName = '$username' AND Password = '$password'
        ");
        $rowUser = $dt->Fetch();
        if($rowUser!= 0){
            $_SESSION["idUser"] = $rowUser['idUser'];
            $_SESSION["UserName"] = $rowUser['Username'];
            $_SESSION["HoTen"] = $rowUser['HoTen'];
            $_SESSION["idGroup"] = $rowUser['idGroup'];
        }else{
            echo "<p style='color:red'>Đăng nhập thất bại. Xin mời đăng nhập lại!</p>";
        }
    }
    else{
        echo "<p style='color:red'>Không được để trống tên đăng nhập và mật khẩu!</p>";
    }
    
    
}
?>