

<body>
<link rel="stylesheet" href="public/abc/dmitryvolkov.me/demo/flixgo2.0/main/css/main3.css">

<div class="container1">
    <form class="form-showtime">

                    <div class="form-group">

                        <span class="type">Ngày chiếu :</span>
<!--                            --><?php //foreach ($lich_chieu as $key => $value){?>
<!--                                <a href="phong_chieu.php?id=--><?php //echo $value->id_lichchieu; ?><!--">-->
<!--        --><?php //echo $value->ngay_chieu?><!--</a>-->
<!--                            --><?php //} ?>
                    </div>
</div>

<div class="list--times hide">
    <div class="flexslider_2 carousel">
        <ul class="tab--showtimes-controls slides">
            <?php foreach ($lich_chieu as $key => $value){?>
            <li><a id="showtime-tab-0" class="tab--control js__tab_time_control js__active" href="phong_chieu.php?id=<?php echo $value->id_lichchieu; ?>"
                   <span class="week"><?php echo $value->ngay?></a></span>
                           </a></li>
            <?php } ?>
<!--            <li><a id="showtime-tab-1" class="tab--control js__tab_time_control not_active" href="#"-->
<!--                   data-time="2022-11-21"><span class="week">Thứ 2</span><span-->6
<!--                            class="day">21-11</span></a></li>-->
<!--            <li><a id="showtime-tab-2" class="tab--control js__tab_time_control not_active" href="#"-->
<!--                   data-time="2022-11-22"><span class="week">Thứ 3</span><span-->
<!--                            class="day">22-11</span></a></li>-->
<!--            <li><a id="showtime-tab-3" class="tab--control js__tab_time_control not_active" href="#"-->
<!--                   data-time="2022-11-23"><span class="week">Thứ 4</span><span-->
<!--                            class="day">23-11</span></a></li>-->
<!--            <li><a id="showtime-tab-4" class="tab--control js__tab_time_control not_active" href="#"-->
<!--                   data-time="2022-11-24"><span class="week">Thứ 5</span><span-->
<!--                            class="day">24-11</span></a></li>-->
<!--            <li><a id="showtime-tab-5" class="tab--control js__tab_time_control not_active" href="#"-->
<!--                   data-time="2022-11-25"><span class="week">Thứ 6</span><span-->
<!--                            class="day">25-11</span></a></li>-->
<!--            <li><a id="showtime-tab-6" class="tab--control js__tab_time_control not_active" href="#"-->
<!--                   data-time="2022-11-26"><span class="week">Thứ 7</span><span-->
<!--                            class="day">26-11</span></a></li>-->
<!--            <li><a id="showtime-tab-7" class="tab--control js__tab_time_control not_active" href="#"-->
<!--                   data-time="2022-11-27"><span class="week">Chủ nhật</span><span-->
<!--                            class="day">27-11</span></a></li>-->
<!--            <li><a id="showtime-tab-8" class="tab--control js__tab_time_control not_active" href="#"-->
<!--                   data-time="2022-11-28"><span class="week">Thứ 2</span><span-->
<!--                            class="day">28-11</span></a></li>-->
<!--            <li><a id="showtime-tab-9" class="tab--control js__tab_time_control not_active" href="#"-->
<!--                   data-time="2022-11-29"><span class="week">Thứ 3</span><span-->
<!--                            class="day">29-11</span></a></li>-->
<!--            <li><a id="showtime-tab-10" class="tab--control js__tab_time_control not_active"-->
<!--                   href="#" data-time="2022-11-30"><span class="week">Thứ 4</span><span-->
<!--                            class="day">30-11</span></a></li>-->
<!--            <li><a id="showtime-tab-11" class="tab--control js__tab_time_control not_active"-->
<!--                   href="#" data-time="2022-12-01"><span class="week">Thứ 5</span><span-->
<!--                            class="day">01-12</span></a></li>-->
<!--            <li><a id="showtime-tab-12" class="tab--control js__tab_time_control not_active"-->
<!--                   href="#" data-time="2022-12-02"><span class="week">Thứ 6</span><span-->
<!--                            class="day">02-12</span></a></li>-->
<!--            <li><a id="showtime-tab-13" class="tab--control js__tab_time_control not_active"-->
<!--                   href="#" data-time="2022-12-03"><span class="week">Thứ 7</span><span-->
<!--                            class="day">03-12</span></a></li>-->
<!--            <li><a id="showtime-tab-14" class="tab--control js__tab_time_control not_active"-->
<!--                   href="#" data-time="2022-12-04"><span class="week">Chủ nhật</span><span-->
<!--                            class="day">04-12</span></a></li>-->
<!--            <li><a id="showtime-tab-15" class="tab--control js__tab_time_control not_active"-->
<!--                   href="#" data-time="2022-12-05"><span class="week">Thứ 2</span><span-->
<!--                            class="day">05-12</span></a></li>-->
<!--            <li><a id="showtime-tab-16" class="tab--control js__tab_time_control not_active"-->
<!--                   href="#" data-time="2022-12-06"><span class="week">Thứ 3</span><span-->
<!--                            class="day">06-12</span></a></li>-->
        </ul>
    </div>
    <!-- <div class="loading-rap hide">
        <span class="cssload-loader loading">
            <span class="cssload-loader-inner"></span>
        </span>
    </div> -->

    <div class="bhd-notfound hide">
        Phim chưa bán vé
    </div>
                    <div class="date_2022-11-20 hide-date" style="display: block;">
                        <ul class="list--film-type">
                            <li class="item--film-type">
                                <div class="type">
                                    <span>2D</span>SUB <span class="film-rating">C13</span>
                                </div>

                                <ul class="times date_2022-11-20 hide-date" style="display: block;">
                                    <?php foreach ($suat_chieu as $key => $value){?>
                                    <li><a class="time added-transaction-id"
                                           href="seat.php?id=<?php echo $value->id_lichchieu;?>">
                                        <span><?php echo $value->gio_bd;?></a></span>
                                    </li>
                                     <?php } ?>
                                </ul>
                            </li>
                        </ul>
                    </div>
<!-- ==========Movie-Section========== -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js"
        integrity="sha512-CX7sDOp7UTAq+i1FYIlf9Uo27x4os+kGeoT7rgwvY+4dmjqV0IuE/Bl5hVsjnQPQiTOhAX1O2r2j5bjsFBvv/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
