
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
                            <h4 class="card-title">Thêm lịch chiếu</h4>

                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Chi nhánh</label>
                                <div class="col-sm-9">

                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="id_chi_nhanh_phim">
                                        <?php foreach ($chinhanh_phim as $key => $value){ ?>
                                            <option value="<?php echo $value->id_chinhanh_phim ?>"><?php echo $value->ten_chi_nhanh ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Khung gio chieu</label>
                                <div class="col-sm-9">

                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="id_khung_gio_chieu">
                                        <?php foreach ($kgc as $key => $value){ ?>
                                            <option value="<?php echo $value->id ?>"><?php echo $value->gio_bat_dau ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Ngày chieu</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" id="ten_loai" name="ngay_chieu" required>
                                </div>
                            </div>

                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" name="btn_add" class="btn btn-primary">Thêm</button>
                                    <a href="lich_chieu.php" type="submit" name="btn-submit" class="btn btn-primary">Danh sách</a>
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


