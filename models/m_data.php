<?php
session_start();
   require "connect.php";
        $key = $_POST['id'];
        $id_phim = $_COOKIE['id_phim'];
      $sql="Select chi_nhanh.id, chi_nhanh.ten_chi_nhanh,lich_chieu.id as id_lich_chieu from lich_chieu  inner join chi_nhanh_phim on chi_nhanh_phim.id=lich_chieu.id_chi_nhanh_phim
      inner join phim on chi_nhanh_phim.id_phim = phim.id
      inner join chi_nhanh on chi_nhanh_phim.id_chi_nhanh=chi_nhanh.id
      inner join khung_gio_chieu on khung_gio_chieu.id=lich_chieu.id_khung_gio_chieu
      inner join khung_gio_phong_chieu on khung_gio_chieu.id=khung_gio_phong_chieu.id_khung_gio_chieu
      inner join phong_chieu on khung_gio_phong_chieu.id_phong_chieu=phong_chieu.id
      inner join ngay_chieu on ngay_chieu.id=lich_chieu.id_ngay_chieu                                                                                
      where ngay_chieu.id='$key' and phim.id = '$id_phim' group by chi_nhanh.ten_chi_nhanh";
      $result = $conn ->query($sql)->fetchAll();

    $sql2="Select chi_nhanh.id, khung_gio_chieu.gio_bat_dau,phim.name,phim.id as id_phim,ngay_chieu.ngay,phong_chieu.ten_phong, lich_chieu.id as id_lich_chieu from lich_chieu  inner join chi_nhanh_phim on chi_nhanh_phim.id=lich_chieu.id_chi_nhanh_phim
     inner join phim on chi_nhanh_phim.id_phim = phim.id
     inner join chi_nhanh on chi_nhanh_phim.id_chi_nhanh=chi_nhanh.id
    inner join khung_gio_chieu on khung_gio_chieu.id=lich_chieu.id_khung_gio_chieu
    inner join khung_gio_phong_chieu on khung_gio_chieu.id=khung_gio_phong_chieu.id_khung_gio_chieu
    inner join phong_chieu on khung_gio_phong_chieu.id_phong_chieu=phong_chieu.id
    inner join ngay_chieu on ngay_chieu.id=lich_chieu.id_ngay_chieu
    where ngay_chieu.id='$key'";
     $resultGioChieu = $conn ->query($sql2)->fetchAll();


      ?>
<?php
   foreach ($result as $index => $value){
?>
    <li>
        <div class="movie-name">
            <div class="icons">
                <i class="far fa-heart"></i>
                <i class="fas fa-heart"></i>
            </div>
            <span><?php echo $value['ten_chi_nhanh']?></span>
            <div class="location-icon">
                <i class="fas fa-map-marker-alt"></i>
            </div>
        </div>
        <div class="movie-schedule">
       <?php
       foreach ($resultGioChieu as $index => $value1){
           if($value['id'] == $value1['id']){
           ?>
            <div class="item" onclick="location.href='Seat.php?id_lich_chieu=<?php echo $value1['id_lich_chieu'];?>&&phim=<?php echo $value1['name']?>&&ngay_chieu=<?php echo $value1['ngay']?>&&phong_chieu=<?php echo $value1['ten_phong']?>&&id_khung_gio_chieu=<?php echo $value1['gio_bat_dau'];?>&&chi_nhanh=<?php echo $value['ten_chi_nhanh']?>&&id_phim=<?= $value1['id_phim']?>'">
                <?php echo $value1['gio_bat_dau'];?>
            </div>
           <?php }}?>
        </div>
    </li>
       <?php
   }
?>