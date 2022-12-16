
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
                            <h4 class="card-title">Sửa lịch chiếu</h4>

                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Chi nhánh</label>
                                <div class="col-sm-9">

                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="id_chi_nhanh_phim">
                                        <option selected value="<?php echo $lich_chieu_details->id_lc ?>"><?php echo $lich_chieu_details->ten_chi_nhanh ?></option>

                                        <?php foreach ($chinhanh_phim as $key => $value){ ?>
                                            <option value="<?php echo $value->id_chinhanh_phim ?>"><?php echo $value->ten_chi_nhanh ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Khung giờ chiếu</label>
                                <div class="col-sm-9">

                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="id_khung_gio_chieu">
                                        <option selected value="<?php echo $lich_chieu_details->id_khung_gio_chieu ?>"><?php echo $lich_chieu_details->gio_bat_dau ?></option>
                                        <?php foreach ($kgc as $key => $value){ ?>
                                            <option value="<?php echo $value->id ?>"><?php echo $value->gio_bat_dau ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Ngày chiếu</label>
                                <div class="col-sm-9">

                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="id_ngay_chieu">
                                        <option selected value="<?php echo $lich_chieu_details->id_ngay_chieu ?>"><?php echo $lich_chieu_details->ngay ?></option>
                                        <?php foreach ($ngay_chieu as $key => $value){ ?>
                                            <option value="<?php echo $value->id ?>"><?php echo $value->ngay ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" name="btn_save" class="btn btn-primary">Lưu</button>
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



