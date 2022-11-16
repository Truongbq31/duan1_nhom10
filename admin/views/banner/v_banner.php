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
            <div class="table-responsive">
                <table id="zero_config" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Tên tiêu đề</th>
                        <th>Ảnh tiêu đề</th>
                        <th>Trạng thái</th>
                        <th>Hành động</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach ($banners as $key=>$value) {
                            $css_trang_thai = $value->trang_thai ? "badge-info" : "badge-danger";
                            $text_trang_thai = $value->trang_thai ? "Mở" : "Khóa";
                    ?>
                    <tr>
                        <td><?php echo $value->ten_tieu_de; ?></td>
                        <td><img width="100px" src="../public/layout/imagebanner/<?php echo $value->hinh; ?>"></td>
                        <td><span class="badge badge-pill <?php echo $css_trang_thai; ?>"><?php echo $text_trang_thai;?></span></td>
                        <td><button type="button" class="btn btn-cyan btn-sm" onclick="window.location.href='editbanner.php?ma_tieu_de=<?php echo $value->ma_tieu_de;?>'">Edit</button></td>
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