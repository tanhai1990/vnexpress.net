<div id="slide-left">
        	<div id="slideleft-main">
          <!-- Tin mới nhất một tin -->
          <?php
          $dt->Select("SELECT * FROM tin ORDER BY idTin DESC LIMIT 0,1");
          $rowTinMoiNhat_MotTin = $dt->Fetch();
          ?>
                <img src="upload/tintuc/<?php echo $rowTinMoiNhat_MotTin['urlHinh']; ?>"  /><br />
                <h2 class="title"><a href="#"><?php echo $rowTinMoiNhat_MotTin['TieuDe'];  ?></a> </h2>
                <div class="des">
                    <?php echo $rowTinMoiNhat_MotTin['TomTat']; ?>
                </div>
          <!-- End Tin mới nhất một tin -->
        	</div>
            <div id="slideleft-scroll">
            	
              <div class="content_scoller width_common">
            <ul>
              <!-- Tin mới nhất bốn tin -->
              <?php
              $dt->Select("
                SELECT * FROM tin
                ORDER BY idTin DESC
                LIMIT 1,4
              ");
              while($rowTinMoiNhat_BonTin = $dt->Fetch()){
              ?>
               <li>
                <div class="title_news">
               		<a href="#" class="txt_link"><?php echo $rowTinMoiNhat_BonTin['TieuDe']; ?></a> 
                </div>
              <?php
              }
              ?>
              <!-- End Tin mới nhất bốn tin -->
            </ul>
            </div>			
            
			<div id="gocnhin">
                <img alt="" src="http://khoapham.vn/images/logoKhoaPham.png" width="100%"></a>
                <div class="title_news"></div>
      </div>
                
  </div>
</div>


     