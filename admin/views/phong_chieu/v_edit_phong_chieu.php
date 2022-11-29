
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
                            <h4 class="card-title">Sửa phòng chieu</h4>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Ten phòng</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="ten_loai" name="ten_phong" required value="<?php echo $phong_chieu_details->ten_phong ?>">
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" name="btn_save" class="btn btn-primary">Lưu</button>
                                    <a href="phong_chieu.php" type="submit" name="btn-submit" class="btn btn-primary">Danh sách</a>
                                </div>
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



