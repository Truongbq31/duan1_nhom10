
<div class="page-wrapper">
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Lịch chiếu</h5>

                        <button type="button" class="btn btn-cyan btn-sm" onclick="window.location.href='add_lich_chieu.php'">Thêm mới</button>

                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên phim</th>
                                    <th>Banner</th>
                                    <th>Chi nhánh chiếu phim</th>
                                    <th>Khung giờ chiếu</th>
                                    <th>ngày chiếu</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php
                                foreach ($lich_chieu as $key => $value) {
                                    ?>
                                    <tr>
                                        <td><?php echo $value->id_lich_chieu; ?></td>
                                        <td><?php echo $value->name; ?></td>
                                        <td><img width="50px" src="public/img/<?php echo $value->img; ?>" alt=""></td>
                                        <td><?php echo $value->ten_chi_nhanh; ?></td>
                                        <td><?php echo $value->gio_bat_dau; ?></td>
                                        <td><?php echo $value->ngay; ?></td>

                                        <td>
                                            <button type="button" name="btn_edit" class="btn btn-cyan btn-sm" onclick="window.location.href='edit_lich_chieu.php?id=<?php echo $value->id_lich_chieu;?>'">Edit</button>
                                            <button type="button" name="btn_del" class="btn btn-cyan btn-sm" onclick="return confirm('Chắc chắn xóa?')">
                                                <a style="color: white" href="delete_lich_chieu.php?id=<?php echo $value->id_lich_chieu;?>">Delete</a>
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


