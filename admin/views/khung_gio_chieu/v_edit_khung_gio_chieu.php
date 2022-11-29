
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
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Giờ bắt dau</label>
                                <div class="col-sm-9">
                                    <input type="time" class="form-control" id="ten_tieu_de" name="gio_bat_dau" placeholder="Họ tên" value="<?php echo $khungGioChieu_details->gio_bat_dau ?>">
                                </div>
                            </div>

                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" name="btn_save" class="btn btn-primary">Lưu</button>
                                <a href="khung_gio_chieu.php" type="submit" class="btn btn-primary">Danh sách</a>
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


