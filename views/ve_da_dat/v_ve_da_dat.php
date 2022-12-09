<main>
    <table border="1" style="border-collapse: collapse" width="100%">
        <tr>
            <th>Tên khách hàng</th>
            <th>Tên phim</th>
            <th>Giờ bắt đầu</th>
            <th>Ngày chiếu</th>
            <th>Phòng chiếu</th>
            <th>Chi nhánh</th>
            <th>Ghế ngồi</th>
            <th>Ngày đặt</th>
            <th>Giá vé</th>
            <th>Trạng thái</th>
        </tr>
        <?php foreach ($ve_da_dat as $key => $value){

        ?>
        <tr>
            <th><?php echo $value->username?></th>
            <th><?php echo $value->name?></th>
            <th><?php echo $value->gio_bat_dau?></th>
            <th><?php echo $value->ngay_chieu?></th>
            <th><?php echo $value->ten_phong?></th>
            <th><?php echo $value->ten_chi_nhanh?></th>
            <th><?php echo $value->ghe_ngoi?></th>
            <th><?php echo $value->ngay_dat?></th>
            <th><?php echo number_format($value->gia)?> VNĐ</th>
            <th><?php echo $value->trang_thai == 1 ? "Đã thanh toán" : "Chưa thanh toán, vui lòng có mặt trước giờ chiếu để thanh toán vé"?></th>
        </tr>
        <?php } ?>
    </table>
</main>