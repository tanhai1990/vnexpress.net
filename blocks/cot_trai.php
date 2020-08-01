<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
        	<a href="#">Tin xem nhiều</a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
        	<!-- Tin xem nhiều nhất -->
          <?php
          $dt->Select("
              SELECT * FROM tin
              ORDER BY SoLanXem DESC
              LIMIT 0,6
          ");
          while($rowTinXemNhieu = $dt->Fetch()){
          ?>
            <div class="col1">
            	<div class="news">
                  <img class="images_news" src="upload/tintuc/<?php echo $rowTinXemNhieu['urlHinh']; ?>"  />
                    <h3 class="title" ><a href="#"><?php echo $rowTinXemNhieu['TieuDe'] ?></a><span class="hit">20</span></h3>
                    <div class="clear"></div>
				      </div>
            </div>
          <?php
          }
          ?>
          <!-- End Tin xem nhiều nhất -->
        </div>
    </div>
</div>
<div class="clear"></div>

