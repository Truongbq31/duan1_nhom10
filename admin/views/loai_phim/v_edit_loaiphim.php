
<div class="page-wrapper">
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <form method="POST" action="" enctype="multipart/form-data" class="form-horizontal">


                        <div class="card-body">
                            <h4 class="card-title">Sửa loại phim</h4>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên loại</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="ten_tieu_de" name="ten_loai" placeholder="Họ tên" value="<?php echo $loaiphim_details->ten_loai ?>">
                                </div>
                            </div>

                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" name="btn_save" class="btn btn-primary">Lưu</button>
                                <a href="loaiphim.php" type="submit" class="btn btn-primary">Danh sách</a>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>

        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
</div>

