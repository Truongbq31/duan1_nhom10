
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
<div class="container">
    <form method="post" action="">
        <table border="1">
            <tr>
                <th>Ten KH</th>
                <th>Ten Phim</th>
                <th>Giờ bắt dau</th>
                <th>Ngày chieu</th>
                <th>Phong chieu</th>
                <th>chi nhanh</th>
                <th>ghe ngoi</th>
                <th>ngay dat</th>
                <th>gia ve</th>
                <th>Chú ý</th>
            </tr>
            <tr>

                <th><?php foreach ($nguoi_dung as $key => $value){
                    if($value->id == $_SESSION['id_nguoi_dung']){
                        echo $value->username;
                    }
                    }  ?></th>
                <th><?php echo $_GET['ten_phim']?></th>
                <th><?php echo $_GET['gio_bat_dau']?></th>
                <th><?php echo $_GET['ngay_chieu']?></th>
                <th><?php echo $_GET['phong_chieu']?></th>
                <th><?php echo $_GET['chi_nhanh']?></th>
                <th><?php echo $_GET['id']?></th>
                <th><?php echo $_GET['ngay_chieu']?></th>
                <th><?php echo $_GET['gia']?></th>
                <th>Vui lòng có mặt đúng giờ để thanh toán vé. Sau 30p kể từ <?php echo $_GET['gio_bat_dau']?> ngày <?php echo $_GET['ngay_chieu']?> nếu vé không được thanh toán vé của bạn sẽ bị hủy!</th>

            </tr>
        </table>

        <button type="submit" name="btn_submit">Xác nhận</button>
        <button type="submit" name="btn_cancel">Hủy</button>
    </form>
</div>

</body>
</html>
