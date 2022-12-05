<?php
   require "connect.php";
          $key = $_POST['id'];


          $sql = "Select *, phim.name as ten_phim, chi_nhanh.ten_chi_nhanh,khung_gio_chieu.gio_bat_dau,phong_chieu.ten_phong,lich_chieu.id as id_lich_chieu from lich_chieu  inner join chi_nhanh_phim on chi_nhanh_phim.id=lich_chieu.id_chi_nhanh_phim
      inner join phim on chi_nhanh_phim.id_phim = phim.id
      inner join chi_nhanh on chi_nhanh_phim.id_chi_nhanh=chi_nhanh.id
      inner join khung_gio_chieu on khung_gio_chieu.id=lich_chieu.id_khung_gio_chieu
      inner join khung_gio_phong_chieu on khung_gio_chieu.id=khung_gio_phong_chieu.id_khung_gio_chieu
      inner join phong_chieu on khung_gio_phong_chieu.id_phong_chieu=phong_chieu.id
      where chi_nhanh.id='$key'";
//          $newsql = "Select chi_nhanh.id,khung_gio_chieu.gio_bat_dau, chi_nhanh.ten_chi_nhanh from lich_chieu "
//$sql = "Select *, phim.name as ten_phim, chi_nhanh.ten_chi_nhanh,khung_gio_chieu.gio_bat_dau,phong_chieu.ten_phong,lich_chieu.id as id_lich_chieu from lich_chieu  inner join chi_nhanh_phim on chi_nhanh_phim.id=lich_chieu.id_chi_nhanh_phim
//      inner join phim on chi_nhanh_phim.id_phim = phim.id
//      inner join chi_nhanh on chi_nhanh_phim.id_chi_nhanh=chi_nhanh.id
//      inner join khung_gio_chieu on khung_gio_chieu.id=lich_chieu.id_khung_gio_chieu
//      inner join khung_gio_phong_chieu on khung_gio_chieu.id=khung_gio_phong_chieu.id_khung_gio_chieu
//      inner join phong_chieu on khung_gio_phong_chieu.id_phong_chieu=phong_chieu.id
//      where chi_nhanh.id='$key'";
      $result = $conn ->query($sql)->fetchAll();
      $sql2 = "Select * from lich_chieu
     inner join chi_nhanh_phim on chi_nhanh_phim.id=lich_chieu.id_chi_nhanh_phim
      inner join chi_nhanh on chi_nhanh_phim.id_chi_nhanh=chi_nhanh.id
      where lich_chieu.ngay_chieu='$key' group by chi_nhanh.ten_chi_nhanh";
      $resultchiNhanh = $conn->query($sql2)->fetchAll();
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
            foreach ($result as $item => $value1){
            if ($value1['id'] == $value['id']){
            ?>
            <div class="item" onclick="location.href='Seat.php?id=<?php echo $key ?>'">
                <?php echo $value['gio_bat_dau'];?>
                <?php }}?>
            </div>
        </div>
    </li>
       <?php
   }
?>