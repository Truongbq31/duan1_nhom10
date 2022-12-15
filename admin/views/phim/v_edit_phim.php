
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
                            <h4 class="card-title">Thêm tiêu đề</h4>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="ten_tieu_de" name="name" value="<?php echo $phim_details->name ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Rate</label>
                                <div class="col-sm-9">
                                    <input type="number" min="0" max="5" class="form-control" id="ten_tieu_de" name="rate" value="<?php echo $phim_details->rate ?>"">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Description</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="ten_tieu_de" name="description" value="<?php echo $phim_details->description ?>"">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Hình ảnh</label>

                                <div class="col-sm-9">
                                    <div class="custom-file">
                                        <img style="margin-top: 50px" width="100px" src="public/img/<?php echo $phim_details->img;?>">
                                        <input type="file"  class="custom-file-input" id="validatedCustomFile" name="img">
                                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Link demo</label>
                                <div class="col-sm-9">
                                    <textarea type="text" class="form-control" id="ten_tieu_de" name="link_demo"><?php echo $phim_details->link_demo ?></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Loại phim</label>
                                <div class="col-sm-9">
                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="id_loai_phim">
                                        <option selected value="<?php echo $phim_details->id_loai_phim ?>"><?php echo $phim_details->ten_loai ?></option>
                                        <?php foreach ($theloai as $key => $value){ ?>
                                            <option value="<?php echo $value->id ?>"><?php echo $value->ten_loai ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>


                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" name="btn_save" class="btn btn-primary">Lưu</button>
                                <a type="submit" href="ds_phim.php" class="btn btn-primary">Danh sách</a>
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
