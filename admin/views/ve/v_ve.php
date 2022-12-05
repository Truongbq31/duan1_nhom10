
<div class="page-wrapper">
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Vé</h5>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên phim</th>
                                    <th>Giờ bắt đầu</th>
                                    <th>Ngày chiếu</th>
                                    <th>Phòng chiếu</th>
                                    <th>Chi nhánh</th>
                                    <th>Ghế ngồi</th>
                                    <th>Ngày đặt</th>
                                    <th>Giá vé</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php
                                foreach ($ve as $key => $value) {
                                    ?>
                                    <tr>
                                        <td><?php echo $value->id; ?></td>
                                        <td><?php echo $value->ten_phim; ?></td>
                                        <td><?php echo $value->gio_bat_dau; ?></td>
                                        <td><?php echo $value->ngay_chieu; ?></td>
                                        <td><?php echo $value->phong_chieu; ?></td>
                                        <td><?php echo $value->chi_nhanh; ?></td>
                                        <td><?php echo $value->ghe_ngoi; ?></td>
                                        <td><?php echo $value->ngay_dat; ?></td>
                                        <td><?php echo $value->gia; ?></td>

                                        <td>
                                            <button style="margin: 5px 0px; width: 80px" type="button" name="btn_edit" class="btn btn-cyan btn-sm" onclick="window.location.href='edit_tt_ve.php?id=<?php echo $value->id;?>'">Update</button>
                                            <button style="width: 80px;" type="button" name="btn_del" class="btn btn-cyan btn-sm" onclick="return confirm('Chắc chắn xóa?')">
                                                <a style="color: white" href="delete_ve.php?id=<?php echo $value->id;?>">Delete</a>
                                            </button>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>

                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php



