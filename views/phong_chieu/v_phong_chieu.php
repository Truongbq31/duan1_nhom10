


<div style="margin-top: 200px; color: whitesmoke" class="container">
    <table border="1" style="color: whitesmoke !important;">
        <tr>
            <th>Tên phòng</th>
            <th>Gio chieeu</th>
        </tr>
        <?php foreach ($phong_chieu as $key => $value){
            $date = strtotime($value->ngay_chieu);
            echo $date;
            if($date )
            ?>

            <tr>
                <th><?php echo $value->ten_phong ?></th>
                <th><?php echo $value->gio_bd ?></th>
            </tr>
        <?php } ?>
    </table>

</div>




<!--<div class="container2">-->
<!---->
<!---->
<!--   -->
<!---->
<!---->
<!--    <div class="col-lg-9 mb-5 mb-lg-0">-->
<!--        <ul class="seat-plan-wrapper bg-five">-->
<!--            <li>-->
<!--                <div class="movie-name">-->
<!--                    <div class="icons">-->
<!--                        <i class="far fa-heart"></i>-->
<!--                        <i class="fas fa-heart"></i>-->
<!--                    </div>-->
<!--<!--                    -->--><?php ////foreach ($lich_chieu as $key =>$value){?>
<!--<!--                        <span>-->--><?php ////echo $value->ten_phong;?><!--<!--</span>-->-->
<!--<!--                    -->--><?php ////}?>
<!--                    <div class="location-icon">-->
<!--                        <i class="fas fa-map-marker-alt"></i>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="movie-schedule">-->
<!--                    <div class="item">-->
<!--                        09:40-->
<!--                    </div>-->
<!--                    <div class="item">-->
<!--                        13:45-->
<!--                    </div>-->
<!--                    <div class="item">-->
<!--                        15:45-->
<!--                    </div>-->
<!--                    <div class="item">-->
<!--                        19:50-->
<!--                    </div>-->
<!--                </div>-->
<!--            </li>-->
<!--            <li>-->
<!--                <div class="movie-name">-->
<!--                    <div class="icons">-->
<!--                        <i class="far fa-heart"></i>-->
<!--                        <i class="fas fa-heart"></i>-->
<!--                    </div>-->
<!--                    <a href="#0" class="name">the beach</a>-->
<!--                    <div class="location-icon">-->
<!--                        <i class="fas fa-map-marker-alt"></i>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="movie-schedule">-->
<!--                    <div class="item">-->
<!--                        09:40-->
<!--                    </div>-->
<!--                    <div class="item">-->
<!--                        13:45-->
<!--                    </div>-->
<!--                    <div class="item">-->
<!--                        15:45-->
<!--                    </div>-->
<!--                    <div class="item">-->
<!--                        19:50-->
<!--                    </div>-->
<!--                </div>-->
<!--            </li>-->
<!--            <li  class="active">-->
<!--                <div class="movie-name">-->
<!--                    <div class="icons">-->
<!--                        <i class="far fa-heart"></i>-->
<!--                        <i class="fas fa-heart"></i>-->
<!--                    </div>-->
<!--                    <a href="#0" class="name">city work</a>-->
<!--                    <div class="location-icon">-->
<!--                        <i class="fas fa-map-marker-alt"></i>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="movie-schedule">-->
<!--                    <div class="item">-->
<!--                        09:40-->
<!--                    </div>-->
<!--                    <div class="item active">-->
<!--                        13:45-->
<!--                    </div>-->
<!--                    <div class="item">-->
<!--                        15:45-->
<!--                    </div>-->
<!--                    <div class="item">-->
<!--                        19:50-->
<!--                    </div>-->
<!--                </div>-->
<!--            </li>-->
<!--            <li>-->
<!--                <div class="movie-name">-->
<!--                    <div class="icons">-->
<!--                        <i class="far fa-heart"></i>-->
<!--                        <i class="fas fa-heart"></i>-->
<!--                    </div>-->
<!--                    <a href="#0" class="name">box park</a>-->
<!--                    <div class="location-icon">-->
<!--                        <i class="fas fa-map-marker-alt"></i>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="movie-schedule">-->
<!--                    <div class="item">-->
<!--                        09:40-->
<!--                    </div>-->
<!--                    <div class="item">-->
<!--                        13:45-->
<!--                    </div>-->
<!--                    <div class="item">-->
<!--                        15:45-->
<!--                    </div>-->
<!--                    <div class="item">-->
<!--                        19:50-->
<!--                    </div>-->
<!--                </div>-->
<!--            </li>-->
<!--            <li>-->
<!--                <div class="movie-name">-->
<!--                    <div class="icons">-->
<!--                        <i class="far fa-heart"></i>-->
<!--                        <i class="fas fa-heart"></i>-->
<!--                    </div>-->
<!--                    <a href="#0" class="name">la mer</a>-->
<!--                    <div class="location-icon">-->
<!--                        <i class="fas fa-map-marker-alt"></i>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="movie-schedule">-->
<!--                    <div class="item">-->
<!--                        09:40-->
<!--                    </div>-->
<!--                    <div class="item">-->
<!--                        13:45-->
<!--                    </div>-->
<!--                    <div class="item">-->
<!--                        15:45-->
<!--                    </div>-->
<!--                    <div class="item">-->
<!--                        19:50-->
<!--                    </div>-->
<!--                </div>-->
<!--            </li>-->
<!--            <li>-->
<!--                <div class="movie-name">-->
<!--                    <div class="icons">-->
<!--                        <i class="far fa-heart"></i>-->
<!--                        <i class="fas fa-heart"></i>-->
<!--                    </div>-->
<!--                    <a href="#0" class="name">wanted</a>-->
<!--                    <div class="location-icon">-->
<!--                        <i class="fas fa-map-marker-alt"></i>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="movie-schedule">-->
<!--                    <div class="item">-->
<!--                        09:40-->
<!--                    </div>-->
<!--                    <div class="item">-->
<!--                        13:45-->
<!--                    </div>-->
<!--                    <div class="item">-->
<!--                        15:45-->
<!--                    </div>-->
<!--                    <div class="item">-->
<!--                        19:50-->
<!--                    </div>-->
<!--                </div>-->
<!--            </li>-->
<!--        </ul>-->
<!--    </div>-->
<!--    <!--            <div class="col-lg-3 col-md-6 col-sm-10">-->-->
<!--    <!--                <div class="widget-1 widget-banner">-->-->
<!--    <!--                    <div class="widget-1-body">-->-->
<!--    <!--                        <a href="#0">-->-->
<!--    <!--                            <img src="assets/images/sidebar/banner/banner03.jpg" alt="banner">-->-->
<!--    <!--                        </a>-->-->
<!--    <!--                    </div>-->-->
<!--    <!--                </div>-->-->
<!--    <!--            </div>-->-->
<!--</div>-->
