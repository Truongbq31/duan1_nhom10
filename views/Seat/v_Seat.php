<?php
session_start();
$_SESSION['id_lich_chieu'] = $_GET['id'];
$id_lich_chieu = $_SESSION['id_lich_chieu'];

require "models/connect.php";
$id = $_GET['id'];
$sql = "Select *, phim.name as ten_phim, chi_nhanh.ten_chi_nhanh,khung_gio_chieu.gio_bat_dau,phong_chieu.ten_phong,lich_chieu.id as id_lich_chieu from lich_chieu  inner join chi_nhanh_phim on chi_nhanh_phim.id=lich_chieu.id_chi_nhanh_phim 
      inner join phim on chi_nhanh_phim.id_phim = phim.id 
      inner join chi_nhanh on chi_nhanh_phim.id_chi_nhanh=chi_nhanh.id
      inner join khung_gio_chieu on khung_gio_chieu.id=lich_chieu.id_khung_gio_chieu
      inner join khung_gio_phong_chieu on khung_gio_chieu.id=khung_gio_phong_chieu.id_khung_gio_chieu
      inner join phong_chieu on khung_gio_phong_chieu.id_phong_chieu=phong_chieu.id                                                   
      where phim.id='$id'";
$result = $conn->query($sql)->fetch();

$sql2 = "Select * from ve";
$result2 = $conn->query($sql2)->fetchAll();

$sql_ghe = "Select ghe_ngoi from ve where id_lich_chieu = $id_lich_chieu";
$result_ghe = $conn->query($sql_ghe)->fetchAll();
//echo "<pre>";
//print_r($result_ghe);

$mangGheDat=[];
foreach ($result_ghe as $item => $value){
    $mangGheDat[] = explode(",",$value['ghe_ngoi']);
}
//echo "<pre>";
//print_r($mangGheDat);
//die();

$mangGheDaDat=[];
foreach ($mangGheDat as $item => $value){
    foreach ($value as $index => $key){
            $mangGheDaDat[] = trim($key);
    }
}
$mangGhe = [["A1","A2","A3","A4","A5","A6"],
    ["B1","B2","B3","B4","B5","B6"],
    ["C1","C2","C3","C4","C5","C6"],
    ["D1","D2","D3","D4","D5","D6"],
    ["E1","E2","E3","E4","E5","E6"],
    ["F1","F2","F3","F4","F5","F6"],];
?>
<body>
<link rel="stylesheet" href="views/abc/style.css">
<link rel="stylesheet" href="views/Giochieuphim/css/bootstrap.min.css">
<link rel="stylesheet" href="views/Giochieuphim/css/all.min.css">
<link rel="stylesheet" href="views/Giochieuphim/css/animate.css">
<link rel="stylesheet" href="views/Giochieuphim/css/flaticon.css">
<link rel="stylesheet" href="views/Giochieuphim/css/magnific-popup.css">
<link rel="stylesheet" href="views/Giochieuphim/css/odometer.css">
<link rel="stylesheet" href="views/Giochieuphim/css/owl.carousel.min.css">
<link rel="stylesheet" href="views/Giochieuphim/css/owl.theme.default.min.css">
<link rel="stylesheet" href="views/Giochieuphim/css/nice-select.css">
<link rel="stylesheet" href="views/Giochieuphim/css/main.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<link rel="stylesheet" href="public/abc/dmitryvolkov.me/demo/flixgo2.0/main/css/style3.css">
<ul class="showcase2">
    <li>
        <div class="seat"></div>
        <small>Trống</small>
    </li>
    <li>
        <div class="seat selected"></div>
        <small>Đã chọn</small>
    </li>
    <li>
        <div class="seat occupied"></div>
        <small>Đã hết chỗ</small>
    </li>
</ul>
<div class="container2">
        <div class="screen2"></div>
        <?php foreach($mangGhe as $item =>$value){ ?>
            <div class="row2">
                <?php foreach($value as $index => $key){ ?>
                    <div class="seat <?php echo in_array($key,$mangGheDaDat) ?'occupied':''?>"><?= $key ?></div>
                <?php }?>
            </div>
        <?php }?>
    </div>
<div  class="proceed-book bg_img" data-background="view/giochieuphim/images/movie/movie-bg-proceed.jpg" style="width: 100%;">
<form action="" method="post">
    <div class="proceed-to-book">
        <div class="book-item">
            <span>Ghế</span>
            <h5 class="title booked"></h5>
        </div>
        <div class="book-item">
            <span>Phim</span>

            <h5 class="title ten_phim"><?= $result['ten_phim']; ?></h5>

        </div>
        <div class="book-item">
            <span>Giờ Chiếu</span>

            <h5 class="title gio_chieu"><?= $result['gio_bat_dau'] ?></h5>

        </div>
        <div class="book-item">

            <span>Ngày chiếu</span>
                        <h5 class="title ngay_chieu"><?= $result['ngay_chieu'] ?></h5>
        </div>
        <div class="book-item">

            <span>Phòng chiếu</span>

            <h5 class="title ten_phong"><?= $result['ten_phong'] ?></h5>

        </div>
        <div class="book-item">
            <span>Chi Nhánh</span>
                        <h5 class="title ten_chi_nhanh"><?= $result['ten_chi_nhanh'] ?></h5>
        </div>
        <div class="book-item">
            <span>Giá</span>
            <h5 class="title price"></h5>
        </div>

        <div class="book-item">
            <a style=" color:whitesmoke ; text-decoration: none;font-size: 20px; background-color: yellow;border-radius: 3px"  class="custom-button submit_onl">Thanh toán online</a>
        </div>
        <div class="book-item">
            <a style=" color:whitesmoke ; text-decoration: none;font-size: 20px; background-color: yellow;border-radius: 3px"  class="custom-button submit_off">Thanh toán tại quầy</a>
        </div>
    </div>
</form>
</div>
<script src="views/js/script2.js"></script>
<script>
    $(document).ready(function(){
        var arr=[];
        $(".seat").click(function(e) {
            if (e.target.classList.contains("occupied")) {
                alert("Ghế đã được đặt");
                $(".seat").click == die();
            }
            if (!e.target.classList.contains("selected")) {
                var id = $(this).html();
                arr.push(id);
                var price = arr.length * 50000;
                $(".booked").html(arr+" ");
                $(".price").html(price);
            }
            if(e.target.classList.contains("selected")) {
                var id_delete = $(this).html();
                var num_delete = arr.indexOf(id_delete);
                arr.splice(num_delete, 1);
                var price = arr.length* 50000;
                $(".booked").html(arr + " ");
                $(".price").html(price);
            }
        });
        $(".submit_onl").click(function(){

            // if(confirm("Bạn có chắc muốn đặt vé ?")){
                var id=$(".booked").html();
                var gia=$(".price").html();
                var ten_phim=$(".ten_phim").html();
                var gio_bat_dau=$(".gio_chieu").html();
                var ngay_chieu = $(".ngay_chieu").html();
                var phong_chieu = $(".ten_phong").html();
                var chi_nhanh = $(".ten_chi_nhanh").html();
                var trang_thai = 1;
                 location.href="vnpay_php/index.php?id="+id+"&&gia="+gia+"&&ten_phim="+ten_phim+"&&gio_bat_dau="+gio_bat_dau+"&&ngay_chieu="+ngay_chieu+"&&phong_chieu="+phong_chieu+"&&chi_nhanh=" +chi_nhanh+"&&trang_thai="+trang_thai;

                // $.post("models/m_ve.php",{ghe_ngoi: id,ten_phim: ten_phim,gio_bat_dau:gio_bat_dau,ngay_chieu:ngay_chieu,phong_chieu:phong_chieu,chi_nhanh:chi_nhanh,gia:gia});
            // }
        })

        $(".submit_off").click(function(){
            var id=$(".booked").html();
            var gia=$(".price").html();
            var ten_phim=$(".ten_phim").html();
            var gio_bat_dau=$(".gio_chieu").html();
            var ngay_chieu = $(".ngay_chieu").html();
            var phong_chieu = $(".ten_phong").html();
            var chi_nhanh = $(".ten_chi_nhanh").html();
            var trang_thai = 0;
            location.href="dat_ve_offline.php?id="+id+"&&gia="+gia+"&&ten_phim="+ten_phim+"&&gio_bat_dau="+gio_bat_dau+"&&ngay_chieu="+ngay_chieu+"&&phong_chieu="+phong_chieu+"&&chi_nhanh=" +chi_nhanh+"&&trang_thai="+trang_thai;

            // $.post("models/m_ve.php",{ghe_ngoi: id,ten_phim: ten_phim,gio_bat_dau:gio_bat_dau,ngay_chieu:ngay_chieu,phong_chieu:phong_chieu,chi_nhanh:chi_nhanh,gia:gia});
            // }
        })
    });
</script>
</body>
