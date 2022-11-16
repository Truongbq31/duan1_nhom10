
<div class="page-wrapper">
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
        <div class="card-body">
            <h5 class="card-title">Danh sách hàng hóa</h5>
            <a href="add_phim.php">Thêm mới</a>
            <div class="table-responsive">
                <table id="zero_config" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Rating</th>
                        <th>Description</th>
                        <th>Ảnh</th>
                        <th>Loại phim</th>
                        <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach ($phim as $key=>$value) {
                    ?>
                    <tr>
                        <td><?php echo $value->name; ?></td>
                        <td><?php echo $value->rate; ?></td>
                        <td><?php echo $value->description; ?></td>
                        <td><img width="100px" src="public/img/<?php echo $value->img; ?>"></td>
                        <td><?php echo $value->ten_loai; ?></td>


                        <td>
                            <button type="button" class="btn btn-cyan btn-sm" onclick="window.location.href='edit_phim.php?id=<?php echo $value->id_phim;?>'">Edit</button>
                            <button type="button" name="btn_del" class="btn btn-cyan btn-sm" onclick="return confirm('Chắc chắn xóa?')">
                                <a style="color: white" href="delete_phim.php?id=<?php echo $value->id_phim;?>">Delete</a>
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