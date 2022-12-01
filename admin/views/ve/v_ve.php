
<div class="page-wrapper">
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Khung giờ chiếu</h5>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Ten phim</th>
                                    <th>Giờ bắt dau</th>
                                    <th>ngày chiếu</th>
                                    <th>phòng chiếu</th>
                                    <th>chi nhánh</th>
                                    <th>ghe ngồi</th>
                                    <th>ngày đat</th>
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

                                        <td>
                                            <button type="button" name="btn_del" class="btn btn-cyan btn-sm" onclick="return confirm('Chắc chắn xóa?')">
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



