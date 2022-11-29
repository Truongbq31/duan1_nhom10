
<div class="page-wrapper">
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Basic Datatable</h5>

                        <button type="button" class="btn btn-cyan btn-sm" onclick="window.location.href='add_chinhanh_phim.php'">Thêm mới</button>

                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Ảnh</th>
                                    <th>Tên phim</th>
                                    <th>Tên chi nhánh chiếu phim</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php
                                foreach ($chinhanh_phim as $key => $value) {
                                    ?>
                                    <tr>
                                        <td><?php echo $value->id_chinhanh_phim; ?></td>
                                        <td><img width="100px" src="public/img/<?php echo $value->img; ?>" alt=""></td>
                                        <td><?php echo $value->name; ?></td>
                                        <td><?php echo $value->ten_chi_nhanh; ?></td>

                                        <td>
                                            <button type="button" name="btn_edit" class="btn btn-cyan btn-sm" onclick="window.location.href='edit_chinhanh_phim.php?id=<?php echo $value->id_chinhanh_phim;?>'">Edit</button>
                                            <button type="button" name="btn_del" class="btn btn-cyan btn-sm" onclick="return confirm('Chắc chắn xóa?')">
                                                <a style="color: white" href="delete_chinhanh_phim.php?id=<?php echo $value->id_chinhanh_phim;?>">Delete</a>
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
</div>
