
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
                            <h4 class="card-title">Cập nhật trạng thái vé</h4>
                            <div class="col-sm-9">
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Ghế ngồi</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="ten_tieu_de" name="ghe_ngoi" placeholder="A1-A6;B1-B6;C1-C6;D1-D6;E1-E6;F1-F6" value="<?php echo $status->ghe_ngoi;?>">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" name="btn_save" class="btn btn-primary">Lưu</button>
                                <a href="ve.php" type="submit" class="btn btn-primary">Danh sách</a>
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


