
<!-- box cat -->
<?php
$idLT = 5;
$dt->Select("
  SELECT * FROM loaitin
  WHERE idLT = '$idLT'
");
$rowLoaiTin = $dt->Fetch();
?>
<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
        	<a href="#"><?php echo $rowLoaiTin['Ten']; ?></a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
          <!-- Tin mới nhất theo loại tin một tin -->
          <?php
          $dt->Select("
            SELECT * FROM tin
            WHERE idLT = '$idLT'
            ORDER BY idTin DESC
            LIMIT 0,1
          ");
          $rowTinMoiNhatTheoLoaiTin_MotTin = $dt->Fetch();
          ?>
        	<div class="col1">
          
            	<div class="news">
                <h3 class="title" ><a href="#"><?php echo $rowTinMoiNhatTheoLoaiTin_MotTin['TieuDe']?></a></h3>
                <img class="images_news" src="upload/tintuc/<?php echo $rowTinMoiNhatTheoLoaiTin_MotTin['urlHinh']; ?>" align="left" />
                <div class="des"><?php echo $rowTinMoiNhatTheoLoaiTin_MotTin['TomTat']; ?></div>
                <div class="clear"></div>       
				      </div>
          <!-- End Tin mới nhất theo loại tin một tin -->
          </div>
          <!-- Tin mới nhất theo loại tin bốn tin -->
          <?php
          $dt->Select("
            SELECT * FROM tin
            WHERE idLT = '$idLT'
            ORDER BY idTin DESC
            LIMIT 1,4
          ");
          while($rowTinMoiNhatTheoLoaiTin_BonTin = $dt->Fetch()){
          ?>
          <div class="col2">
          <h3 class="tlq"><a href="#"><?php echo $rowTinMoiNhatTheoLoaiTin_BonTin['TieuDe']; ?></a></h3>
          </div> 
          <?php
          }
          ?>
          <!-- End Tin mới nhất theo loại tin bốn tin -->
           
      </div>
    
  </div>

</div>
<div class="clear"></div>
<!-- //box cat -->


<!-- box cat -->
<?php
$idLT = 6;
$dt->Select("
  SELECT * FROM loaitin
  WHERE idLT = '$idLT'
");
$rowLoaiTin = $dt->Fetch();
?>
<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
        	<a href="#"><?php echo $rowLoaiTin['Ten']; ?></a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
          <!-- Tin mới nhất theo loại tin một tin -->
          <?php
          $dt->Select("
            SELECT * FROM tin
            WHERE idLT = '$idLT'
            ORDER BY idTin DESC
            LIMIT 0,1
          ");
          $rowTinMoiNhatTheoLoaiTin_MotTin = $dt->Fetch();
          ?>
        	<div class="col1">
          
            	<div class="news">
                <h3 class="title" ><a href="#"><?php echo $rowTinMoiNhatTheoLoaiTin_MotTin['TieuDe']?></a></h3>
                <img class="images_news" src="upload/tintuc/<?php echo $rowTinMoiNhatTheoLoaiTin_MotTin['urlHinh']; ?>" align="left" />
                <div class="des"><?php echo $rowTinMoiNhatTheoLoaiTin_MotTin['TomTat']; ?></div>
                <div class="clear"></div>       
				      </div>
          <!-- End Tin mới nhất theo loại tin một tin -->
          </div>
          <!-- Tin mới nhất theo loại tin bốn tin -->
          <?php
          $dt->Select("
            SELECT * FROM tin
            WHERE idLT = '$idLT'
            ORDER BY idTin DESC
            LIMIT 1,4
          ");
          while($rowTinMoiNhatTheoLoaiTin_BonTin = $dt->Fetch()){
          ?>
          <div class="col2">
          <h3 class="tlq"><a href="#"><?php echo $rowTinMoiNhatTheoLoaiTin_BonTin['TieuDe']; ?></a></h3>
          </div> 
          <?php
          }
          ?>
          <!-- End Tin mới nhất theo loại tin bốn tin -->
           
      </div>
    
  </div>

</div>
<div class="clear"></div>
<!-- //box cat -->

<!-- box cat -->
<?php
$idLT = 7;
$dt->Select("
  SELECT * FROM loaitin
  WHERE idLT = '$idLT'
");
$rowLoaiTin = $dt->Fetch();
?>
<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
        	<a href="#"><?php echo $rowLoaiTin['Ten']; ?></a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
          <!-- Tin mới nhất theo loại tin một tin -->
          <?php
          $dt->Select("
            SELECT * FROM tin
            WHERE idLT = '$idLT'
            ORDER BY idTin DESC
            LIMIT 0,1
          ");
          $rowTinMoiNhatTheoLoaiTin_MotTin = $dt->Fetch();
          ?>
        	<div class="col1">
          
            	<div class="news">
                <h3 class="title" ><a href="#"><?php echo $rowTinMoiNhatTheoLoaiTin_MotTin['TieuDe']?></a></h3>
                <img class="images_news" src="upload/tintuc/<?php echo $rowTinMoiNhatTheoLoaiTin_MotTin['urlHinh']; ?>" align="left" />
                <div class="des"><?php echo $rowTinMoiNhatTheoLoaiTin_MotTin['TomTat']; ?></div>
                <div class="clear"></div>       
				      </div>
          <!-- End Tin mới nhất theo loại tin một tin -->
          </div>
          <!-- Tin mới nhất theo loại tin bốn tin -->
          <?php
          $dt->Select("
            SELECT * FROM tin
            WHERE idLT = '$idLT'
            ORDER BY idTin DESC
            LIMIT 1,4
          ");
          while($rowTinMoiNhatTheoLoaiTin_BonTin = $dt->Fetch()){
          ?>
          <div class="col2">
          <h3 class="tlq"><a href="#"><?php echo $rowTinMoiNhatTheoLoaiTin_BonTin['TieuDe']; ?></a></h3>
          </div> 
          <?php
          }
          ?>
          <!-- End Tin mới nhất theo loại tin bốn tin -->
           
      </div>
    
  </div>

</div>
<div class="clear"></div>
<!-- //box cat -->


