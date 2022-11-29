
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
                            <h4 class="card-title">Sửa chi nhánh chiếu phim</h4>

                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Tên phim</label>
                                <div class="col-sm-9">

                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="id_phim">
                                            <option selected value="<?php echo $chinhanh_phim_details->id_phim ?>"><?php echo $chinhanh_phim_details->name ?></option>

                                        <?php foreach ($phim as $key => $value){ ?>
                                            <option value="<?php echo $value->id ?>"><?php echo $value->name ?></option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Chi nhánh chiếu phim</label>
                                <div class="col-sm-9">

                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="id_chi_nhanh">
                                        <option selected value="<?php echo $chinhanh_phim_details->id_chi_nhanh ?>"><?php echo $chinhanh_phim_details->ten_chi_nhanh ?></option>
                                        <?php foreach ($chinhanh as $key => $value){ ?>
                                            <option value="<?php echo $value->id ?>"><?php echo $value->ten_chi_nhanh ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" name="btn_save" class="btn btn-primary">Lưu</button>
                                    <a href="chinhanh_phim.php" type="submit" name="btn-submit" class="btn btn-primary">Danh sách</a>
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


