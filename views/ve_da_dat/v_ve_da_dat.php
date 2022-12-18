
<section class="section section--first section--bg" data-bg="view/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/section/section.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section__wrap">
                    <!-- section title -->
                    <h1 class="section__title">Danh sách vé đã đặt</h1>


                    <!-- end section title -->

                    <!-- breadcrumb -->

                    <!-- end breadcrumb -->
                </div>
                <br>
                <main>
                    <table border="1px" style="border-collapse: collapse; text-align: center; color: white" width="100%">
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
                            <th>Mã hóa đơn</th>
                            <th>Trạng thái</th>
                        </tr>
                        <?php foreach ($ve_da_dat as $key => $value){

                            ?>
                            <tr bgcolor="<?php echo $value->trang_thai == 1 ? "green" : "#6699FF" ?>">
                                <td><?php echo $value->username?></td>
                                <td><?php echo $value->name?></td>
                                <td><?php echo $value->gio_bat_dau?></td>
                                <td><?php echo $value->ngay?></td>
                                <td><?php echo $value->ten_phong?></td>
                                <td><?php echo $value->ten_chi_nhanh?></td>
                                <td><?php echo $value->ghe_ngoi?></td>
                                <td><?php echo $value->ngay_dat?></td>
                                <td><?php echo number_format($value->gia_ve)?> VNĐ</td>
                                <td><?php echo $value->ma_hoa_don?></td>
                                <td><?php echo $value->trang_thai == 1 ? "Đã thanh toán" : "Chưa thanh toán"?></td>
                            </tr>
                        <?php } ?>
                    </table>
                </main>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <!-- catalog -->

