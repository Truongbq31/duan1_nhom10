<section class="section details">
    <!-- details background -->
    <div class="details__bg" data-bg="view/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/home/home__bg.jpg"></div>
    <!-- end details background -->

    <!-- details content -->
    <div class="container">
        <?php foreach ($details as $key => $values){ ?>
        <div class="row">
            <!-- title -->
            <div class="col-12">
                <h1 class="details__title"><?php echo $values->name; ?></h1>
            </div>
            <!-- end title -->

            <!-- content -->
            <div class="col-12 col-xl-6">
                <div class="card card--details">
                    <!-- card cover -->
                    <div class="card__cover">
                        <img src="admin/public/img/<?php echo $values->img;?>" alt="">
                    </div>
                    <!-- end card cover -->

                    <!-- card content -->
                    <div class="card__content">
                        <div class="card__wrap">
                            <span class="card__rate"> <?php echo $values->rate;?></span>

                            <ul class="card__list">
                                <li>HD</li>
                                <li>16+</li>
                            </ul>
                        </div>

                        <ul class="card__meta">
                            <li><span>Genre:</span> <a href="#"><?php echo $values->ten_loai;?></a>
                                <a href="#">Triler</a></li>
                            <li><span>Release year:</span> 2017</li>
                            <li><span>Running time:</span> 120 min</li>
                            <li><span>Country:</span> <a href="#">USA</a> </li>
                        </ul>

                        <div class="card__description card__description--details">
                            <?php echo $values->description;?>
                        </div>

                        <?php if(!isset($_SESSION['user']) && !isset($_SESSION['admin'])) echo "<p style='color: orange;font-size: large;font-weight: 500;text-align: center;padding: 0.7em 0em' ><a href='login.php?id_phim=$values->id_phim'>Vui lòng đăng nhập để đặt vé</a></p>";?>
                        <a style="margin-top: 50px" class="header__sign-in" <?php if(isset($_SESSION['user']) || isset($_SESSION['admin'])){
                            echo "";
                        }else{
                            echo "hidden";
                        } ?> href="lich_chieu.php?id=<?php echo $values->id_phim;?>">Đặt vé</a>


                    </div>
                    <!-- end card content -->
                </div>
            </div>
            <!-- end content -->

            <!-- player -->
            <div class="col-12 col-xl-6">
                <?php echo $values->link_demo;?>
            </div>
            <!-- end player -->
        </div>
        <?php } ?>

    </div>
    <!-- end details content -->
</section>
<!-- end details -->

<!-- content -->
<section class="content">

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 col-xl-8">
                <!-- content tabs -->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
                        <div class="row">
                            <div class="col-12">
                                <h1 style="color: white">Bình luận</h1>
                            </div>
                            <!-- comments -->
                            <?php foreach ($comment as $key => $value){ ?>
                            <div class="col-12">
                                <div class="">
                                    <ul class="comments__list">
                                        <li class="comments__item">
                                            <div class="comments__autor">
                                                <img class="comments__avatar" src="public/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/user.svg" alt="">
                                                <span class="comments__name"><?php echo $value->username;?></span>
                                                <span class="comments__time"><?php echo $value->ngay_binh_luan;?></span>
                                            </div>
                                            <p class="comments__text"><?php echo $value->noi_dung;?></p>
                                            <div class="comments__actions">
                                                <div class="comments__rate">
                                                    <button type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.3,10.08A3,3,0,0,0,19,9H14.44L15,7.57A4.13,4.13,0,0,0,11.11,2a1,1,0,0,0-.91.59L7.35,9H5a3,3,0,0,0-3,3v7a3,3,0,0,0,3,3H17.73a3,3,0,0,0,2.95-2.46l1.27-7A3,3,0,0,0,21.3,10.08ZM7,20H5a1,1,0,0,1-1-1V12a1,1,0,0,1,1-1H7Zm13-7.82-1.27,7a1,1,0,0,1-1,.82H9V10.21l2.72-6.12A2.11,2.11,0,0,1,13.1,6.87L12.57,8.3A2,2,0,0,0,14.44,11H19a1,1,0,0,1,.77.36A1,1,0,0,1,20,12.18Z"/></svg>12</button>

                                                    <button type="button">7<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19,2H6.27A3,3,0,0,0,3.32,4.46l-1.27,7A3,3,0,0,0,5,15H9.56L9,16.43A4.13,4.13,0,0,0,12.89,22a1,1,0,0,0,.91-.59L16.65,15H19a3,3,0,0,0,3-3V5A3,3,0,0,0,19,2ZM15,13.79l-2.72,6.12a2.13,2.13,0,0,1-1.38-2.78l.53-1.43A2,2,0,0,0,9.56,13H5a1,1,0,0,1-.77-.36A1,1,0,0,1,4,11.82l1.27-7a1,1,0,0,1,1-.82H15ZM20,12a1,1,0,0,1-1,1H17V4h2a1,1,0,0,1,1,1Z"/></svg></button>
                                                </div>

                                                <button type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.707,11.293l-8-8A.99991.99991,0,0,0,12,4V7.54492A11.01525,11.01525,0,0,0,2,18.5V20a1,1,0,0,0,1.78418.62061,11.45625,11.45625,0,0,1,7.88672-4.04932c.0498-.00635.1748-.01611.3291-.02588V20a.99991.99991,0,0,0,1.707.707l8-8A.99962.99962,0,0,0,21.707,11.293ZM14,17.58594V15.5a.99974.99974,0,0,0-1-1c-.25488,0-1.2959.04932-1.56152.085A14.00507,14.00507,0,0,0,4.05176,17.5332,9.01266,9.01266,0,0,1,13,9.5a.99974.99974,0,0,0,1-1V6.41406L19.58594,12Z"/></svg>Reply</button>
                                                <button type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19,14a1,1,0,0,0-1.22.72A7,7,0,0,1,11,20H5.41l.64-.63a1,1,0,0,0,0-1.41A7,7,0,0,1,9.25,6.22a1,1,0,0,0-.5-1.94A9,9,0,0,0,4,18.62L2.29,20.29a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h8a9,9,0,0,0,8.72-6.75A1,1,0,0,0,19,14ZM21,2a1,1,0,0,0-1,1h0a5,5,0,1,0,.3,7.75A1,1,0,1,0,19,9.25,3,3,0,1,1,17,4a3,3,0,0,1,2.23,1H18a1,1,0,0,0,0,2h3a1,1,0,0,0,1-1V3A1,1,0,0,0,21,2Z"/></svg>Quote</button>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>

                            <?php } ?>


                            <?php if(!isset($_SESSION['user']) && !isset($_SESSION['admin'])) echo "<p style='color: orange;font-size: large;font-weight: 500;text-align: center;padding: 0.7em 0em' ><a href='login.php?id_phim=$values->id_phim'>Vui lòng đăng nhập để bình luận</a></p>";?>
                            <div class="col-12" <?php if(isset($_SESSION['admin']) || isset($_SESSION['user'])){
                                echo "";
                            }else{
                                echo "hidden";
                            } ?>>
                                <form action="" class="form" method="post">
                                    <textarea id="text" name="noi_dung" class="form__textarea" placeholder="Add comment"></textarea>
                                    <input hidden name="id_nguoi_dung" placeholder="ID người dùng" value="<?php echo $_SESSION['id_nguoi_dung'] ?>">
                                    <input hidden name="id_phim" placeholder="id phim" value="<?php echo $_GET['id']?>">
                                    <button type="submit" name="btn_comment" class="form__btn">Comment</button>
                                </form>
                            </div>


                            <!-- end comments -->
                        </div>
                    </div>
                </div>
                <!-- end content tabs -->
            </div>

            <!-- sidebar phim cùng loai -->
            <div class="col-12 col-lg-4 col-xl-4">
                <div class="row row--grid">
                    <!-- section title -->
                    <div class="col-12">
                        <h2 class="section__title section__title--sidebar">Phim cùng thể loại</h2>
                    </div>
                    <!-- end section title -->

                    <!-- card -->
                    <?php foreach ($phims as $key => $values){
                        foreach ($details as $check => $value){
                            if($values->id_loai_phim == $value->id_loai_phim){
                        ?>
                    <div class="col-6 col-sm-4 col-lg-6">
                        <div class="card">
                            <a href="details.php?id=<?php echo $values->id_phim ?>" class="card__cover">
                                <img src="admin/public/img/<?php echo $values->img;?>" alt="">
                                <span class="card__play">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
								</span>
                            </a>
                            <div class="card__content">
                                <h3 class="card__title"><a href="#"><?php echo $values->name;?></a></h3>
                                <span class="card__category">
									<a href="ds_phim.php?id=<?php echo $values->id_loai;?>"><?php echo $values->ten_loai;?></a>
								</span>
                                <span class="card__rate"><?php echo $values->rate;?></span>
                            </div>
                        </div>
                    </div>
                    <?php } } }?>
                    <!-- end card -->
S
                </div>
            </div>
            <!-- end sidebar -->
        </div>
    </div>
</section>
<!-- end content -->

<!-- footer -->
