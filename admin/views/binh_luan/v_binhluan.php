
<div class="page-wrapper">
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Bình luận của khách hàng</h5>

                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Họ tên</th>
                                    <th>Email</th>
                                    <th>Phim</th>
                                    <th>Nội dung</th>
                                    <th>Ngày bình luận</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php
                                foreach ($binh_luan as $key=>$value) {
                                    ?>
                                    <tr>
                                        <td><?php echo $value->username; ?></td>
                                        <td><?php echo $value->email; ?></td>
                                        <td><?php echo $value->name; ?></td>
                                        <td><?php echo $value->noi_dung; ?></td>
                                        <td><?php echo $value->ngay_binh_luan; ?></td>

                                        <td>
                                            <button type="button" name="btn_del" class="btn btn-cyan btn-sm" onclick="return confirm('Chắc chắn xóa?')">
                                                <a style="color: white" href="delete_binhluan.php?id=<?php echo $value->id_bl;?>">Delete</a>
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
