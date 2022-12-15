
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
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên phim</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="ten_tieu_de" name="name" placeholder="Tên phim" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Rating</label>
                                <div class="col-sm-9">
                                    <input type="number" min="0" max="5" class="form-control" id="ten_tieu_de" name="rate" placeholder="Rating" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Description</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="ten_tieu_de" name="description" placeholder="Description" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Hình ảnh</label>
                                <div class="col-sm-9">
                                    <div class="custom-file">
                                        <input type="file"  class="custom-file-input" id="validatedCustomFile" name="img" required>
                                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Link Demo phim</label>
                                <div class="col-sm-9">
                                    <textarea type="text" class="form-control" id="ten_tieu_de" name="link_demo" placeholder="Link demo" required></textarea>
                                </div>
                            </div>

                            <!-- <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Ngày nhập</label>
                                <div class="col-sm-9">
                                    <input type="datetime-local" class="form-control" id="ten_tieu_de" name="ngay_nhap" placeholder="Ngày nhập">
                                </div>
                            </div> -->
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Loại phim</label>
                                <div class="col-sm-9">

                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="id_loai_phim">
                                        <?php foreach ($theloai as $key => $value){ ?>
                                            <option value="<?php echo $value->id ?>"><?php echo $value->ten_loai ?></option>
                                        <?php } ?>
                                    </select>


                                </div>
                            </div>




                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" name="btn-add" class="btn btn-primary">Thêm</button>
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
