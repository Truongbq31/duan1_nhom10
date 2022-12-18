<?php

$_SESSION['gia'] = $_GET['gia'];
//echo $_SESSION['gia'];
//die();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tạo mới đơn hàng</title>
    <!-- Bootstrap core CSS -->
    <link href="vnpay_php/assets/bootstrap.min.css" rel="stylesheet"/>
    <!-- Custom styles for this template -->
    <link href="vnpay_php/assets/jumbotron-narrow.css" rel="stylesheet">
    <script src="vnpay_php/assets/jquery-1.11.3.min.js"></script>
</head>

<body>
<div class="container">
    <div class="table-responsive">
        <form action="" id="create_form" method="post">


            <div class="form-group">
                <h3>Xác nhận thông tin hóa đơn</h3>
            </div>

            <div class="form-group">
                <label >Tên khách hàng</label>
                <input disabled class="form-control" id="txt_billing_film"
                       name="txt_billing_email" type="text" value="<?php foreach ($nguoi_dung as $key => $value){
                           if($value->id == $_SESSION['id_nguoi_dung']){
                               echo $value->username;
                           }
                } ?>"/>
            </div>

            <div class="form-group">
                <label >Tên phim</label>
                <input disabled class="form-control" id="txt_billing_film"
                       name="txt_billing_email" type="text" value="<?= $_GET['ten_phim']?>"/>
            </div>

            <div class="form-group">
                <label >Giờ bắt đầu</label>
                <input disabled class="form-control" id="txt_billing_time"
                       name="txt_billing_email" type="text" value="<?= $_GET['gio_bat_dau']?>"/>
            </div>

            <div class="form-group">
                <label >Ngày chiếu</label>
                <input disabled class="form-control" id="txt_billing_day"
                       name="txt_billing_email" type="text" value="<?= $_GET['ngay_chieu']?>"/>
            </div>

            <div class="form-group">
                <label >Phòng chiếu</label>
                <input disabled class="form-control" id="txt_billing_room"
                       name="txt_billing_email" type="text" value="<?= $_GET['phong_chieu']?>"/>
            </div>

            <div class="form-group">
                <label >Ghế ngồi</label>
                <input disabled class="form-control" id="txt_billing_seat"
                       name="txt_billing_email" type="text" value="<?= $_GET['id']?>"/>
            </div>

            <div class="form-group">
                <label >Giá vé</label>
                <input disabled class="form-control" id="txt_billing_seat"
                       name="txt_billing_email" type="text" value="<?= number_format($_GET['gia'])?> VNĐ"/>
            </div>

            <div class="form-group">
                <label >Chi nhánh</label>
                <input disabled class="form-control" id="txt_bill_city"
                       name="txt_bill_city" type="text" value="<?= $_GET['chi_nhanh']?>"/>
            </div>

            <div class="form-group">
                <label >Chú ý (*)</label>
                <input disabled class="form-control" id="txt_bill_city"
                       name="txt_bill_city" type="text" value="Nếu sau 30 phút chiếu phim kể từ <?= $_GET['gio_bat_dau'] ?> ngày <?= $_GET['ngay_chieu']?> vé chưa được thanh toán, vé của bạn sẽ bị hủy!"/>
            </div>

            <button type="submit" name="btn_submit" style="background-color: deepskyblue;width: 70px;height: 30px;border-radius: 5px">Xác nhận</button>
            <button type="submit" name="btn_cancel" style="background-color: red;width: 70px;height: 30px;border-radius: 5px">Hủy</button>

        </form>
    </div>
</div>

</body>
</html>



