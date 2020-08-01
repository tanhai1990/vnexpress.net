<?php
$vitri = 1;
$dt->Select("
    SELECT * FROM quangcao
    WHERE vitri = '$vitri'
");
while($rowQuangCao = $dt->Fetch()){
?>
<img width="280" src="images/<?php echo $rowQuangCao['urlHinh']; ?>" />
<div style="height:10px"></div>
<?php
}
?>