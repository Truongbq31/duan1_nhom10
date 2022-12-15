<?php

$_SESSION['gia'] = $_GET['gia'];
//echo $_SESSION['gia'];
//die();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container" style="margin-top: 100px;color: yellow">
         <form method="post" action="">
             <div>
                <label>Ten KH: <label>
                <label><?php foreach ($nguoi_dung as $key => $value){
                    if($value->id == $_SESSION['id_nguoi_dung']){
                        echo $value->username;
                    }
                    }  ?>
                </label></div>
        <div>
                <label>Tên Phim: </label>
                <label><?php echo $_GET['ten_phim']?></label>
        </div>
        <div>
        <label>Giờ bắt đầu: </label>
                <label><?php echo $_GET['gio_bat_dau']?></label>
        </div>
        <div>
        <label>Ngày chiếu: </label>
                <label><?php echo $_GET['ngay_chieu']?></label>
            </div>
                <div>
        <label>Phòng chiếu: </label>
                <label><?php echo $_GET['phong_chieu']?></label>
                    </div>
        <div>
        <label>Chi nhánh: </label>
                <label><?php echo $_GET['chi_nhanh']?></label>
            </div>
        <div>
        <label>Ghế ngồi: </label>
                <label><?php echo $_GET['id']?></label>
            </div>
        <div>
        <label>Ngày đặt: </label>
                <label><?php echo $_GET['ngay_chieu']?></label>
            </div>
        <div>
        <label>Giá vé: </label>
                <label><?php echo $_GET['gia']?></label>
            </div>
        <div>
        <label>Chú ý: </label>
                <label>Vui lòng có mặt đúng giờ để thanh toán vé. Sau 30p kể từ <?php echo $_GET['gio_bat_dau']?> ngày <?php echo $_GET['ngay_chieu']?> nếu vé không được thanh toán vé của bạn sẽ bị hủy!</label>
            </div>

        <button type="submit" name="btn_submit" style="background-color: deepskyblue;width: 70px;height: 30px;border-radius: 5px">Xác nhận</button>
        <button type="submit" name="btn_cancel" style="background-color: red;width: 70px;height: 30px;border-radius: 5px">Hủy</button>
    </form>
</div>

</body>
</html>
