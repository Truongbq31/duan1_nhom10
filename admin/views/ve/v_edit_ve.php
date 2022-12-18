
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
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Trạng thái</label>
                                    <div class="col-sm-9">
                                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="trang_thai">
                                            <option selected value="<?php echo $status->trang_thai ?>"><?php echo $status->trang_thai == 1 ? "Đã thanh toán" : "Chưa thanh toán" ?></option>

                                            <option value="1">Đã thanh toán</option>
                                            <option value="0">Chưa thanh toán</option>

                                        </select>
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


