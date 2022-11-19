<body>
<link rel="stylesheet" href="public/abc/dmitryvolkov.me/demo/flixgo2.0/main/css/main3.css">
<!-- ==========Preloader========== -->
<!--<div class="preloader">-->
<!--    <div class="preloader-inner">-->
<!--        <div class="preloader-icon">-->
<!--            <span></span>-->
<!--            <span></span>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<!--<div class="overlay"></div>-->
<!--<a href="#0" class="scrollToTop">-->
<!--    <i class="fas fa-angle-up"></i>-->
<!--</a>-->
<!-- ==========Overlay========== -->
<!-- ==========Window-Warning-Section========== -->
<!--<section class="window-warning inActive">-->
<!--    <div class="lay"></div>-->
<!--    <div class="warning-item">-->
<!--        <h6 class="subtitle">Welcome! </h6>-->
<!--        <h4 class="title">Select Your Seats</h4>-->
<!--        <div class="thumb">-->
<!--            <img src="assets/images/movie/seat-plan.png" alt="movie">-->
<!--        </div>-->
<!--        <a href="movie-seat-plan.html" class="custom-button seatPlanButton">Seat Plans<i class="fas fa-angle-right"></i></a>-->
<!--    </div>-->
<!--</section>-->
<!-- ==========Window-Warning-Section========== -->

<!-- ==========Banner-Section========== -->
<!-- ==========Banner-Section========== -->

<!-- ==========Book-Section========== -->
    <div class="container1">
        <form class="form-showtime">
<!--            <div class="form-group">-->
<!--                <div class="thumb">-->
<!--                    <img src="assets/images/ticket/city.png" alt="ticket">-->
<!--                </div>-->
<!--                <span class="type">Thành Phố: </span>-->
<!--                <select class="select-bar">-->
<!--                    <option value="london">London</option>-->
<!--                    <option value="dhaka">dhaka</option>-->
<!--                    <option value="rosario">rosario</option>-->
<!--                    <option value="madrid">madrid</option>-->
<!--                    <option value="koltaka">kolkata</option>-->
<!--                    <option value="rome">rome</option>-->
<!--                    <option value="khoksa">khoksa</option>-->
<!--                </select>-->
<!--            </div>-->

            <div class="form-group">
<!--                <div class="thumb">-->
<!--                    <img src="assets/images/ticket/date.png" alt="ticket">-->
<!--                </div>-->
                <span class="type">Ngày chiếu</span>
                    <?php foreach ($suat_chieu as $key => $value){?>
                        <a href="phong_chieu.php?id=<?php echo $value->id_lichchieu; ?>"><?php echo $value->ngay_chieu?></a>
                    <?php } ?>
            </div>

<!--            <div class="form-group">-->
<!--                <div class="thumb">-->
<!--                    <img src="assets/images/ticket/cinema.png" alt="ticket">-->
<!--                </div>-->
<!--                <span class="type">cinema</span>-->
<!--                <select class="select-bar">-->
<!--                    <option value="Awaken">Awaken</option>-->
<!--                    <option value="Venus">Venus</option>-->
<!--                    <option value="wanted">wanted</option>-->
<!--                    <option value="joker">joker</option>-->
<!--                    <option value="fid">fid</option>-->
<!--                    <option value="kidio">kidio</option>-->
<!--                    <option value="mottus">mottus</option>-->
<!--                </select>-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <div class="thumb">-->
<!--                    <img src="assets/images/ticket/exp.png" alt="ticket">-->
<!--                </div>-->
<!--                <span class="type">Experience</span>-->
<!--                <select class="select-bar">-->
<!--                    <option value="English-2D">English-2D</option>-->
<!--                    <option value="English-3D">English-3D</option>-->
<!--                    <option value="Hindi-2D">Hindi-2D</option>-->
<!--                    <option value="Hindi-3D">Hindi-3D</option>-->
<!--                    <option value="Telegu-2D">Telegu-2D</option>-->
<!--                    <option value="Telegu-3D">Telegu-3D</option>-->
<!--                </select>-->
<!--            </div>-->
        </form>
    </div>
<!-- ==========Book-Section========== -->

<!-- ==========Movie-Section========== -->

<!--    <div class="container2">-->
<!---->
<!--            <div class="col-lg-9 mb-5 mb-lg-0">-->
<!--                <ul class="seat-plan-wrapper bg-five">-->
<!--                    <li>-->
<!--                        <div class="movie-name">-->
<!--                            <div class="icons">-->
<!--                                <i class="far fa-heart"></i>-->
<!--                                <i class="fas fa-heart"></i>-->
<!--                            </div>-->
<!--                            <a href="#0" class="name">Genesis Cinema</a>-->
<!--                            <div class="location-icon">-->
<!--                                <i class="fas fa-map-marker-alt"></i>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="movie-schedule">-->
<!--                            <div class="item">-->
<!--                                09:40-->
<!--                            </div>-->
<!--                            <div class="item">-->
<!--                                13:45-->
<!--                            </div>-->
<!--                            <div class="item">-->
<!--                                15:45-->
<!--                            </div>-->
<!--                            <div class="item">-->
<!--                                19:50-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <div class="movie-name">-->
<!--                            <div class="icons">-->
<!--                                <i class="far fa-heart"></i>-->
<!--                                <i class="fas fa-heart"></i>-->
<!--                            </div>-->
<!--                            <a href="#0" class="name">the beach</a>-->
<!--                            <div class="location-icon">-->
<!--                                <i class="fas fa-map-marker-alt"></i>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="movie-schedule">-->
<!--                            <div class="item">-->
<!--                                09:40-->
<!--                            </div>-->
<!--                            <div class="item">-->
<!--                                13:45-->
<!--                            </div>-->
<!--                            <div class="item">-->
<!--                                15:45-->
<!--                            </div>-->
<!--                            <div class="item">-->
<!--                                19:50-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                    <li  class="active">-->
<!--                        <div class="movie-name">-->
<!--                            <div class="icons">-->
<!--                                <i class="far fa-heart"></i>-->
<!--                                <i class="fas fa-heart"></i>-->
<!--                            </div>-->
<!--                            <a href="#0" class="name">city work</a>-->
<!--                            <div class="location-icon">-->
<!--                                <i class="fas fa-map-marker-alt"></i>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="movie-schedule">-->
<!--                            <div class="item">-->
<!--                                09:40-->
<!--                            </div>-->
<!--                            <div class="item active">-->
<!--                                13:45-->
<!--                            </div>-->
<!--                            <div class="item">-->
<!--                                15:45-->
<!--                            </div>-->
<!--                            <div class="item">-->
<!--                                19:50-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <div class="movie-name">-->
<!--                            <div class="icons">-->
<!--                                <i class="far fa-heart"></i>-->
<!--                                <i class="fas fa-heart"></i>-->
<!--                            </div>-->
<!--                            <a href="#0" class="name">box park</a>-->
<!--                            <div class="location-icon">-->
<!--                                <i class="fas fa-map-marker-alt"></i>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="movie-schedule">-->
<!--                            <div class="item">-->
<!--                                09:40-->
<!--                            </div>-->
<!--                            <div class="item">-->
<!--                                13:45-->
<!--                            </div>-->
<!--                            <div class="item">-->
<!--                                15:45-->
<!--                            </div>-->
<!--                            <div class="item">-->
<!--                                19:50-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <div class="movie-name">-->
<!--                            <div class="icons">-->
<!--                                <i class="far fa-heart"></i>-->
<!--                                <i class="fas fa-heart"></i>-->
<!--                            </div>-->
<!--                            <a href="#0" class="name">la mer</a>-->
<!--                            <div class="location-icon">-->
<!--                                <i class="fas fa-map-marker-alt"></i>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="movie-schedule">-->
<!--                            <div class="item">-->
<!--                                09:40-->
<!--                            </div>-->
<!--                            <div class="item">-->
<!--                                13:45-->
<!--                            </div>-->
<!--                            <div class="item">-->
<!--                                15:45-->
<!--                            </div>-->
<!--                            <div class="item">-->
<!--                                19:50-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <div class="movie-name">-->
<!--                            <div class="icons">-->
<!--                                <i class="far fa-heart"></i>-->
<!--                                <i class="fas fa-heart"></i>-->
<!--                            </div>-->
<!--                            <a href="#0" class="name">wanted</a>-->
<!--                            <div class="location-icon">-->
<!--                                <i class="fas fa-map-marker-alt"></i>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="movie-schedule">-->
<!--                            <div class="item">-->
<!--                                09:40-->
<!--                            </div>-->
<!--                            <div class="item">-->
<!--                                13:45-->
<!--                            </div>-->
<!--                            <div class="item">-->
<!--                                15:45-->
<!--                            </div>-->
<!--                            <div class="item">-->
<!--                                19:50-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </div>-->
<!--<!--            <div class="col-lg-3 col-md-6 col-sm-10">-->-->
<!--<!--                <div class="widget-1 widget-banner">-->-->
<!--<!--                    <div class="widget-1-body">-->-->
<!--<!--                        <a href="#0">-->-->
<!--<!--                            <img src="assets/images/sidebar/banner/banner03.jpg" alt="banner">-->-->
<!--<!--                        </a>-->-->
<!--<!--                    </div>-->-->
<!--<!--                </div>-->-->
<!--<!--            </div>-->-->
<!--    </div>-->

<!-- ==========Movie-Section========== -->

</body>
