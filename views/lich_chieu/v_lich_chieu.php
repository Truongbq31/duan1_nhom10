

<!-- Mirrored from pixner.net/boleto/demo/movie-ticket-plan.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 15:04:41 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="views/css/bootstrap.min.css">
    <link rel="stylesheet" href="views/css/all.min.css">
    <link rel="stylesheet" href="views/css/animate.css">
    <link rel="stylesheet" href="views/css/flaticon.css">
    <link rel="stylesheet" href="views/css/magnific-popup.css">
    <link rel="stylesheet" href="views/css/odometer.css">
    <link rel="stylesheet" href="views/css/owl.carousel.min.css">
    <link rel="stylesheet" href="views/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="views/css/nice-select.css">
    <link rel="stylesheet" href="views/css/main.css">

    <link rel="shortcut icon" href="views/images/favicon.png" type="image/x-icon">

    <title>Boleto  - Online Ticket Booking Website HTML Template</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>

<body>
<section class="book-section bg-one">
    <div class="container">
        <form class="ticket-search-form two">

            <div class="form-group">
                <div class="thumb">
                    <img src="views/images/ticket/date.png" alt="ticket">
                </div>
                <span class="type">date</span>
                <select class="select-bar day">
                    <?php foreach ($lich_chieu as $key => $value){?>
                    <option value="<?php echo $value->id_ngay_chieu;?>"><?php echo $value->ngay;?></option>
                      <?php } ?>
                </select>
            </div>
        </form>
    </div>
</section>
<!-- ==========Book-Section========== -->

<!-- ==========Movie-Section========== -->
<div class="ticket-plan-section padding-bottom padding-top ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 mb-5 mb-lg-0" >
                <ul class="seat-plan-wrapper bg-five ">
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- ==========Movie-Section========== -->

<!-- ==========Newslater-Section========== -->

<!-- ==========Newslater-Section========== -->


<script src="views/js/jquery-3.3.1.min.js"></script>
<script src="views/js/modernizr-3.6.0.min.js"></script>
<script src="views/js/plugins.js"></script>
<script src="views/js/bootstrap.min.js"></script>
<script src="views/js/isotope.pkgd.min.js"></script>
<script src="views/js/magnific-popup.min.js"></script>
<script src="views/js/owl.carousel.min.js"></script>
<script src="views/js/wow.min.js"></script>
<script src="views/js/countdown.min.js"></script>
<script src="views/js/odometer.min.js"></script>
<script src="views/js/viewport.jquery.js"></script>
<script src="views/js/nice-select.js"></script>
<script src="views/js/main.js"></script>
<script>
    $(document).ready(function(){
        $(".day").change(function() {
            var ngay = $(".day").val();
            $.post("models/m_data.php" ,{id: ngay},function (data){
                $(".bg-five").html(data);
            })
        })
    })
</script>
</body>
<!-- Mirrored from pixner.net/boleto/demo/movie-ticket-plan.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 15:04:45 GMT -->
</html>